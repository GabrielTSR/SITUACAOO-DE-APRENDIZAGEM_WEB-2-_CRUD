<?php

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'cadastroDesafio';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if($conexao === false){

    die(mysqli_connect_error());

}