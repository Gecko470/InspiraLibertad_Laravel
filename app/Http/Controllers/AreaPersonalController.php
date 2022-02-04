<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaPersonalController extends Controller
{
    public function index()
    {
        $cursos = [];
        $compras = Shop::where('user_id', Auth::id())->get();

        foreach ($compras as $compra) {
            $curso = Product::find($compra->product_id);
            array_push($cursos, $curso);
        }
        return view('aPersonal', compact('cursos'));
    }
}
