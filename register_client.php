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
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $password1= $_POST['password1'];
    $id= $_POST['id'];
    $gender= $_POST['gender'];
    $phone= $_POST['phone'];
    $mail= $_POST['mail'];
    $country= $_POST['country']; 
    $city= $_POST['city'];
    $status= $_POST['status'];
    $date= $_POST['date'];
    $story= $_POST['story'];
    $sql = "INSERT INTO clients (c_first_name, c_last_name, c_password1, c_id, c_gender, c_phone, c_mail, c_country, c_city, c_status, c_date, c_story)
    VALUES ('$first_name', '$last_name', '$password1', '$id', '$gender', '$phone', '$mail', '$country', '$city', '$status', '$date', '$story' )";
    $mysqli->query($sql);
    $sql = "INSERT INTO forgot (c_first_name, c_last_name, c_password1, c_id, c_phone, c_mail)
    VALUES ('$first_name', '$last_name', '$password1', '$id', '$phone', '$mail' )";
    $mysqli->query($sql);
}
?>
