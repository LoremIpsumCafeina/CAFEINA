<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function logar(Request $request){
       $user = DB::table('aluno')->get()->toArray();
       if($request->input('numero_matricula') == $user[1]->numero_matricula && $request->input('password') == $user[1]->password){
            Auth::user();
            $laboratorios = app('App\Http\Controllers\ContentController')->content($user[1]->id);
            return view('content.content')->with('laboratorios', $laboratorios);
       } else {
            return view('auth.login')->with('retorno', 'Login ou senha incorretos');
       }
    }
}