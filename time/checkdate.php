<?php
$dia =8;
$mes =9;
$año =2023;
if(checkdate($mes,$dia,$año)){
    echo"<p>El dia $dia/$mes/$año existe.</p>";
}else{
    echo"<p>El dia $dia/$mes/$año no existe.</p>";
}
$dia =29;
$mes =10;
$año =2082;
if(checkdate($mes,$dia,$año)){
    echo"<p>El dia $dia/$mes/$año existe.</p>";
}else{
    echo"<p>El dia $dia/$mes/$año no existe.</p>";
}
?>