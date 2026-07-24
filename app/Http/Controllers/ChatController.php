<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = config('paddock.chats');

        return view('chat.index', compact('chats'));
    }

    public function show(string $id)
    {
        $chat = collect(config('paddock.chats'))->firstWhere('id', $id);
        abort_if(! $chat, 404);

        $extras = session("chat.$id.mensagens", []);
        $mensagens = array_merge($chat['messages'], $extras);

        return view('chat.show', compact('chat', 'mensagens'));
    }

    public function mensagem(Request $request, string $id)
    {
        $request->validate(['texto' => 'required|string|max:500']);

        $extras = session("chat.$id.mensagens", []);
        $extras[] = ['text' => $request->input('texto'), 'out' => true];

        session(["chat.$id.mensagens" => $extras]);

        return redirect()->route('chat.show', $id);
    }
}
