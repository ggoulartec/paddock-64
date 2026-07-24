@extends('layouts.app')

@section('title', 'Paddock 64 — Vitrine')

@section('content')

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow">MARKETPLACE · ESCALA 1:64</div>
      <h1>SUA GARAGEM,<br>NA <em>ESCALA</em> CERTA.</h1>
      <p>Compre na vitrine, dispute em leilão ou entre num sorteio da comunidade. Tudo com referência, procedência e chat direto com quem anuncia.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="#produtos">Explorar vitrine →</a>
        <a class="btn btn-secondary" href="#">Anunciar meu item</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat"><b>12.480</b><span>ITENS NA VITRINE</span></div>
        <div class="hero-stat"><b>96</b><span>LEILÕES AO VIVO</span></div>
        <div class="hero-stat"><b>3.900+</b><span>COLECIONADORES</span></div>
      </div>
    </div>
    <div class="pegboard">
      @foreach (['var(--laranja)', 'var(--verde)', 'var(--amarelo)', 'var(--cromo)', 'var(--laranja)', 'var(--verde)'] as $cor)
        <div class="peg-item">
          <div class="peg-hole"></div>
          <div class="peg-hook"></div>
          <div class="peg-card">
            <svg viewBox="0 0 200 90" style="width:80%;color:{{ $cor }}"><use href="#car-icon"/></svg>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<div class="ruler"></div>
<div class="ruler-label wrap">ESCALA 1 : 64 — CADA PEÇA, MEDIDA E CATALOGADA</div>

<section class="wrap filters" id="produtos">
  <div class="chips">
    @foreach ($categorias as $c)
      <a href="{{ route('vitrine.index', $c === 'Todos' ? [] : ['cat' => $c]) }}"
         class="chip {{ $c === $ativa ? 'active' : '' }}">{{ $c }}</a>
    @endforeach
  </div>
  <div class="filter-right">
    <div class="search-tag">🔎 buscar por ref., modelo...</div>
    <select class="sort">
      <option>Mais recentes</option>
      <option>Menor preço</option>
      <option>Maior preço</option>
      <option>Mais raros</option>
    </select>
  </div>
</section>

<section class="wrap grid">
  @foreach ($itens as $item)
    <a href="{{ route('item.show', $item['id']) }}" class="card">
      <div class="card-hook"></div>
      <div class="card-window">
        <div class="badge {{ $item['badge'] }}">{{ $item['badgeLabel'] }}</div>
        <svg viewBox="0 0 200 90" style="color:{{ $item['color'] }}"><use href="#car-icon"/></svg>
      </div>
      <div class="card-body">
        <div class="card-ref">REF. {{ $item['ref'] }}</div>
        <div class="card-title">{{ $item['title'] }}</div>
        <div class="card-cat">{{ strtoupper($item['cat']) }}</div>
        <div class="card-foot">
          <div class="card-price"><span>R$</span> {{ $item['price'] }}</div>
          <div class="add-btn">+</div>
        </div>
      </div>
    </a>
  @endforeach
</section>

@endsection
