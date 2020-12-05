<?php
if(!isset($_SESSION['nome'])){
    header('Location :../Login.php');
    exit();
}

?>