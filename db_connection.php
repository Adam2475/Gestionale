<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "db_gestionale";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Connection to DB failed: %s\n" . $conn -> error);
    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

?>