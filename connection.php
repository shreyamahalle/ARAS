<?php
      $host='localhost:3306';
      $user='root';
      $pass="root";
      $dbname='village';


      $con=mysqli_connect($host,$user,$pass,$dbname);
      mysqli_select_db($con,$dbname);
?>