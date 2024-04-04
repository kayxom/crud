<?php 
$host = 'localhost';
$usuario = 'root';
$senha ='';
$bd = 'sergio';
$conexao =new mysqli ( $host,$usuario,$senha,$bd);

if ($conexao){

echo"Erro".mysqli_connect_errno();



}
else {
    echo"conexao feita";
}
?>
