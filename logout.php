<?php

// APAGA OS DADOS DA SESSÃO ATUAL
session_start();
session_destroy();
header('Location: index.php');
exit();