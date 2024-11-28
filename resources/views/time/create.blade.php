@extends('layouts.base')

@section('content')
    
    <form action="{{url('time')}}" class="max-w-sm mx-auto  mt-10" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-white">Nome:</label>
            <input type="text" name="name" placeholder="Nome do Time" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
        </div>


        <div class="mb-5">
            <label for="stadium" class="block mb-2 text-sm font-medium text-white">Estádio do time:</label>
            <input type="text" name="stadium" placeholder="estádio"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>


        <div class="mb-5">
            <label for="uniform_color" class="block mb-2 text-sm font-medium text-white">Cor do uniforme:</label>
            <input type="text" name="uniform_color" placeholder="Cor do uniforme" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>

        <div class="mb-5">
            <label for="placement" class="block mb-2 text-sm font-medium text-white">Colocação do time:</label>
            <input type="text" name="placement" placeholder="colocação" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>

        <div class="mb-5">
          <label for="image" class="block mb-2 text-sm font-medium text-white" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">Logo do time</label>
          <input type="file" name="image" id="image" >
        </div>

        <div class="mb-5">
           <label for="coach_id" class="block mb-2 text-sm font-medium text-white">Técnico</label>
           <select name="coach_id" id="coach_id">
                <option value="">Selecionar um técnico</option>
                    @foreach($coaches as $coach)
                        <option value="{{$coach->id}}">{{$coach->name}}</option>
                        
                    @endforeach
           </select>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Cadastra time</button>
    </form>
@endsection




