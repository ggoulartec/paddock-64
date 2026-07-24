<?php

namespace App\Http\Controllers;

class ComunidadeController extends Controller
{
    public function index()
    {
        $posts = config('paddock.posts');

        return view('comunidade.index', compact('posts'));
    }
}
