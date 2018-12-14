<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocupacao extends Model
{
    //
    public $timestamps = false;

    public function registrar($setor, $funcao)
    {
    	$ocupacao = new Ocupacao;
    	$ocupacao->user_id = auth()->user()->id;
        $ocupacao->setor = $setor;
       	$ocupacao->funcao = $funcao;
        $ocupacao->save();
        
    }

   
}
