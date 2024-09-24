<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\TemporadaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\NovidadeController;

Route::get('/', function(){
    return redirect()->route('site.index');
});

//AGRUPANDO ELAS EM /APP
Route::prefix('/app')->group(function(){

    //Mostra quando o episodio ou temporada nao é encontrado
    Route::get('/nao-encontrado', function(){
        return view('site.erro');
    })->name('site.naoEncontrado');

    //Rota para o Caminho principal do site
    Route::get('/', [PrincipalController::class, 'index'])->name('site.index');

    //Rota para login do app
    Route::get('/login', [LoginController::class, 'index'])->name('site.login');
    Route::post('/login', [LoginController::class, 'login'])->name('site.login');

    //Rota para deslogar do app
    Route::get('/logout', [LoginController::class, 'logout'])->name('site.logout');

    //Rota para o registro do app
    Route::get('/registrar', [RegistrarController::class, 'index'])->name('site.registrar');
    Route::post('/registrar', [RegistrarController::class, 'registrar'])->name('site.registrar');

    //Grupo de rotas para ediçao do usuario
    Route::prefix('/user')->group(function(){
        Route::get('/', [UserController::class, 'showUser'])->name('site.user');
        Route::post('/edit', [UserController::class, 'editUser'])->name('site.editUser');
        Route::post('/editPassword', [UserController::class,'editUserPassword'])->name('site.editUserPassword');
        Route::post('/editPhoto', [UserController::class,'editUserPhoto'])->name('site.userPhoto');
    });
    //Grupo de rotas para visualizaçao dos animes
    Route::prefix('/anime')->group(function(){

        //Rota para os Populares
        Route::get('/popular', [AnimeController::class, 'popular'])->name('site.popular');

        //Rota para os favoritos do usuario
        Route::get('/favoritos', [FavoritoController::class,'index'])->name('site.favoritos');
        //Rota para salvar o favorito
        Route::get('/favoritos/{cod_anime}', [FavoritoController::class, 'salvarFavorito'])->name('site.salvarfavorito');
        //Rota para remover o favorito
        Route::get('/favoritos/remover/{cod_anime}', [FavoritoController::class, 'removerFavorito'])->name('site.removerfavorito');

        //Rota para os ultimos Episodios lançados
        Route::get('/novos', [NovidadeController::class, 'index'])->name('site.new');

        //Rota para pesquisa de anime
        Route::get('/search', [AnimeController::class, 'search'])->name('site.search');

        //Rota de generos
        Route::get('/generos', [GeneroController::class, 'index'])->name('site.generos');
        Route::get('/generos/{genero}', [GeneroController::class, 'showAnimeGenero'])->name('site.genero');

        //Rota para o Anime, Temporada e Episodio
        Route::get('/{nome_anime}', [AnimeController::class, 'showAnime'])->name('site.anime');
        Route::get('/{nome_anime}/{num_temporada}', [TemporadaController::class, 'showSeason'])->where('num_temporada', '[0-9]+')->name('site.season');
        Route::get('/{nome_anime}/{num_temporada}/{num_episodio}', [EpisodeController::class, 'showEpisode'])->where('num_temporada', '[0-9]+')->where('num_episodio', '[0-9]+')->name('site.episode');

        //Comentar - Ainda tenho que testar
        Route::get('/{cod_episodio}/comentar', [ComentarioController::class, 'comentar'])->name('site.comentar');
    });



    //Grupo de rotas para a area administrativa para cadastro de generos, animes, temporadas novas e episodios
    Route::prefix('/admin')->group(function(){

        //Rota Principal da Dashboard de administraçao
        Route::get('/', [AdminController::class, 'index'])->name('site.admin.index');

        //Grupo de rotas para administrar tudo relacionado a animes
        Route::prefix('/animes')->group(function(){


            Route::get('/', [AnimeController::class, 'animes'])->name('site.admin.animes');
            Route::get('/new', [AnimeController::class, 'showNew'])->name('site.admin.animes.new');
            //Route::post('/animes/new', [AnimeController::class, 'new'])->name('site.admin.animes.new');
            Route::get('/{cod_anime}/edit', [AnimeController::class, 'showEdit'])->where('cod_anime', '[0-9]+')->name('site.admin.animes.edit');
            //Route::post('/animes/edit', [AnimeController::class, 'edit'])->name('site.admin.animes.edit');

            Route::get('/{cod_anime}/delete', [AnimeController::class, 'delete'])->where('cod_anime', '[0-9]+')->name('site.admin.animes.delete');

            //Rota para Administração de temporadas
            Route::get('/{cod_anime}/temporadas', [TemporadaController::class, 'temporadas'])->name('site.admin.temporadas');
            Route::get('/{cod_anime}/temporada/new', [TemporadaController::class, 'showNew'])->name('site.admin.temporadas.new');
            Route::get('/{cod_anime}/temporada/{cod_temporada}/edit', [TemporadaController::class, 'showEdit'])->name('site.admin.temporadas.edit');


            //Rota para Administração de episodios
            Route::get('/{cod_anime}/temporada/{cod_temporada}/episodios', [EpisodeController::class, 'episodios'])->name('site.admin.episodios');
            Route::get('/{cod_anime}/temporada/{cod_temporada}/episodio/new', [EpisodeController::class, 'showNew'])->name('site.admin.episodios.new');
            Route::get('/{cod_anime}/temporada/{cod_temporada}/episodio/{cod_episodio}/edit', [EpisodeController::class, 'showEdit'])->name('site.admin.episodios.edit');

        });

        //Rota para Administração de usuarios
        Route::get('/users', [UserController::class, 'users'])->name('site.admin.usuarios');

        //Rota para Administração de Generos
        Route::get('/generos', [GeneroController::class, 'generos'])->name('site.admin.generos');

        //Rota para Administração de administradores
        Route::get('/administradores', [AdminController::class, 'administradores'])->name('site.admin.admin');

        //Rota para administrar ultimos comentarios
        Route::get('/comentarios', [ComentarioController::class, 'comentarios'])->name('site.admin.comentarios');

    });



});
//Redireciona para a pagina inicial caso nao encontre a rota solicitada no browser

Route::fallback(function(){
    return redirect()->route('site.naoEncontrado');
});











































//Agrupamento de rotas teste

// Route::prefix('/user')->group(function(){
//     Route::get('editar', function(){
//         return 'Editar Usuario';
//     });
//     Route::get('favoritos', function(){
//         return 'favoritos';
//     });
// });


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
