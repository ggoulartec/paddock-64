<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function index(Request $request)
    {
        $catalog = config('paddock.catalog');
        $categorias = config('paddock.categorias');
        $ativa = $request->query('cat', 'Todos');

        $itens = $ativa === 'Todos'
            ? $catalog
            : array_values(array_filter($catalog, fn ($item) => $item['cat'] === $ativa));

        return view('vitrine.index', compact('itens', 'categorias', 'ativa'));
    }
}
