<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuarios;//Importar a classe para usar o ORM

class RegistroController extends Controller
{
    public function index(){
        $dados = Usuarios::all();
        //Pode-se colocar junto ao all o seguinte: $dados = Usuarios::query()->orderBy('nome', 'desc')->get();
        //\DB::select('select * from usuarios;'); -- Outro Modelo
        //dd($dados); Mostrando como coleções

        return view('models.index')->With('dados',$dados);
    }//fim do método

    public function store(Request $request){
        $nomeUsuario = $request->input('nome');
        $telefoneUsuario = $request->input('telefone');

        $usuario = new Usuarios();
        $usuario->nome = $nomeUsuario;
        $usuario->telefone = $telefoneUsuario;
        $usuario->save();//Armazenando no banco de dados

        return redirect('/models');

        /*if(\DB::insert('INSERT INTO usuarios (nome,telefone) VALUES (?,?)',[$nomeUsuario,$telefoneUsuario])){
            return redirect('/models');
        }else{
            return "Deu Erro!";
        }//fim da validação*/
    }//fim do método
}//fim da classe RegistroController 
