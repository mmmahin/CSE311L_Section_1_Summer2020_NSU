<?php

$link = MySQLi_connect('localhost','root','', 'VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not connect." .MySQLi_connect_error());
}

$sql = "CREATE TABLE test_table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

if(MySQLi_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not able to create Table." .MySQLi_error($link);

}

MYSQLi_close($link)

?>