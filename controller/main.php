<?php
include "lib/lib.php";

$result = $mySQL->executeSQL("SELECT * FROM `diamassagem` WHERE 1=1 AND BoolAtivo = 1 order by 1 DESC");

while($rowDia = mysqli_fetch_array( $result, MYSQLI_NUM)){
  printf ("ID: %d | Dia: %s | Ativo: %b %s", $rowDia[0], $rowDia[1], $rowDia[2],"<br>");
}


/*
//QUERYs

$queryDia = "SELECT * FROM `diamassagem` WHERE 1=1 order by 1 DESC";
$queryCadeira = "SELECT * FROM `cadeiramassagem`WHERE 1=1 order by 1 DESC";
$queryHorario = "SELECT * FROM `horariomassagem`WHERE 1=1 order by 1 DESC";
$queryUsers = "SELECT * FROM `listausuariosadb` WHERE 1=1 order by 1 DESC";
$queryInscricao = "SELECT * FROM `inscricao` WHERE 1=1 order by 1 DESC";





//CONSULTA QUERY
$resultDia = mysqli_query($link, $queryDia);
$resultCadeira = mysqli_query($link, $queryCadeira);
$resultHorario = mysqli_query($link, $queryHorario);
$resultUsers = mysqli_query($link, $queryUsers);
$resultInscricao = mysqli_query($link, $queryInscricao);

$rowcountDia=mysqli_num_rows($resultDia);
  printf("Result set has %d rows.%s",$rowcountDia,$DLine);

//numeric array
while($rowDia = mysqli_fetch_array( $resultDia, MYSQLI_NUM)){
  printf ("ID: %d | Dia: %d | Ativo: %b %s", $rowDia[0], $rowDia[1], $rowDia[2],$DLine);
}

$rowcountCadeira=mysqli_num_rows($resultCadeira);
  printf("Result set has %d rows.%s",$rowcountCadeira,$DLine);

//
while($rowCadeira = mysqli_fetch_array( $resultCadeira, MYSQLI_NUM)){
  printf ("ID: %d | Cadeira: %d | Ativo: %b %s", $rowCadeira[0], $rowCadeira[1], $rowCadeira[2],$DLine);
}

$rowcountHorario=mysqli_num_rows($resultHorario);
  printf("Result set has %d rows.%s",$rowcountHorario,$DLine);

//
while($rowHorario = mysqli_fetch_array( $resultHorario, MYSQLI_NUM)){
  printf ("ID: %d | Horario: %d | Ativo: %b %s", $rowHorario[0], $rowHorario[1], $rowHorario[2],$DLine);
}

$rowcountUsers=mysqli_num_rows($resultUsers);
  printf("Result set has %d rows.%s",$rowcountUsers,$DLine);

//
while($rowUsers = mysqli_fetch_array( $resultUsers, MYSQLI_NUM)){
  printf ("ID: %d | Users: %d | Ativo: %b %s", $rowUsers[0], $rowUsers[1], $rowUsers[2],$DLine);
}

$rowcountInscricao=mysqli_num_rows($resultInscricao);
  printf("Result set has %d rows.%s",$rowcountInscricao,$DLine);

//
while($rowInscricao = mysqli_fetch_array( $resultInscricao, MYSQLI_NUM)){
  printf ("ID: %d | Dia: %d | Ativo: %b %s", $rowInscricao[0], $rowInscricao[1], $rowInscricao[2],$DLine);
}


//FECHAR CONCEXAO COM TABELA
mysqli_free_result($resultDia);
mysqli_free_result($resultCadeira);
mysqli_free_result($resultHorario);
mysqli_free_result($resultUsers);
mysqli_free_result($resultInscricao);
//FECHAR CONECXÃO COM DB
*/


?>