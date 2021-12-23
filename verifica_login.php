<?php
session_start();

//CASO A SESSÃO NÃO EXISTA REDIRECIONA PARA INDEX
if (!$_SESSION['usuario']) {
    header('Location: index.php');
    exit();
}
