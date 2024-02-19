<?php
extract($_POST);
if (isset($submit)) {
  $sql="SELECT * FROM systems WHERE u_email='$u_email' AND u_pass='$u_pass'";
  $result=mysqli_query($con,$sql);
  if ($row=mysqli_fetch_array($result)) {
  	session_start();
    $_SESSION['u_id']=$row['u_id'];
  }
  elseif(!isset($_SESSION['u_id'])){
  echo"<script>
    alert('Email Or Password Incorrect, Try Again');
     window.location.assign('login.html');
    </script>";
}

}
else{
  echo"<script>
    alert('Login First');
     window.location.assign('login.html');
    </script>";
  }

  ?>