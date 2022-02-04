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
        <h4 class="text-green-500 text-xl font-semibold">Área Personal</h4>
        <br>
        <hr />
        <br>
        @if(count($cursos))
        <div class="w-full md:w-8/12">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="w-32 md:w-7/12" style="text-align: left" colspan="2">Curso</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $row)
                    <tr>
                        <td class="w-32 md:w-7/12">
                            {{ $row->name }}
                        </td>
                        <td><video controls="controls" style="width: 150px; height: 100px;">
                                <source src="{{ $row->url }}" type="video/mp4" />
                            </video>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="w-full my-6 px-4 py-6 text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100"
            role="alert">
            Aún no has adquirido ningún curso. Cuando hayas adquirido algún curso lo tendrás disponible en esta
            sección..
        </div>
        @endif
    </div>
</div>
@endsection