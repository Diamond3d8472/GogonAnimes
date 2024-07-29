<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\TestController;

Route::get('/', function(){
    return redirect()->route('site.index');
});

//AGRUPANDO ELAS EM /APP
Route::prefix('/app')->group(function(){

    //Rota para o Caminho principal do site 
    Route::get('/', [PrincipalController::class, 'index'])->name('site.index');

    // Rota para o contato do site
    Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');

    //Rota para login do app

    Route::get('/login', [LoginController::class, 'index'])->name('site.login');
    Route::post('/login', [LoginController::class, 'index'])->name('site.login');

    //Rota para o registro do app
    Route::get('/registrar', [RegistrarController::class, 'index'])->name('site.registrar');
    Route::post('/registrar', [RegistrarController::class, 'index'])->name('site.registrar');


    //Grupo de rotas para visualizaçao dos animes
    Route::prefix('/anime')->group(function(){

        //Rota para os Populares
        Route::get('/popular', function(){
            return view('site.popular');
        })->name('site.popular');
        
        //Rota para as Novidades
        Route::get('/new', function(){
            return view('site.new');        
        })->name('site.new');

        
        //Rota para pesquisa de anime
        Route::get('/search', [AnimeController::class, 'search'])->name('site.search');

        
        //Rota de generos
        Route::get('/generos', function(){
            return view('site.generos');
        })->name('site.generos');
        //Rota para o genero
        Route::get('/genero/{genero}', function(){
            return 'Aqui o genero do anime';
        });



        //Rota para o anime
        Route::get('/{nomeanime}', [AnimeController::class, 'showAnime'])->name('site.anime');
        //Rota para a temporada
        Route::get('/{nomeanime}/{season_id}', [AnimeController::class, 'showSeason'])->where('season_id', '[0-9]+')->name('site.season');
        //Rota para o Episodio
        Route::get('/{nomeanime}/{season_id}/{ep_id}', [AnimeController::class, 'showEpisode'])->where('season_id', '[0-9]+')->where('ep_id', '[0-9]+')->name('site.episode');

    });

    //Grupo de rotas para a area administrativa para cadastro de generos, animes, temporadas novas e episodios
    Route::prefix('/admin')->group(function(){

        //Raiz
        Route::get('/', function(){
            return 'Area administrativa';
        });

    });

});


//Redireciona para a pagina inicial caso nao encontre a rota solicitada no browser

Route::fallback(function(){
    return redirect()->route('site.index');
});


//Rota teste para o curso

Route::get('/teste', [TestController::class, 'index'])->name('site.teste');











































//Agrupamento de rotas teste

Route::prefix('/user')->group(function(){
    Route::get('editar', function(){
        return 'Editar Usuario';
    });
    Route::get('favoritos', function(){
        return 'favoritos';
    });
});


//Temos dois tipos de redirect

// Route::get('/rota1', function(){
//     return 'rota1';
// })->name('rota1');


//Usando o redirect para um name
// Route::get('/rota2', function(){
//     return redirect()->route('rota1');
// });

//Usando um redirec comum
// Route::redirect('/rota3', '/rota2');


//Utilizando parametros na rota contato pelo metodo get
// Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', 
// function(string $nome, 
//          string $categoria, 
//          string $assunto, 
//          string $mensagem){
//     return "mensagem do $nome || $categoria || $assunto || $mensagem";
// });



//Utilizando expressoes regulares na rota de contato com metodo Get

// Route::get('contato/{nome}/{categoria_id?}', function(string $nome, int $categoria_id = 1){
//     echo "Estamos aqui: $nome - $categoria_id";
// })->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+');



//GRAÇAS A ISSO POSSO CRIAR UMA ROTA PARECIDA MAS RECEBENDO STRING

//Utilizando parametros na rota contato para chamar um controller especifico que vai receber os parametros pelo metodo get

// Route::get('/contato/{nome}/{mensagem}',[ContatoController::class, 'showmessage'])->where('nome','[A-Za-z]+');



//Redirect para outra rota - Ele me redireciona para o Sobre-nos
// Route::get('/sobre', function(){
//    return redirect()->route('site.sobre');
// });



// Rota para o anime
// Route::resource('anime', AnimeController::class);



// Rota teste para o principal do site
// Route::get('/principal', [PrincipalController::class, 'index'])->name('principal');