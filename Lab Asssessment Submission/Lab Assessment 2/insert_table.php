<?php

$link = MySQLi_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not connect." .MySQLi_connect_error());
}

$sql = "INSERT INTO test_table(id,username,password) VALUES('1','DEMO','DEMO')";

if(MySQLi_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not able to insert values." .MySQLi_error($link);

}

MYSQLi_close($link)

?>