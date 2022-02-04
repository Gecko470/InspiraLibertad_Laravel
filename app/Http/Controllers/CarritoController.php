<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function store(Request $request)
    {
        $cursos = $request->all();
        $cursosFiltrados = [];

        for ($i = 1; $i < count($cursos); $i++) {
            $cursoEncontrado = Shop::where('user_id', Auth::id())->where('product_id', (int)$cursos["inpCursos" . ($i - 1)])->first();

            if (!$cursoEncontrado) {
                array_push($cursosFiltrados, (int)$cursos["inpCursos" . ($i - 1)]);
            }
        }


        if (count($cursosFiltrados) > 0) {

            for ($i = 0; $i < count($cursosFiltrados); $i++) {
                Shop::create([
                    'user_id' => Auth::id(),
                    'product_id' => (int)$cursosFiltrados[$i]
                ]);
            }

            if (count($cursosFiltrados) < (count($cursos) - 1)) {

                return redirect()->back()->with('compraFallida', 'Algún curso de tu carrito ya lo habías comprado con anterioridad y no hemos gestionado su compra. Tienes tus cursos disponibles en tu Área Personal..');
            } else {

                return redirect()->back()->with('compra', 'Compra realizada correctamente. Tienes tus cursos disponibles en tu Área Personal..');
            }
        } else {

            return redirect()->back()->with('compraFallida', 'La gestión de la compra no se ha realizado. Ya habías comprado estos cursos anteriormente. Tienes tus cursos disponibles en tu Área Personal..');
        }
    }
}
