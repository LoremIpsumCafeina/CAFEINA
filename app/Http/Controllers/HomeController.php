<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use File;

class HomeController extends Controller
{
    private $user;
    private $comment;
    private $config; 
    
    
    public function __construct(User $user, Comment $comment)
    {   
        $this->user = $user; 
        $this->comment = $comment;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loadedComments = $this->carregarComentarios();

        return view('front.index', compact('loadedComments'));
    }
    
    //USUARIO

    public function registrar(Request $request){

        //verificar se já existe um e-mail
        $email = $this->user->where('email', $request->email)->count();
        
        $this->validate($request, [
            'name' => 'required|min:3|max:60',
            'email' => 'required|max:60|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if( $email != '0'){
            return redirect('/');//->with('Status', 'Não possível realizar o cadastro, esse e-mail já existe!');
        }

        else {

            $insert = $this->user->create([
                'name'  => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'photo' => 'img/users_img/profile_picture.jpg',
            ]);
            
            
            $loadedComments = $this->carregarComentarios();
            $this->user = Auth::user();
            $msgRegistro = 'Clique em entrar para logar.';
            
            return view('front.index', compact('loadedComments', 'msgRegistro'));
        }
    }

    public function login(Request $request){
            $loadedComments = $this->carregarComentarios();

            $this->validate($request, [
            'email' => 'required|max:60',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $this->user = Auth::user();

            $msgLoginSucesso = 'Logado com sucesso!';
            return view('front.index', compact('loadedComments', 'msgLoginSucesso'));

        } else {

            $msgLoginFail = 'Usuário ou senha incorretos!';
            return view('front.index', compact('loadedComments', 'msgLoginFail'));
        }
            
    }

    public function EditarCadastro(Request $request){
        $comentariosUser = $this->carregarComentariosUserId(Auth::user()->id);

        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $photo = Auth::user()->photo;
        $msg = 'Dados atualizados';
        

        //verificando quais dados foram modificados
        if($request->name){
            $name = $request->name;
            $this->user->where('id', $request->id)
            ->update([
            'name' => $name,
        ]);
        }

        if(Auth::user()->email != $request->email){

            $email = $request->email;
            if($request->name){
            $name = $request->name;
                $insert = $this->user->where('id', $request->id)
                ->update([
                    'email' => $email,
                ]);

                if(!($insert)){
                    $msg .= '| Já existe um usuário com este e-mail cadastrado';
                    return view('front.configuracao', compact('msg'));
                }
            }
            
        }
        //upload de foto
        if($request->file('photo')){
            $photo = $request->file('photo');
                  
            $extensao = strtolower($photo->getClientOriginalExtension());
            if($extensao == 'jpg' || $extensao == 'png'){
                $request->file()->move(public_path().'/img/users_img/'.$id.$extensao);
                $fotoUser = 'img/users_img/'.$id.$extensao;
                $update = $user->update([
                        'photo' => $fotoUser,
                ]);
                    if($update){
                        $msg.='| Imagem atualizada.';
                    }else {
                        $msg.='| Não foi possível atualizar a imagem.';
                    }
            } else{
                $msg.='| Essa extensão não é permitida';
            }
                    

        } 

        if($request->current_password){
            $current_password = $request->name;
        }

        if($request->password){
            $password = $request->password;
        }

        if($request->password_confirmation){
            $password_confirmation = $request->password_confirmation;
        }

        //atualizando todos os dados editados
        

        $id = $request->id;

        
        return view('front.configuracoes', compact('name', 'email', 'photo', 'current_password', 'password', 'password_confirmation', 'comentariosUser', 'id', 'msg', 'erros'));
    }

    //COMENTÁRIO

    public function inserirComentario(Request $request){

            $insert = $this->comment->create([
                    'user_id' => $request->idUser,
                    'comment' => $request->comment,
            ]);

            return redirect('/');
    }



    public function carregarComentarios(){
        $comments = DB::table('comments')->leftJoin('users', 'users.id', '=', 'comments.user_id')->select('comments.*', 'users.photo', 'users.name')->orderBy('comments.updated_at', 'desc')->get();
        $loadedComments = array();

        foreach($comments as $comment => $data){
            $loadedComments[$comment]['id'] = $comments[$comment]->id;
            $loadedComments[$comment]['user_id'] = $comments[$comment]->user_id;
            $loadedComments[$comment]['name'] = $comments[$comment]->name;
            $loadedComments[$comment]['comment'] = $comments[$comment]->comment;
            $loadedComments[$comment]['data'] = date('d/m/Y H:i', strtotime($comments[$comment]->updated_at));
            $loadedComments[$comment]['photo'] = $comments[$comment]->photo;
        }

        return $loadedComments;
    }

    public function carregarComentariosUserId($user_id){
        $comments = DB::table('comments')->leftJoin('users', 'users.id', '=', 'comments.user_id')->select('comments.*', 'users.photo', 'users.name')->where('users.id', $user_id)->orderBy('comments.updated_at', 'desc')->get();
        $loadedComments = array();

        foreach($comments as $comment => $data){
            $loadedComments[$comment]['id'] = $comments[$comment]->id;
            $loadedComments[$comment]['user_id'] = $comments[$comment]->user_id;
            $loadedComments[$comment]['name'] = $comments[$comment]->name;
            $loadedComments[$comment]['comment'] = $comments[$comment]->comment;
            $loadedComments[$comment]['data'] = date('d/m/Y H:i', strtotime($comments[$comment]->updated_at));
            $loadedComments[$comment]['photo'] = $comments[$comment]->photo;
        }

        return $loadedComments;
    }

    //OUTROS

    //Método validator e create
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:60',
            'email' => 'required|max:60|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //     'photo' => 'img/users_img/profile_picture.jpg',
        // ]);
    }

    public function configuracoes(Request $request){
        $comentariosUser = $this->carregarComentariosUserId(Auth::user()->id);
        return view('front.configuracoes', compact('comentariosUser'));
    }


}
