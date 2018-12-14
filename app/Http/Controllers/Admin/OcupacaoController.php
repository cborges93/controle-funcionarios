<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ocupacao;
use DB;

class OcupacaoController extends Controller
{
    public function index()
    {	
   		$ocupacaos = DB::table('ocupacaos')->where('user_id', auth()->user()->id)->get();;
    	return view ('admin.ocupacao.index', ['ocupacaos' => $ocupacaos]);
    }

    public function nova() 
    {
     	return view('admin.ocupacao.nova');
    }


   public function salvar(Request $request, Ocupacao $ocupacao)
    {
    	$ocupacao->registrar($request->setor, $request->funcao);
    	return redirect()->route('admin.ocupacao')->with('message', 'Registrado com sucesso!');
    	
    }

    public function excluir($id) {
        $ocupacao = Ocupacao::findOrFail($id);
        $ocupacao->delete();
        return redirect()->route('admin.ocupacao');
    }


    public function editar($id)
    {

    }
}
