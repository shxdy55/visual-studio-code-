<?php

$mysql = new mysqli(
    "localhost",
    "root",
    "",
    "androidd"
);
if ($mysql->connect_error){
    die("failed to conexion" . $mysql->connect_error);

}