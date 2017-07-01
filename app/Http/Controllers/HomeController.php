<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    private $user;
    private $comments; 
    
    
    public function __construct(User $user)
    {   
        $this->user = $user; 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('front.index');
    }

    public function registrar(Request $request){

        //verificar se já existe um e-mail
        $email = $this->user->where('email', $request->email)->count();

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

            return redirect('/');//->with('Status', 'Cadastrado com sucesso!');
        }
    }

    public function login(Request $request){


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $this->user = Auth::user();
            $msg = "Logado com sucesso!";

            return view('front.index', compact('msg'));

        } else {
            $msg = "Não foi possível logar!";

            return view('front.index', compact('msg'));
        }
            
    }

        

    

    //Método validator e create
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:60',
            'email' => 'required|email|max:60|unique:users',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
