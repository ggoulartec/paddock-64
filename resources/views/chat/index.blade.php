@extends('layouts.app')

@section('title', 'Mensagens — Paddock 64')

@section('content')
<div class="wrap page">
  <h1 class="h1">MENSAGENS</h1>

  <div class="chat-layout" style="grid-template-columns:1fr;">
    <div class="chat-list" style="border-right:none;">
      @foreach ($chats as $chat)
        <a href="{{ route('chat.show', $chat['id']) }}" class="chat-item" style="text-decoration:none;">
          <div class="chat-thumb">
            <svg viewBox="0 0 200 90" style="width:70%;color:{{ $chat['color'] }}"><use href="#car-icon"/></svg>
          </div>
          <div class="chat-item-info">
            <b>{{ $chat['name'] }}</b>
            <span>{{ $chat['itemTitle'] }} · REF. {{ $chat['itemRef'] }}</span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
