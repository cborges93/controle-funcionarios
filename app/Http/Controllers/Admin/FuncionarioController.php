<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FuncionarioController extends Controller
{
    public function index()
    {	
   		$funcionarios = DB::table('funcionarios')->join('ocupacaos', 'ocupacao_id', '=', 'ocupacaos.id')->select('funcionarios.nome','ocupacaos.setor','ocupacaos.funcao')->get();;
    	return view ('admin.funcionario.index', ['funcionarios' => $funcionarios]);
    }

    public function novo() 
    {
    	 $ocupacao_lista = DB::table('ocupacaos')->groupBy('setor')->get();
        return view('admin.funcionario.novo')->with('ocupacao_lista', $ocupacao_lista);
    }

   public function salvar(Request $request, Ocupacao $funcionario)
    {
    	$funcionario->registrar($request->nome, $request->email,$request->telefone,$request->nascimento,$request->CPF,$request->CTPS,$request->ocupacao_id,$request->admissao,$request->foto);
    	return redirect()->route('admin.funcionario')->with('message', 'Registrado com sucesso!');
    	
    }
}
