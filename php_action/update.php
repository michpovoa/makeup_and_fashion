<?php
// conexão Banco de Dados
include_once 'conecta_bd.php';

// Editando informações dos posts Look
if( isset($_POST['btn-edit-look']) ) {

    $id = mysqli_escape_string($conecta, $_POST['id']);
    $titulo = mysqli_escape_string($conecta, $_POST['titulo']);
    $descricao = mysqli_escape_string($conecta, $_POST['descricao']);
    $localizacao = mysqli_escape_string($conecta, $_POST['localizacao']);

    $sql = "UPDATE look SET titulo = '$titulo', descricao = '$descricao', localizacao = '$localizacao' WHERE id = '$id'";

    // verificando se a query foi bem sucedida
    if( mysqli_query($conecta, $sql) ) {
        header('Location: ../look.php?Atualido-com-sucesso');
    } else {
        header('Location: ../look.php?Erro-ao-atualizar');
    }
}

// Editando informações dos posts Maquiagem
if( isset($_POST['btn-edit-makeup']) ) {

    $id = mysqli_escape_string($conecta, $_POST['id']);
    $titulo = mysqli_escape_string($conecta, $_POST['titulo']);
    $descricao = mysqli_escape_string($conecta, $_POST['descricao']);
    $localizacao = mysqli_escape_string($conecta, $_POST['localizacao']);

    $sql = "UPDATE maquiagem SET titulo = '$titulo', descricao = '$descricao', localizacao = '$localizacao' WHERE id = '$id'";

    // verificando se a query foi bem sucedida
    if( mysqli_query($conecta, $sql) ) {
        header('Location: ../maquiagem.php?Atualido-com-sucesso');
    } else {
        header('Location: ../maquiagem.php?Erro-ao-atualizar');
    }
}