<?php
session_start();
$_SESSION['autenticado'];
if(!isset($_SESSION['autenticado']) || $_SESSION
['autenticado'] != 'SIM'){
  header ('Location: entrar.php?senha=erro3');
}

?>