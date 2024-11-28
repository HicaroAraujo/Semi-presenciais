@extends('layouts.base')

@section('content')
    
    <form action="{{url('coaches/'.$coach->id)}}" class="max-w-sm mx-auto" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-white mt-10">Nome do coach:</label>
            <input type="text" name="name" id="name" placeholder="Nome" value="{{$coach->name}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
        </div>

        <div class="mb-5">
            <label for="age" class="block mb-2 text-sm font-medium text-white">Age:</label>
            <input type="text" name="age" id= "age" placeholder="Age" value="{{$coach->age}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>

        <div class="mb-5">
            <label for="city" class="block mb-2 text-sm font-medium text-white">City:</label>
            <input type="text" name="city" id="city" placeholder="city"  value="{{$coach->city}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">update</button>
    </form>
@endsection


