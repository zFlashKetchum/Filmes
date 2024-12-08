<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;

//Home
Route::get('/',[FilmesController::class, 'showHome'])->name('home');
Route::get('/formcad',[FilmesController::class, 'showCadastro'])->name('form');

//Cadastrar
Route::post('/cadastrarfilme',[FilmesController::class, 'CadastrarFilme'])->name('cadastrarfilme');

//Deletar
Route::delete('/deletarfilme/{id}',[FilmesController::class, 'destroy'])->name('deletarfilme');

//Alterar
Route::put('/alterarfilme/{id}',[FilmesController::class, 'update'])->name('alterarfilme');

//Exibir Filmes
Route::get('/exibirfilmes',[FilmesController::class, 'ShowFilmes'])->name('exibirfilme');
Route::get('/exibirfilmes/{id}',[FilmesController::class, 'MostrarFilmeCodigo'])->name('exibirfilmecod');