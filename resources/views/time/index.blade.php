@extends('layouts.base')

@section('content')

    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($times as $time)
              @csrf
                <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">

                   <img class="w-24 h-24 mb-3 rounded-full shadow-lg mx-auto w-40" src="{{ asset($time->image) }}" alt="{{ $time->name}}"/>
                    <h3 class="text-xl font-bold text-gray-800 ">{{ $time->name }}</h3>
                    <p class="text-gray-600 "><strong>Estádio:</strong> {{ $time->stadium }}</p>
                    <p class="text-gray-600"><strong>Cor do Uniforme:</strong> {{ $time->uniform_color }}</p>
                    <p class="text-gray-600"><strong>Colocação:</strong> {{ $time->placement }}</p>
                    <hr>
                    <p class="text-gray-600"><strong>Técnico</strong> {{ $time->coach->name}}</p>
                    <p class="text-gray-600"><strong>Idade</strong> {{ $time->coach->age}}</p>
                    <p class="text-gray-600"><strong> Natural de</strong> {{ $time->coach->city}}</p>

                    <div class="flex justify-between items-center mt-4">
                        <a href="{{ url('time/'.$time->id.'/edit') }}" 
                           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Editar
                        </a>
                        <form action="{{ url('time/'.$time->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                Deletar
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



