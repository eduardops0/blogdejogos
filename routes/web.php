<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

Route::get('/', [homeController::class, 'home']);

Route::get('/game/{title}', [homeController::class, 'info'])->name('game.info');
Route::get('/search', [homeController::class, 'search'])->name('game.search');

Route::get('/dmca', function () {
    return view('dmca');
});
Route::get('/howtoinstall', function () {
    return view('install');
});
Route::get('/add', function () {
    return view('add');
});

Route::post('/gameadd', function () {
    $title = request('title');
    $title2 = str_replace(' ', '-', $title);
    $link = request('link');
    $description = request('description');
    $tamanho = request('tamanho');
    $requisitos = request('requisitos');
    $thumb = request('thumb');
    $senha = request('senha');
    
    $path = "games/" . $title2;
    File::makeDirectory($path);

    DB::insert('insert into games (title, description, url, link, tamanho, requisitos, thumb, senha) values (?, ?, ?, ?, ?, ?, ?, ?)', [
        $title,
        $description,
        $title2,
        $link,
        $tamanho,
        $requisitos,
        $thumb,
        $senha
    ]);
    return redirect()->back()->with('success', 'Jogo adicionado com sucesso!');
})->name('game.store');
