<?php
    require "../service/TarefaService.php";
    require "../model/Tarefa.php";
    require "../dao/Conexao.php";

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa',$_POST['tarefa']);

    $conexao = new Conexao();
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
?>