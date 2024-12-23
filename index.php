<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'form';

     $conn = mysqli_connect($hostname, $username, $password, $db_name);

     if(!$conn) {
          echo "Error connecting".mysqli_connect_error();
     }


     if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "INSERT INTO form_list(username,password) VALUES('$username','$password')";
          $result = mysqli_query($conn, $sql);

          if($result== true) {
               echo '';
               exit();
          } else {
               echo 'data not found';
          }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>from_using_php</title>

     <!-- css link start here  -->
      <link rel="stylesheet" href="/from_using_php/style.css">
</head>
<body>
     
     <form action="index.php" method="POST">
          <div class="container">
               <div class="box">
                    <div class="heading">
                         <h2> Login </h2>
                    </div>
                    <div class="allInput">
                         <input type="text" name="username" placeholder="Username" >
                         <input type="password" name="password" placeholder="Password" >
                    </div>
                    <div class="button">
                         <input type="submit" name="submit" value="Sing In">
                    </div>

                    <div class="dowtext">
                         <p> Forget password <br><span class="clickhere"><a href="#">Click Here</a></span> </p>

                    </div>
               </div>
          </div>
     </form>
</body>
</html>