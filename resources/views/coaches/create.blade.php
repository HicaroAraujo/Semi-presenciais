@extends('layouts.base')

@section('content')
    
    <form action="{{url('coaches')}}" class="max-w-sm mx-auto  mt-10" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-white">Nome:</label>
            <input type="text" name="name" placeholder="Nome do Técnico" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
        </div>


        <div class="mb-5">
            <label for="age" class="block mb-2 text-sm font-medium text-white">Idade:</label>
            <input type="number" name="age" min="0"  placeholder="Idade"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>


        <div class="mb-5">
            <label for="city" class="block mb-2 text-sm font-medium text-white">Cidade:</label>
            <input type="text" name="city" placeholder="Cidade" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar novo Técnico</button>
    </form>
@endsection




