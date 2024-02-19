<?php
		require"connection.php";
				$u_name=$_POST['u_name'];
				$u_add=$_POST['u_add'];
				$u_email=$_POST['u_email'];
				$u_conn=$_POST['u_conn'];
				$u_adar=$_POST['u_adar'];
				$u_dob=$_POST['u_dob'];
				$u_pass=$_POST['u_pass'];
				$u_city=$_POST['u_city'];
				$u_dt=$_POST['u_dt'];
				$u_st=$_POST['u_st'];
				$u_pin=$_POST['u_pin'];
				
				
				
				
				
			$sql="INSERT INTO systems(u_name,u_add,u_email,u_conn,u_adar,u_dob,u_pass,u_city,u_dt,u_st,u_pin)VALUES('$u_name','$u_add','$u_email','$u_conn','$u_adar','$u_dob','$u_pass','$u_city','$u_dt','$u_st','$u_pin')";

			$result=mysqli_query($con,$sql);

			if ($result) {
							echo"

							<div style='text-align: center; margin-top:150px;'>
                               
                               <h3 style='text-align: center; color:green;'>successfully submited!</h3><br>
                               <a href='login.html'>click to Login</a>

							</div>


							";
			             }
			else       {
			                echo"

                             <div style='text-align: center; margin-top:150px;'>
                               
                               <h3 style='text-align: center; color:red;'>Failed!</h3><br>
                               <a href='registration.html'>click to Login</a>

							</div>

			                ";
			             }             


?>