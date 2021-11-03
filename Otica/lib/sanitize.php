<?php
  function sanitize($texto){
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    $texto = str_replace("/", "-", $texto);
    return $texto;
  }
?>
