@extends('layouts.welcome')

@section('content')
<style>
    #divPrincipal {
        background: url("img/fondo.png") no-repeat;
        background-size: 100vw;
        background-position: bottom right;
    }
</style>
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="p-4">
        <h4 class="text-green-500 text-xl font-semibold">Contacto</h4>
        <br>
        <hr>
        <br>
        @if (session('success'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="w-full sm:w-4/12">
            <form action="{{ route('contacto.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <x-label for="name" :value="__('Nombre')" />
                    <x-input class="w-full" type="text" name="name" value="{{ old('name') }}" />
                </div>
                @error('name')
                <small class="text-red-500">
                    *{{ $message }}
                </small>
                @enderror
                <div class="mb-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input class="w-full" type="text" name="email" value="{{ old('email') }}" />
                </div>
                @error('email')
                <small class="text-red-500">
                    *{{ $message }}
                </small>
                @enderror
                <div class="mb-2">
                    <x-label for="message" :value="__('Mensaje')" />
                    <textarea
                        class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="message" rows="3">{{ old("message") }}</textarea>
                </div>
                @error('message')
                <small class="text-red-500 mb-2">
                    *{{ $message }}
                </small>
                @enderror
                <div>
                    <input
                        class="text-xl text-green-500 border-2 border-green-500 hover:text-white hover:bg-green-500 w-full"
                        type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection