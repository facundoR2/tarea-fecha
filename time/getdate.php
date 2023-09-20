<!--funcion getdate() -->
<?php
$fecha = getdate();
echo ("Día:".$fecha["mday"]."<br/>");
echo ("Mes:".$fecha["mon"]."<br/>");
echo ("Año:".$fecha["year"]."<br/>");
echo ("hora:".$fecha["hours"]."<br/>");
echo ("Minutos:".$fecha["minutes"]."<br/>");
echo ("Segundos:".$fecha["seconds"]."<br/>");
?>