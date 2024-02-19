<?php
session_start();
extract($_POST);
// $emp_name=$_POST['emp_name'];
require 'connection.php';
if(isset($submit)){
	$sql="UPDATE systems SET  u_id='$u_id',u_conn='$u_conn', u_mark='$u_mark' WHERE u_id='$u_id'";
	$result=mysqli_query($con,$sql);
	if ($result) {
		echo "Record Updated";
		echo"<script>
		window.location.href='profile.php';
		</script>";
	}
	else{
		echo "Record Update Fail";
		echo"<script>
		window.location.href='update.php';
		</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		.align
			{
				text-align: center;
			}
		.card 
			{
                margin: 0 auto; /* Added */
                float: none; /* Added */
                margin-bottom: 10px; /* Added */
            } 
        .color
        	{
        		color: green;
        	}
        .width
        	{
        		width: 400px;
        		margin-left: 40px;
        	}
        	.height
			{
				height: 45px;
			}
		.size
			{
				font-size: 10px;
			}
		.logo
			{
				font-size: 15px;
			}
	</style>
</head>
<body>
	<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" style="background-color:red;">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img width="130" height="60" src="logo3/logo.png"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <p style="margin-top: 30px; color: white; font-style: italic;">AC3AS</p>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="homepage.html">Home</a>
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="#registration">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->


	<?php
	require 'connection.php';
	$u_id=$_GET['u_id'];
	$sql="SELECT * FROM system WHERE u_id='$u_id'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{
		echo"<form action='' method='POST'>
		<div style='margin-top: 70px;'>

		<div class='card align color border-primary bg-light' style='width: 30rem; margin-top:100px;'>
		<div>
			<h3 style='color: red; margin-top: 20px; margin-bottom: 20px;'>Update Form</h3>
		</div>
		<div>
		        <h6>User Id</h6>
				<input class='form-control width ' type='text' name='u_id' value=".$row['u_id']."><br>
				<h6>contact</h6>
				<input  class='form-control width ' type='number' name='u_conn' value=".$row['u_conn']."><br>
				<h6>City</h6>
				<input class='form-control width ' type='text' placeholder='city' name='u_city' value=".$row['u_city']."><br>
				</div>
				<div class='text-center'>
				<input class='text-center btn btn-primary' style='width:100px; margin-bottom:25px; ' type='submit' name='submit' value='submit'><br>
				
				</div>
				</div>
				</div>
				
			</form>";
	}
	?>

</body>
</html>