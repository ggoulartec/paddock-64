@extends('layouts.app')

@section('title', $item['title'].' — Paddock 64')

@section('content')
<div class="wrap page">
  <div class="breadcrumb">
    <a href="{{ route('vitrine.index') }}">Vitrine</a> / {{ $item['cat'] }} / <span>{{ $item['title'] }}</span>
  </div>

  <div class="detail-layout">
    <div class="detail-visual">
      <div class="card" style="cursor:default;">
        <div class="card-hook"></div>
        <div class="badge {{ $item['badge'] }}">{{ $item['badgeLabel'] }}</div>
        <div class="card-window">
          <svg viewBox="0 0 200 90" style="color:{{ $item['color'] }}"><use href="#car-icon"/></svg>
        </div>
      </div>
    </div>

    <div class="detail-info">
      <div class="cat">{{ $item['cat'] }}</div>
      <h2>{{ $item['title'] }}</h2>
      <div class="detail-ref">REF. {{ $item['ref'] }} · lote 03/2026</div>

      <div class="detail-price-row">
        <div class="detail-price">R$ {{ $item['price'] }}</div>
      </div>

      <div class="spec-plate">
        <div class="spec-item"><span>ESCALA</span><b>1:64</b></div>
        <div class="spec-item"><span>MATERIAL</span><b>Zamac / plástico</b></div>
        <div class="spec-item"><span>ESTADO</span><b>Menta, na blister</b></div>
        <div class="spec-item"><span>ORIGEM</span><b>Lote nacional 2024</b></div>
      </div>

      <div class="cond-select" data-cond-group>
        <button type="button" class="cond-opt active">Menta / lacrado</button>
        <button type="button" class="cond-opt">Solto</button>
        <button type="button" class="cond-opt">Usado</button>
      </div>

      <div class="detail-ctas">
        <a class="btn btn-primary" href="#" style="flex:1;justify-content:center;">Adicionar à vitrine</a>
        <a class="btn btn-secondary" href="{{ route('chat.index') }}">Conversar com anunciante</a>
      </div>

      <div class="seller-card">
        <div class="seller-avatar">{{ $seller['initials'] }}</div>
        <div class="seller-info">
          <b>{{ $seller['name'] }}</b>
          <span>★ {{ $seller['rating'] }} · {{ $seller['deals'] }} trocas · {{ $seller['location'] }}</span>
        </div>
      </div>

      <div class="tabs" data-tabs-group>
        <button type="button" class="tab active">Detalhes</button>
        <button type="button" class="tab">Avaliações (18)</button>
        <button type="button" class="tab">Perguntas (3)</button>
      </div>
      <div class="tab-content" data-tab-panel>
        <p>Miniatura em escala 1:64, carroceria em zamac com detalhes em plástico injetado. Peça de lote limitado, mantida na embalagem original desde a compra.</p>
      </div>
      <div class="tab-content" data-tab-panel hidden>
        <p>18 avaliações, média de ★ 4.9. Compradores destacam a embalagem cuidadosa e a fidelidade da miniatura às fotos anunciadas.</p>
      </div>
      <div class="tab-content" data-tab-panel hidden>
        <p>Nenhuma pergunta pública ainda — use o chat com o anunciante pra tirar dúvidas antes de comprar.</p>
      </div>
    </div>
  </div>
</div>
@endsection
