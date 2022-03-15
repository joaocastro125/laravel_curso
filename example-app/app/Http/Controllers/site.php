<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site extends Controller
{
    public function index(){
        // podemos colocar uma logica 
        // verificar se o usuario existe
        // buscar os dados do usuario etc .. 
        // return view('sair');
        return 'seja bem vindo';
    }
    public function sair(){
        $id=1;
        $nome='joao';
        $age=33;
        // para passar o dados na view precisamos utilizar o array 
        return view('sair',[
            'nome'=>$nome,
            'idade'=>$age,
            'id'=>$id
        
        ]);
    }
    public function user(Request $r){
       $data=[
           'quantidade'=>$r->qnt
       ];
        return view('user',$data);
    }
}
