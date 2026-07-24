<?php

namespace App\Http\Controllers;

class SorteioController extends Controller
{
    public function index()
    {
        $sorteios = config('paddock.sorteios');

        return view('sorteio.index', compact('sorteios'));
    }

    public function show(string $id)
    {
        $sorteio = collect(config('paddock.sorteios'))->firstWhere('id', $id);
        abort_if(! $sorteio, 404);

        $vencedor = session("sorteio.$id.vencedor");

        return view('sorteio.show', compact('sorteio', 'vencedor'));
    }

    public function sortear(string $id)
    {
        $sorteio = collect(config('paddock.sorteios'))->firstWhere('id', $id);
        abort_if(! $sorteio, 404);

        $participantes = $sorteio['participants'];
        $vencedor = $participantes[array_rand($participantes)];

        session(["sorteio.$id.vencedor" => $vencedor]);

        return redirect()->route('sorteios.show', $id);
    }
}
