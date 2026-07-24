@extends('layouts.app')

@section('title', 'Sorteios — Paddock 64')

@section('content')
<div class="wrap page">
  <h1 class="h1">SORTEIOS DA COMUNIDADE</h1>

  @foreach ($sorteios as $sorteio)
    <a href="{{ route('sorteios.show', $sorteio['id']) }}" class="row" style="text-decoration:none;">
      <div class="row-thumb">
        <svg viewBox="0 0 200 90" style="width:70%;color:{{ $sorteio['color'] }}"><use href="#car-icon"/></svg>
      </div>
      <div style="flex:1;margin-left:12px;">
        <div class="row-title">{{ $sorteio['title'] }}</div>
        <div class="row-meta">{{ count($sorteio['participants']) }} participantes confirmados</div>
      </div>
    </a>
  @endforeach
</div>
@endsection
