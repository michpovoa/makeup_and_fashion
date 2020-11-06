<?php
// Connect Database
$nome_servidor = 'localhost';
$username = 'root';
$senha = '';
$nome_bd = 'makeup_and_fashion';

$conecta = mysqli_connect($nome_servidor, $username, $senha, $nome_bd);

// Code DB - uft-8
mysqli_set_charset($conecta, "utf8");

// Error DB
if( mysqli_connect_error() ) {
    echo 'Erro na conexão: ' . mysqli_connect_error();
}