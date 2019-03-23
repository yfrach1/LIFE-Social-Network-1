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
<title>Add Admin</title>
</head>
<body>


<div class="container sign_in">
<div class="jumbotron sign_in" >
<h1 id="white">Add Admin</h1>
</div>
<form class="form-horizontal top" method="post">
<div class="form-group" >
<input type="text" class="form-control" placeholder="ID" name="id">
</div>
<div class="form-group" >
<input type="text" class="form-control" placeholder="password" name="password">
</div>
<div class="form-group" >
<input type="text" class="form-control" placeholder="phone" name="phone">
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Add</button>
</div>
</form>

</div>
<a href = 'volunteer_list.php'><i style="font-size:45px; color:white; margin-top: 2%; margin-left:48%; margin-bottom: 2%;" class="fa fa-undo"></i></a>
<script src="valid.js"></script>
</body>
</html>
