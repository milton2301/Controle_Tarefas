<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[TarefaController::class, 'index']); /*Rota que direciona para a página principal */

Route::get('/tarefa/create',[TarefaController::class, 'create'])->middleware('auth'); /*Rota que manda o usuário para a criação de tarefas */

Route::post('/tarefa',[TarefaController::class,'store'])->middleware('auth'); /*Recabe os dados via form e manda para o metodos Store que salva no banco as informações */

Route::get('/tarefa/{id}',[TarefaController::class, 'show'])->middleware('auth'); /*Rota que manda o usuário para todos os detalhes da tarefa */

Route::get('/dashboard',[TarefaController::class, 'dashboard'])->middleware('auth'); /*Rota que manda o usuário para todos os detalhes da tarefa */

Route::delete('/tarefa/{id}',[TarefaController::class,'destroy'])->middleware('auth'); /*Rota que leva os dados que serão excluidos do banco  */

Route::get('/tarefa/edit/{id}',[TarefaController::class,'edit'])->middleware('auth'); /* Rota que recupera uma tarefa para editar*/

Route::put('/tarefa/update/{id}',[TarefaController::class,'update'])->middleware('auth'); /* Rota que atualiza os itens do banco*/

//Novas atualizações

Route::get('/showusers',[TarefaController::class,'showusers'])->middleware('auth');/*Tela que leva a todos os usuários */

Route::delete('/users/{id}',[TarefaController::class,'destroyUser'])->middleware('auth'); /*Rota que leva os dados que serão excluidos do banco  */

Route::get('/users/edituser/{id}',[TarefaController::class,'edituser'])->middleware('auth'); /* Rota que recupera uma tarefa para editar*/

Route::put('/users/update/{id}',[TarefaController::class,'updateuser'])->middleware('auth'); /* Rota que atualiza os itens do banco*/

//Rotas que mostra todas as terefas

Route::get('/totalTarefas',[TarefaController::class,'totalTarefas'])->middleware('auth');/*Tela que leva a todas as tarefas */
