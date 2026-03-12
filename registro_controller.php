<?php

require "registro.conexao.php";
require "registro.model.php";
require "registro.service.php";

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
    $sistole = new Registro();
    $sistole->__set('sistole', $_POST['sistole']);

    $diastole = new Registro();
    $diastole->__set('diastole', $_POST['diastole']);

    $responsavel = new Registro();
    $responsavel->__set('responsavel', $_POST['responsavel']);


    $conexao = new Conexao();

    $registroService = new RegistroService($conexao, $sistole, $diastole, $responsavel);
    $registroService->inserir();

    header('Location: pagina100-pa.php?inclusao=1');

} else if ($acao == 'recuperar') {
   
    $conexao = new Conexao();

    $sistole = new Registro();
    $diastole = new Registro();
    $responsavel = new Registro();
    
    $registroService = new RegistroService($conexao, $sistole, $diastole, $responsavel);
    $registros = $registroService->recuperar();
}    

/*
echo '<pre>';
print_r($registroService);
echo '</pre>';
*/
