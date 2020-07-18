<?php

$link = MySQLi_connect('localhost','root','');

if($link == false)
{
    die("Error: Could not connect." .MySQLi_connect_error());
}

$sql = "CREATE DATABASE VS_CODE_TEST";

if(MySQLi_query($link, $sql)){
    echo "DB Created";
}
else{
    echo "Error: Could not able to create DB." .MySQLi_error($link);

}

MYSQLi_close($link)

?>