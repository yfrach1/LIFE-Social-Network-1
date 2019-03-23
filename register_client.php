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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="choose.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registration</title>
</head>
<body>
    
    
<div class="container sign_in">
    <div class="jumbotron sign_in" >
    <h1 id="white">Registration</h1>      
  </div>
      <form class="form-horizontal top" method="post"><!--onsubmit="return check()" -->
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="first name" name="first_name">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="last name" name="last_name">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="password" name="password1">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="ID" name="id">
        </div>
        <div class="form-group" >
        <h4 class="h44">gender:</h4><select name='gender'>
                <option value="male">male</option>
                <option value="famale">famale</option>
                <option value="unknown">unknown</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="phone number" name="phone">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="mail" name="mail">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="country" name="country">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="city" name="city">
        </div>
        <div class="form-group" >
        <h4 class="h44">martial status:</h4><select name='status'>
                <option value="single">single</option>
                <option value="married">married</option>
                <option value="divorcee">divorcee</option>
                <option value="widow">widow</option>
            </select>
        </div>
        <div class="form-group" >
        <h4 class="h44">birth date:</h4><input type="date" class="form-control" id="id" name="date">
        </div>
        <div class="form-group" >
            <textarea rows='5' cols='10' name= "story" placeholder = "tell us about your story"></textarea>
        </div>
        <div class="form-group">        
            <button type="submit" class="btn btn-default">Registration</button>
        </div>
      </form>
    
</div>
<a href = 'register_choose.php'><i style="font-size:45px; color:white; margin-top: 2%; margin-left:48%; margin-bottom: 2%;" class="fa fa-undo"></i></a>
<script src="valid.js"></script>
</body>
</html>