@extends('layouts.base')

@section('content')
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($coaches as $coach)
              @csrf
                <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">

                    <h3 class="text-xl font-bold text-gray-800 ">{{ $coach->name }}</h3>
                    <p class="text-gray-600 "><strong>Age:</strong> {{ $coach->age }}</p>
                    <p class="text-gray-600"><strong>City:</strong> {{ $coach->city }}</p>
        
                    <div class="flex justify-between items-center mt-4">
                        <a href="{{ url('coaches/'.$coach->id.'/edit') }}" 
                           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Editar
                        </a>
                        <form action="{{ url('coaches/'.$coach->id) }}" method="POST" class="inline">
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



