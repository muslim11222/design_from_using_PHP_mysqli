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

          $sql = "INSERT INTO form_list(username,password) VALUES('$username',$password')";
          $result = mysqli_query($conn, $sql);

          if($result== true) {
               echo 'data already exists';
          } else {
               echo 'data not found';
          }
     }
?>