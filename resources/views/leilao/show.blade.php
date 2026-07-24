@extends('layouts.app')

@section('title', $leilao['title'].' — Leilão — Paddock 64')

@section('content')
<div class="wrap page">
  <div class="breadcrumb">
    <a href="{{ route('leiloes.index') }}">Leilões</a> / <span>{{ $leilao['cat'] }}</span>
  </div>

  <div class="detail-layout">
    <div class="detail-visual">
      <div class="card" style="cursor:default;">
        <div class="card-hook"></div>
        <div class="badge live"><span class="live-dot"></span>AO VIVO</div>
        <div class="card-window">
          <svg viewBox="0 0 200 90" style="color:{{ $leilao['color'] }}"><use href="#car-icon"/></svg>
        </div>
      </div>
    </div>

    <div class="detail-info">
      <div class="live-badge"><span class="live-dot"></span>LEILÃO EM ANDAMENTO</div>
      <div class="cat">{{ $leilao['cat'] }}</div>
      <h2>{{ $leilao['title'] }}</h2>
      <div class="detail-ref">REF. {{ $leilao['ref'] }} · {{ count($historico) }} lances até agora</div>

      <div class="countdown">
        <div class="count-box"><b>00</b><span>DIAS</span></div>
        <div class="count-box"><b>04</b><span>HORAS</span></div>
        <div class="count-box"><b>22</b><span>MIN</span></div>
        <div class="count-box"><b>07</b><span>SEG</span></div>
      </div>

      <div class="bid-current">
        <span>LANCE ATUAL</span>
        <b>{{ $lanceAtual }}</b>
      </div>

      <form action="{{ route('leiloes.lance', $leilao['id']) }}" method="POST">
        @csrf
        <div class="bid-input-row">
          <input type="text" name="valor" placeholder="{{ $leilao['minNextBid'] }} (mínimo)" required>
          <button type="submit" class="btn btn-primary">Dar lance</button>
        </div>
      </form>
      <div class="bid-note">Se um lance for dado nos últimos 2 minutos, o leilão se estende automaticamente.</div>

      <div class="bid-history">
        @foreach ($historico as $i => $b)
          <div class="bid-row" style="{{ $i === count($historico) - 1 ? 'border-bottom:none;' : '' }}">
            <div class="who">
              <div class="bid-avatar">{{ $b['initials'] }}</div>
              {{ $b['name'] }}
            </div>
            <div class="val">{{ $b['value'] }}</div>
            <div class="time">{{ $b['time'] }}</div>
          </div>
        @endforeach
      </div>

      <div class="seller-card">
        <div class="seller-avatar">{{ $leilao['seller']['initials'] }}</div>
        <div class="seller-info">
          <b>{{ $leilao['seller']['name'] }}</b>
          <span>★ {{ $leilao['seller']['rating'] }} · {{ $leilao['seller']['deals'] }} trocas · {{ $leilao['seller']['location'] }}</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
