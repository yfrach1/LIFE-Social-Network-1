<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="choose.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container sign_in">
  <div class="jumbotron sign_in">
    <h1 id="white">Manager Login</h1>      
  </div>
  <div>
    <?php
        const br="<br>";
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
          echo 'Loading page - GET';
          echo " ";
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo 'Submit was clicked - POST';
            echo " ";
            $host = 'localhost';     
            $user = 'root';
            $password = '';
            $pass='0';
            $dataBaseName = 'samim';
            $id= $_POST['id'];
            $flag=0;
            $password= $_POST['password'];
            $message_password = "wrong password";
            $message_id = "ID does not exist";
            $mysqli = new mysqli($host,$user,"",$dataBaseName);
            $sql1 = "SELECT * FROM manager";
            $result1 = $mysqli->query($sql1);
            if ($result1->num_rows > 0) {
              //<th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Country</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>City</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Status</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Date</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Edu</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Exp</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Course & Diploma</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Military & Service</th>
              while($row1 = $result1->fetch_assoc()) {
                if ($row1["c_id"]==$id){
                    $flag = $flag + 1;
                    if ($password != $row1['c_password']) {
                      echo "<script type='text/javascript'>alert('$message_password');</script>";
                    }
                    else{
                        echo "<script type='text/javascript'>window.close('manager_page.php');</script>";
                        echo "<script type='text/javascript'>window.open('volunteer_list.php');</script>";
                        echo "<script type='text/javascript'>window.close('manager_page.php');</script>";
                    }
                //. "</td><td>" . $row["c_country"]. "</td><td>" . $row["c_city"]. "</td><td>" . $row["c_status"]. "</td><td>" . $row["c_date"]. "</td><td>" . $row["c_edu"]. "</td><td>" . $row["c_exp"]. "</td><td>" . $row["c_course"]. "</td><td>" . $row["c_army"]
                }
            }
            if ($flag==0){
                echo "<script type='text/javascript'>alert('$message_id');</script>";
            } 
            $mysqli->close();   
        }
        
    }
    ?>
</div>     
</div>
<a href = 'login_choose.html'><i style="font-size:45px; color:white; margin-top: 2%; margin-left:48%; margin-bottom: 2%;" class="fa fa-undo"></i></a>

</body>
</html>