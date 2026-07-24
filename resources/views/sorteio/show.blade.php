@extends('layouts.app')

@section('title', $sorteio['title'].' — Sorteio — Paddock 64')

@section('content')
<div class="wrap page">
  <div class="sorteio-hero">
    <div class="eyebrow" style="justify-content:center;">FERRAMENTA DE SORTEIO</div>
    <h2 style="font-family:var(--font-display);font-size:32px;text-transform:uppercase;">Sorteio da Comunidade</h2>
  </div>

  <div class="sorteio-card">
    <div class="sorteio-item">
      <div class="card-window">
        <svg viewBox="0 0 200 90" style="color:{{ $sorteio['color'] }}"><use href="#car-icon"/></svg>
      </div>
      <div>
        <div class="card-ref" style="margin-bottom:4px;">REF. {{ $sorteio['ref'] }}</div>
        <div class="card-title" style="min-height:auto;">{{ $sorteio['title'] }}</div>
      </div>
    </div>

    <div style="font-size:13px;color:var(--cromo);">{{ count($sorteio['participants']) }} participantes confirmados no grupo</div>
    <div class="sorteio-participants">
      @foreach (array_slice($sorteio['participants'], 0, 6) as $p)
        <div class="participant" style="{{ $vencedor === $p ? 'border-color:var(--laranja);color:var(--laranja);' : '' }}">{{ $p }}</div>
      @endforeach
      @if (count($sorteio['participants']) > 6)
        <div class="participant">+{{ count($sorteio['participants']) - 6 }}</div>
      @endif
    </div>

    <form action="{{ route('sorteios.sortear', $sorteio['id']) }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">Sortear agora</button>
    </form>

    <div class="seed-box">
      SEMENTE PÚBLICA: resultado da Loteria Federal · concurso 05.921 de 22/07/2026<br>
      HASH DE VERIFICAÇÃO: 8f3a...c21e — qualquer participante pode conferir o cálculo
    </div>

    @if ($vencedor)
      <div class="sorteio-result">
        <span>RESULTADO</span>
        <b>{{ $vencedor }}</b>
      </div>
    @endif

    <p class="disclaimer">
      O Paddock64 sorteia apenas o número ou nome vencedor. Pagamentos e combinações entre os
      participantes acontecem fora da plataforma, geralmente no chat do grupo ou WhatsApp —
      o Paddock64 não processa nem intermedeia esses valores.
    </p>
  </div>
</div>
@endsection
