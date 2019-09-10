<?php
  session_start();

  //Verifica se a sessão foi criada
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2');
  }

?>