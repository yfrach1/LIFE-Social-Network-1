<!-- https://www.youtube.com/watch?v=UBF1vYoXIw0 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Volunteer Login</title>
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
    <h1 id="white">Volunteer Login</h1>      
  </div>
  <div>
      <form class="form-horizontal top" method="post" action="volunteer_page.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="ID" name="id">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <div class="form-group">
            <input type="hidden" id="custId" name="hidden" value="1">
        </div>
        <div class="form-group">        
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </form>
      <form class="form-horizontal top" method="post">
        <div class="form-group">
        <h4 class="h44">forgot your password? - enter your email below:</h4>
            <input type="text" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input type="hidden" id="custId" name="hidden" value="2">
        </div>
        <div class="form-group">        
            <button type="submit" class="btn btn-default">Send</button>
        </div>
      </form>
      <br>
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
          $hidden= $_POST['hidden'];
          if ($hidden == '2'){
            $email= $_POST['email'];
            $mysqli = new mysqli($host,$user,$password,$dataBaseName);
            $sql = "SELECT * FROM forgot";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
              echo "check your email";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                if ($row["c_mail"]==$email){
                  $pass=$row["c_password1"];
                  mail($email,"Reload Password",$pass);
                }
              }
              
            } 
            else {
              echo "0 results";
            }
            $mysqli->close();         
          }
          else if ($hidden == '1'){
            $id= $_POST['id'];
            $flag=0;
            $password= $_POST['password'];
            $message_password = "wrong password";
            $message_id = "ID does not exist";
            $mysqli = new mysqli($host,$user,'',$dataBaseName);
            $sql = "SELECT * FROM volunteer";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                if ($row["c_id"]==$id){
                  $flag = $flag + 1;
                  if ($password != $row['c_password1']) {
                    echo "<script type='text/javascript'>alert('$message_password');</script>";
                  }
                  else{
                    echo "<table style='margin-top: 2%; margin-bottom: 2%; text-align: center;'><tr><th style='text-align: center;'>First Name</th><th style='text-align: center;'>Last Name</th><th style='text-align: center;'>Password</th><th style='text-align: center;'>ID</th><th style='text-align: center;'>Gender</th><th style='text-align: center;'>Phone</th><th style='text-align: center;'>Mail</th><th style='text-align: center;'>Country</th><th style='text-align: center;'>City</th><th style='text-align: center;'>Status</th><th style='text-align: center;'>Date</th><th style='text-align: center;'>Edu</th><th style='text-align: center;'>Exp</th><th style='text-align: center;'>Course & Diploma</th><th style='text-align: center;'>Military & Service</th>";//<th style='text-align: center;'>Edit</th><th style='text-align: center;'>Remove</th></tr>;
                    echo "<tr><td>" . $row["c_first_name"]. "</td><td>" . $row["c_last_name"]. "</td><td>" . $row["c_password1"]. "</td><td>" . $row["c_id"]. "</td><td>" . $row["c_gender"]. "</td><td>" . $row["c_phone"]. "</td><td>" . $row["c_mail"]. "</td><td>" . $row["c_country"]. "</td><td>" . $row["c_city"]. "</td><td>" . $row["c_status"]. "</td><td>" . $row["c_date"]. "</td><td>" . $row["c_edu"]. "</td><td>" . $row["c_exp"]. "</td><td>" . $row["c_course"]. "</td><td>" . $row["c_army"];
                    echo "</table>";
                    //. "</td><td>'<a href = 'edit.php?id=$id'><i class='fa fa-edit' style='font-size:45px;color:black;'></i></a>'</td><td>'<a href = 'delete.php?id=$id'><i class='fa fa-trash-o' style='font-size:48px;color:black;'></i></a>'</td></tr>";
                  }
                }
              }
              if ($flag==0){
                echo "<script type='text/javascript'>alert('$message_id');</script>";
              }
            }
            $mysqli->close();
          // }
        }
           
        }   
     
      ?>
      </div>
</div>     
</div>
<a href = 'login_choose.html'><i style="font-size:45px; color:white; margin-top: 2%; margin-left:48%; margin-bottom: 2%;" class="fa fa-undo"></i></a>

<script src="valid.js"></script>
</body>
</html>