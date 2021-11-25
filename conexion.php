<?php

try{
    $conex = mysqli_connect('localhost','root','','pasaportecovid');

  } catch (Exception $e) {
    echo 'ERROR:'.$e->getMessage();
  }
?>
