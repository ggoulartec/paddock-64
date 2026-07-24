@extends('layouts.app')

@section('title', $chat['name'].' — Paddock 64')

@section('content')
<div class="wrap page">
  <div class="breadcrumb"><a href="{{ route('chat.index') }}">Mensagens</a> / <span>{{ $chat['name'] }}</span></div>

  <div class="chat-layout" style="grid-template-columns:1fr;">
    <div class="chat-main">
      <div class="chat-context">
        <div class="ctx-thumb"></div>
        <div>
          <b>{{ $chat['name'] }}</b>
          <span>Sobre: {{ $chat['itemTitle'] }} · REF. {{ $chat['itemRef'] }}</span>
        </div>
      </div>

      <div class="chat-messages">
        @foreach ($mensagens as $m)
          <div class="msg {{ $m['out'] ? 'out' : 'in' }}">{{ $m['text'] }}</div>
        @endforeach
      </div>

      <form action="{{ route('chat.mensagem', $chat['id']) }}" method="POST" class="chat-inputbar">
        @csrf
        <input type="text" name="texto" placeholder="Escreva uma mensagem..." required autocomplete="off">
        <button type="submit" class="add-btn" style="border:none;">→</button>
      </form>
    </div>
  </div>
</div>
@endsection
