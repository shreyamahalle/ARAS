<?php
session_start();
require'connection.php';
if (!isset($_SESSION['u_id'])) {
  require'session.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

  <title>profile</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		
		.width
			{
				width: 60%;
			}
		.margin
			{
				margin-right: 50px;
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
<body id="page-top">

  <!-- Navigation -->
 <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" style="background-color:blueviolet; height: 50px;">
    <div class="container">
      
     
      <h3 style=" color: white; font-style: italic; text-shadow: 2px 2px 2px black">ARAS</h3>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="homepage.html" style="color: white;">Home</a>
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="#registration" style="color: white;">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="logout.php" style="color: white;">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->


  <section class="bg-light page-section" id="team" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
        	<br><br><br>
          <h2 class="section-heading text-uppercase">User Profile</h2>
          <h3 class="section-subheading text-muted" >User</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <?php
          $u_id=$_SESSION['u_id'];
           $sql="SELECT * FROM system WHERE u_id='$u_id'";
           $result=mysqli_query($con,$sql);
           while($row=mysqli_fetch_array($result)) 
           {
            $u_id=$row['u_id'];
          ?>
        </div>
    <div style="margin-left: 20px;">
        <div class="col-sm-12 text-center">
          
            <img class="mx-auto rounded-circle text-center width margin" src="img/profile.png" alt="">
            <h4>User Id : <?php echo $row['u_id']; ?></h4>
            <h5>User Name : <?php echo $row['u_name']; ?></h5>
            <p class="text-muted">User City : <?php echo $row['u_city']; ?></p>
            <p class="text-muted">User Email : <?php echo $row['u_email']; ?></p>
            <p class="text-muted">User Contact : <?php echo $row['u_conn']; ?></p>
            <p class="text-muted">User Dob : <?php echo $row['u_dob']; ?></p>
            <p class="text-muted">User Address : <?php echo $row['u_add']; ?></p>
               <p class="text-muted">User Addhar No. : <?php echo $row['u_adar']; ?></p>
                            
          <button type="button" class="btn btn-primary btn-lg"><a href="index.html?u_id=<?php echo $u_id; ?>" style="color: white;">Next</a></button>
          
        </div>   
<br><br>
    </div>  

        <div class="col-sm-8">
          <div style="margin-left: 335px;">
        <div class="mx-auto text-center " >
          <p class="large text-muted">Analysis Of Rural Assert System</p>
        </div>
      </div>
    </div>
  </section>
<?php
}

?>
  <footer class="footer text-center">
    <div class="container">
      <div class=" ">
        
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
       
           <div class="col-md-4" style="margin-left: 310px;">
          <span class="copyright">Copyright &copy;2022 develope by ARAS project group</span>
        </div>
        </div>
       
      </div>
    </div>
  </footer>
  <br><br>
  </body>
  </html>