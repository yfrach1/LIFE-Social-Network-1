<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="choose.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>
<!-- <i><h4 class="h444">Add Admin:</h4></i> -->

<!-- <a href = 'add_admin.html'><i style="font-size:45px; color:white; margin-left:48%; margin-bottom: 2%;" class="fas fa-user-tie"></i></a> -->
<a href="add_admin.php"><button style='font-size:24px; color:black;'>Add Admin: <i class='fas fa-user-tie'></i></button></a>
<!-- <a id="img" href="add_admin.html"><button class="button">Add Admin  <img src="add-admin.svg" width="20%"></button><br></a> -->
<!-- <a href="add_admin.html"><button class="button">Add Admin  <img src="add-admin.svg" width="40%"></button><br></a> -->

<div class="container sign_in">
  <div class="jumbotron sign_in">
    <h1 id="white">Volunteer List</h1>      
  </div>
  <div>
    <?php
            $host = 'localhost';     
            $user = 'root';
            $password = '';
            $dataBaseName = 'samim';
            $flag=0;
            $mysqli = new mysqli($host,$user,$password,$dataBaseName);
            $sql1 = "SELECT * FROM volunteer";
            $result = $mysqli->query($sql1);
            if ($result->num_rows > 0) {
                echo "<table style='margin-top: 2%; margin-bottom: 2%; text-align: center; color: white; border: 3px solid rgb(253, 253, 253);'><tr><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Full Name</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>ID</th>";//<th style='text-align: center;'>Edit</th><th style='text-align: center;'>Remove</th></tr>;
              //<th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Country</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>City</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Status</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Date</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Edu</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Exp</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Course & Diploma</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Military & Service</th>
                while($row = $result->fetch_assoc()) {
                    // echo "<table style='margin-top: 2%; margin-bottom: 2%; text-align: center; color: white; border: 3px solid rgb(253, 253, 253);'><tr><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>Full Name</th><th style='text-align: center; color: white; border: 1.5px solid rgb(253, 253, 253);'>ID</th>";//<th style='text-align: center;'>Edit</th><th style='text-align: center;'>Remove</th></tr>;
                    echo "<tr><td>".$row["c_first_name"]." ".$row["c_last_name"]."</td><td>".$row["c_id"]."</td></tr>";
                }   
                echo "</table>";
                
                        
            }
            else {
                echo "<p style='color:white;'>0 results</p>";
            }
            $mysqli->close();      //. "</td><td>" . $row["c_country"]. "</td><td>" . $row["c_city"]. "</td><td>" . $row["c_status"]. "</td><td>" . $row["c_date"]. "</td><td>" . $row["c_edu"]. "</td><td>" . $row["c_exp"]. "</td><td>" . $row["c_course"]. "</td><td>" . $row["c_army"]
            
        //}

    ?>
</div>     
</div>
<a href = 'login_choose.html'><i style="font-size:45px; color:white; margin-top: 2%; margin-left:48%; margin-bottom: 2%;" class="fa fa-undo"></i></a>

</body>
</html>