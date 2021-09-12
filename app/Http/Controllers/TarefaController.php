<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\User;

class TarefaController extends Controller
{
    public function index(){  /*Função que retorna a view princiapal */

        $tarefas = Tarefa::all(); /*Busca todos os dados sobre tarefas no banco*/

        return view('welcome',['tarefas' => $tarefas]); /*Manda os resultados para a página */
    }


    public function create(){ /*Função que retorna a view de criação de tarefas */
        return view('tarefa/create');
    }

    public function store(Request $request){ /*Função que salva os dados no banco*/
        $tarefas = new Tarefa;

        $tarefas->nome_tarefa = $request->nome_tarefa;
        $tarefas->descricao = $request->descricao;
        $tarefas->status= $request->status;

        $user = auth()->user(); /*Pega id do usuário loga */

        $tarefas->user_id = $user->id; /*Atrela o usuário a tarefa */

        $tarefas->save();

        return redirect('/')->with('msg','Tarefa criada concluida com sucesso!');
    }

    public function show($id){ /*Função que busca os dados da pessoa sobre suas tarefas */

        $tarefas = Tarefa::findOrFail($id);

        $criadorTarefa = User::where('id', $tarefas->user_id)->first()->toArray();

        return view('tarefa.show',['tarefas'=>$tarefas, 'criadorTarefa'=>$criadorTarefa]);

    }

    //Sessão de todos os eventos para

    public function totalTarefas(){

        $tarefas = Tarefa::all();

        return view('tarefa.totalTarefas', ['tarefas'=>$tarefas]);

    }


    //Sessão de tarefas particulares

    public function dashboard(){

        $user = auth()->user();

        $tarefas = $user->tarefas;

        return view('tarefa.dashboard', ['tarefas'=>$tarefas]);

    }

    public function destroy($id){

        Tarefa::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg','Tarefa concluida com sucesso!');

    }

    public function edit($id){

        $tarefas = Tarefa:: findOrFail($id);

        $criadorTarefa = User::where('id', $tarefas->user_id)->first()->toArray();

        $usuarios = User::all();

        return view('tarefa.edit', ['tarefas'=>$tarefas, 'criadorTarefa'=>$criadorTarefa, 'usuarios'=>$usuarios]);

    }

    public function update(Request $request){

        Tarefa::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg','Tarefa atualizado com sucesso!');

    }

    // Usuários lista e edição

    public function showusers(){

        $user = User::all();

        return view('/users/showusers',['user'=>$user]);

    }

    public function destroyUser($id){

        User::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg','Excluido usuário com sucesso!');

    }

    public function edituser($id){

        $user = User:: findOrFail($id);

        return view('users.edituser',['user'=>$user]);

    }

    public function updateuser(Request $request){

        User::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg','Usuário atualizado com sucesso!');

    }

}
