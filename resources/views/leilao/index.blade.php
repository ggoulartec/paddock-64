@extends('layouts.app')

@section('title', 'Leilões — Paddock 64')

@section('content')
<div class="wrap page">
  <h1 class="h1">LEILÕES AO VIVO</h1>

  @foreach ($leiloes as $leilao)
    <a href="{{ route('leiloes.show', $leilao['id']) }}" class="row" style="text-decoration:none;">
      <div class="row-thumb">
        <svg viewBox="0 0 200 90" style="width:70%;color:{{ $leilao['color'] }}"><use href="#car-icon"/></svg>
      </div>
      <div style="flex:1;margin-left:12px;">
        <div class="live-badge" style="margin-bottom:6px;"><span class="live-dot"></span>AO VIVO</div>
        <div class="row-title">{{ $leilao['title'] }}</div>
        <div class="row-meta">Lance atual: {{ $leilao['currentBid'] }} · encerra em {{ $leilao['endsAt'] }}</div>
      </div>
    </a>
  @endforeach
</div>
@endsection
