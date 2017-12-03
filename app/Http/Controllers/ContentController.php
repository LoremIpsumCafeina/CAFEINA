<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ContentController extends Controller
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
    public function content(){
    	$laboratorio = DB::table('laboratorio')->get()->toArray();
        $laboratorio_relaciona_maquina = DB::table('laboratorio_relaciona_maquina')->get()->toArray();

    	return view('content.content')
            ->with('laboratorios', $laboratorio)
            ->with('laboratorio_relaciona_maquinas', $laboratorio_relaciona_maquina);
    }

    public function reservar_horario(Request $request){

        DB::table('laboratorio_relaciona_maquina')
            ->where('id',  $request->input('id_maquina'))
            ->update(['status' => 2]);
        
        return redirect('content');
    }
}