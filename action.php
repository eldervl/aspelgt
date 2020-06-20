<?php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $sactive = $_SESSION['username'];
 if(isset($_POST["username"]))  
 {  
      $query = "  
      SELECT * FROM admin_login  
      WHERE admin_name = '".$_POST["username"]."'  
      AND admin_password = '".$_POST["password"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
          $_SESSION['username'] = $_POST['username'];  
          echo 'Si';
      }  
      else  
      {  
          echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
     unset($_SESSION["username"]);  
 }  
 if(!isset($sactive)){
     header("location:../index.php");
 }
 ?>  