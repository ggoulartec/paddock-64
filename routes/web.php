<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ComunidadeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LeilaoController;
use App\Http\Controllers\SorteioController;
use App\Http\Controllers\VitrineController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VitrineController::class, 'index'])->name('vitrine.index');
Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');

Route::get('/leiloes', [LeilaoController::class, 'index'])->name('leiloes.index');
Route::get('/leiloes/{id}', [LeilaoController::class, 'show'])->name('leiloes.show');
Route::post('/leiloes/{id}/lance', [LeilaoController::class, 'lance'])->name('leiloes.lance');

Route::get('/sorteios', [SorteioController::class, 'index'])->name('sorteios.index');
Route::get('/sorteios/{id}', [SorteioController::class, 'show'])->name('sorteios.show');
Route::post('/sorteios/{id}/sortear', [SorteioController::class, 'sortear'])->name('sorteios.sortear');

Route::get('/comunidade', [ComunidadeController::class, 'index'])->name('comunidade.index');

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::get('/chat/{id}', [ChatController::class, 'show'])->name('chat.show');
Route::post('/chat/{id}/mensagem', [ChatController::class, 'mensagem'])->name('chat.mensagem');
