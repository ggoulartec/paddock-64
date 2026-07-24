<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeilaoController extends Controller
{
    public function index()
    {
        $leiloes = config('paddock.auctions');

        return view('leilao.index', compact('leiloes'));
    }

    public function show(string $id)
    {
        $leilao = collect(config('paddock.auctions'))->firstWhere('id', $id);
        abort_if(! $leilao, 404);

        // Lances dados nessa sessão do navegador (demo sem banco de dados).
        $lancesSessao = session("leilao.$id.history", []);
        $lanceAtual = session("leilao.$id.currentBid", $leilao['currentBid']);
        $historico = array_merge($lancesSessao, $leilao['history']);

        return view('leilao.show', compact('leilao', 'historico', 'lanceAtual'));
    }

    public function lance(Request $request, string $id)
    {
        $request->validate(['valor' => 'required|string|max:20']);

        $leilao = collect(config('paddock.auctions'))->firstWhere('id', $id);
        abort_if(! $leilao, 404);

        $novoLance = [
            'name' => 'Você',
            'initials' => 'EU',
            'value' => 'R$ '.$request->input('valor'),
            'time' => 'agora',
        ];

        $historico = session("leilao.$id.history", []);
        array_unshift($historico, $novoLance);

        session([
            "leilao.$id.history" => $historico,
            "leilao.$id.currentBid" => $novoLance['value'],
        ]);

        return redirect()->route('leiloes.show', $id);
    }
}
