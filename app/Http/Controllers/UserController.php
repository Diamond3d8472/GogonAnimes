<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{

//Metodos do site principal
    //Metodo para mostar a tela de ediçao do usuario
    public function showUser(){
        if(!Auth::check()){
            return redirect()->route('site.index');
        }
        return view('site.user');
    }

    //Metodo para Editar a foto de perfil do usuario
    public function editUserPhoto(Request $request){

        if(Auth::check()){
            // Validação do arquivo
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Aqui você pode obter o ID do usuário autenticado
            $user = User::find(Auth::user()->cod_user); // Obter o usuário autenticado

            // Diretório onde a imagem será salva
            $directory = 'public/profiles/'.$user->cod_user;

             // Verifica se a pasta 'profiles' existe, caso não, cria a pasta
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }

            // Verifica se já existe uma imagem de perfil e a deleta
            if ($user->foto_perfil && Storage::exists($directory.'/'.$user->foto_perfil)) {
                Storage::delete($directory.'/'.$user->foto_perfil);
            }

            // Define o nome do arquivo como 'profile.png'
            $imageName = 'profile.png';

            // Salva a imagem no diretório 'profiles' dentro do storage
            if($request->file('image')->storeAs($directory, $imageName)) {
                // Atualizar o caminho da imagem no banco de dados
                $user->foto_perfil = $imageName;
                if($user->save()){
                    return redirect()->route('site.user');
                } 
            }
            
        }
    }
    //Metodo para alterar os dados do usuario
    public function editUser(Request $request){
        if(Auth::check()){
            $user = User::find(Auth::user()->cod_user);

            $request->validate([
                'name' => "required|unique:users,name,$user->cod_user,cod_user",
                'email' => "required|email|unique:users,email,$user->cod_user,cod_user",
            ]);

            $user->name = $request->name;
            $user->email = $request->email;
            if($user->save()){
                return redirect()->route('site.user');
            } // Lembrar de por a resposta da alteraçao e afins
        }//Lembrar de por a resposta em caso de erro
    }

    //Metodo para alterar a senha do usuario
    public function editUserPassword(Request $request){
        if(!Auth::check()){
            return redirect()->route('site.login');
        }
        $user = User::find(Auth::user()->cod_user);

        $request->validate([
            'old_password' => 'required|min:8',
            'password' => 'required|min:8|confirmed',
        ]);

        // Verifica se o usuário existe e a senha é incorreta
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->route('site.user')->withErrors(['error'=> 'Erro senha incorreta!! Por favor tente novamente.']);
        }
        // Se a senha estiver correta, atualiza para a nova senha e retorna para o usuario
        $user->password = Hash::make($request->password);
        if($user->save()){
            //Apos salvar nova senha deslogar usuario e retornar para o site de login para logar novamente
            Auth::logout();
            return redirect()->route('site.login')->with('success', 'Senha alterada com sucesso!! Por favor faça o login novamente');
        }
        
    }

//Metodos do site administrativo
    public function users() { 
        $usuarios = user::all();
        return view('site.admin.usuarios',compact('usuarios'));
    }
}
