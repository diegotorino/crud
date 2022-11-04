<?php

require "../../app_lista_tarefas/tarefa.model.php";
require "../../app_lista_tarefas/tarefa_service.php";
require "../../app_lista_tarefas/conexao.php";



$acao = isset ($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'inserir') {


$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaservice = new tarefaservice($conexao, $tarefa);
$tarefaservice->inserir();

header('Location: nova_tarefa.php?inclusao=1');


} elseif ($acao == 'recuperar') {

	$tarefa = new Tarefa();
	$conexao = new Conexao();

	$tarefaservice = new tarefaservice($conexao, $tarefa);
	$tarefas = $tarefaservice->recuperar();
}


?>