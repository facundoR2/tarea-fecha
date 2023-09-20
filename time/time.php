<?php
date_default_timezone_set("America/Argentina/Ushuaia"); echo
"<p>".date('h:m:i')."</p>";
?>
<?php

$prueba = date ("Y/m/d"); echo
"hoy es:".date("d/m/Y"); echo
"<br/>";
if($prueba<"2020/11/01"){
    echo "Sitio web en mantenimiento hasta el 01/11/2020";

}else{
    echo"Bienvenido a nuestro sitio";
}
?>
<!--funcion strftime -->
<?php
date_default_timezone_set("America/Argentina/Ushuaia");
setlocale(LC_TIME,'spanish');
echo "<h1>".strftime("Ejemplo 1 : %A, %d de %B de %Y")."</h1>";?>
<!-- -->





