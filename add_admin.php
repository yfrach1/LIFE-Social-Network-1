<?php
/*
CREATE TABLE clients (
    c_first_name varchar(255) NOT NULL,
    c_last_name varchar(255) NOT NULL,
    c_password1 varchar(255) NOT NULL,
    c_id varchar(255) NOT NULL,
    c_gender varchar(255) NOT NULL,
    c_phone varchar(255) NOT NULL,
    c_mail varchar(255),
    c_country varchar(255) NOT NULL,
    c_city varchar(255) NOT NULL,
    c_status varchar(255),
    c_date varchar(255) NOT NULL,
    c_story varchar(255),
    PRIMARY KEY (c_id)
);
*/
/*
312147275
itay17283946
*/
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 'Loading page - GET';
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'Submit was clicked - POST';
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dataBaseName = 'samim';
    $mysqli = new mysqli($host,$user,$password,$dataBaseName);
    $id= $_POST['id'];
    $password= $_POST['password'];
    $phone= $_POST['phone'];
    $sql = "INSERT INTO manager (c_id, c_password, c_phone)
    VALUES ('$id', '$password', '$phone' )";
    $mysqli->query($sql);
}
?>
