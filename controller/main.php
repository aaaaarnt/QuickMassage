<?php
include "lib/lib.php";
include "model/DiaMassagem.php";
include "model/CadeiraMassagem.php";
include "model/HorarioMassagem.php";
include "model/Usuario.php";


  $diaMassagem = new DiaMassagem();
  $diaMassagem->getDiaMassagemAtivo($mySQL);

  //print_r($diaMassagem);  // print_r imprime o Objeto inteiro

include "./view/html/header.html";
include "./view/html/body.html";
include "./view/html/footer.html";


?>