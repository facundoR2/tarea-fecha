<?php
function dias_restantes($fecha_final){
    $fecha_actual = date("Y-m-d");
    $s = strtotime($fecha_final)-strtotime($fecha_actual);
    $d =intval($s/86400);
    echo"Dias restantes hasta la fecha $fecha_final:$d";
}
dias_restantes("2023-9-01");?>