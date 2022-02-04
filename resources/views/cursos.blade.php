@extends('layouts.welcome')

@section('content')
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8">
    <div class="p-4">
        <h4 class="text-green-500 text-xl font-semibold">Cursos</h4>
        <br>
        <hr>
        <div class="mb-14 mt-6">
            <div class="w-full">
                <p align=left class="text-green-500"><b>Vivir desde la calma</b></p>
                <br>
                <img src="img/cursos1.jpg" alt="Chica contenta"
                    class="w-full lg:w-4/12 lg:ml-4 rounded float-right mb-2 sm:mb-0" />
                <p align=left>Guía con todas las herramientas que necesitas para manejar tu Ansiedad</p>
                <p>Sufres de Ansiedad?. Inscríbete al Curso <b>Vivir desde la Calma</b> y aprende a reducir y manejar tu
                    Ansiedad de manera que puedas Vivir desde la Calma</p>

                <p>A través de este curso trabajaremos con varias herramientas que te darán las claves para manejar tu
                    ansiedad y vivir desde la calma... y además de esto veremos los posibles orígenes de tu ansiedad, a
                    qué niveles se manifiestan en tí y como reducir esos niveles hasta eliminarlo completamente.</p>
                <p align=left>Al hacer este curso podrás:</p>
                <p>Beneficio 1: Llevar integradas tus propias herramientas.</p>
                <p>Beneficio 2: Ser tú mismo/a quien maneja su estado, sin necesidad de recurrir a medicamentos.</p>
                <p>Beneficio 3: Vivir tu vida plenamente desde la calma y la alegría.</p>
                <button
                    class="mt-5 text-lg font-semibold border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 w-full sm:w-7/12"
                    onclick="agregar(40, 'Vivir desde la Calma', 1)">Añadir al
                    carrito</button>

            </div>
        </div>


        <div class="mb-14">
            <div class="w-full">
                <p align=left class="text-green-500"><b>Prevención de Recaidas en Adicciones</b></p><br>
                <img class="w-full lg:w-4/12 lg:ml-4 rounded float-right mb-2 sm:mb-0" src="img/cursos2.jpg"
                    alt="Hombre sonriente tomando un café" class="mt-5 rounded" />
                <p align=left>Todas las claves que necesitas para prevenir una recaida en tu consumo una vez que has
                    logrado la abstinencia.</p>
                <p>¿Realmente quieres dejar el consumo y lo has conseguido, pero al poco vuelves a lo mismo?. Inscríbete
                    al Curso <b>Prevención de Recaidas en Adicciones</b> y aprende que debes hacer y evitar para no
                    volver a caer en el consumo.</p>
                <p>A través de este curso podrás identificar las situaciones que pueden empujarte a una recaida casi sin
                    darte cuena, identificaremos los pasos de la cadena de consumo y además estudiaremos las estrategias
                    para salir de ellas sin caer en el consumo.</p>
                <p align=left>Al hacer este curso podrás:</p>
                <p>Beneficio 2: Cómo evitar que una caida se convierta en recaida.</p>
                <p>Beneficio 3: Vivir tu vida libre de adicciones.</p>
                <p>Beneficio 1: Identificar qué situaciones son de riesgo y como afrontarlas.</p>

                <button
                    class="mt-5 text-lg font-semibold border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 w-full sm:w-7/12"
                    onclick="agregar(65, 'Prevención de Recaidas en Adicciones', 2)">Añadir al carrito</button>

            </div>

        </div>

        <div class="mb-14">
            <div class="w-full">
                <p align=left class="text-green-500"><b>Uso, Abuso o Dependencia?</b></p><br>
                <img src="img/cursos3.jpg" alt="Hombre fumando con una caña"
                    class="w-full lg:w-4/12 lg:ml-4 rounded float-right mb-2 sm:mb-0" />
                <p align=left>Guía para que tu mismo/a valores tu consumo</p>
                <p>¿Dudas de si lo que bebes o consumes es normal?. ¿Crees que es posible que estes desarrollando una
                    dependencia?. ¿Quizás lo tienes ya bastante claro?. ¿Te han dado ya avisos en tu trabajo, y es
                    posible que lo pierdas?. ¿Quizás tu preocupación es por un ser querido?</p>
                <p>A través de esta guía aclararás conceptos clave, valorarás los márgenes de normalidad en el consumo y
                    podrás dirigirte hacia la solución.</p>
                <p align=left>Al hacer este curso podrás:</p>
                <p>Beneficio 1: Aclarar conceptos y valorar la normalidad.</p>
                <p>Beneficio 2: Comprender qué te puede estar pasando.</p>
                <p>Beneficio 3: Todo es ganar, porque es totalmente gratuito.</p>
                <button
                    class="mt-5 text-lg font-semibold border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 w-full sm:w-7/12"
                    onclick="agregar(45, 'Uso, Abuso o Dependencia', 3)">Añadir al
                    carrito</button>
            </div>
        </div>
    </div>
</div>
@endsection