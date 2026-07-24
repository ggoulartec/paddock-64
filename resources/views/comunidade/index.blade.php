@extends('layouts.app')

@section('title', 'Comunidade — Paddock 64')

@section('content')
<div class="wrap page">
  <h1 class="h1">Feed Paddock64</h1>

  <div class="stories">
    @foreach (['Seu story', 'Rafael M.', 'Marina P.', 'Clássicos MGA', 'Toni S.'] as $i => $nome)
      <div class="story">
        <div class="story-ring" style="{{ $i === 0 ? 'border-color:var(--cromo-escuro);' : '' }}"><div></div></div>
        <span>{{ $nome }}</span>
      </div>
    @endforeach
  </div>

  <div class="comunidade-layout">
    <div>
      @foreach ($posts as $post)
        <div class="post">
          <div class="post-head">
            <div class="post-avatar" style="background:{{ $post['color'] }};"></div>
            <div>
              <b>{{ $post['author'] }}</b>
              <span>{{ $post['time'] }}</span>
            </div>
          </div>
          <div class="post-media">
            <svg viewBox="0 0 200 90" style="width:34%;color:var(--cromo)"><use href="#car-icon"/></svg>
          </div>
          <div class="post-actions">♡ 💬 ↗</div>
          <div class="post-caption"><b>{{ $post['likes'] }} curtidas</b>{{ $post['caption'] }}</div>
        </div>
      @endforeach
    </div>
    <div>
      <div class="side-widget">
        <h4>SUGESTÕES PRA SEGUIR</h4>
        <div class="suggest-row"><div class="suggest-avatar"></div><div><b>Toni Sorteios</b><span>Sorteios semanais</span></div><a class="follow-btn" href="#">Seguir</a></div>
        <div class="suggest-row"><div class="suggest-avatar" style="background:var(--verde);"></div><div><b>JDM Brasil</b><span>Especialista JDM</span></div><a class="follow-btn" href="#">Seguir</a></div>
        <div class="suggest-row"><div class="suggest-avatar" style="background:var(--cromo);"></div><div><b>Garagem do Zé</b><span>Restaurações</span></div><a class="follow-btn" href="#">Seguir</a></div>
      </div>
      <div class="side-widget">
        <h4>SORTEIOS ATIVOS</h4>
        <div class="suggest-row"><div class="suggest-avatar" style="background:var(--laranja);"></div><div><b>Stock Car Ed. Ltd.</b><span>21 participantes</span></div><a class="follow-btn" href="{{ route('sorteios.index') }}">Ver</a></div>
      </div>
    </div>
  </div>
</div>
@endsection
