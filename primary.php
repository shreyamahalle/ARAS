<?php 
  if (isset($_POST['submit']))
   {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$subject=$_POST['subject'];
  	$massage=$_POST['massage'];
    $address=$_POST['address'];

//sarpanch mail id
  	$to='sarpanch@gmail.com';
  	
  	$massage1="Name:".$name."\n"."Subject:".$subject."\n\n"."Address:".$address."\n\n"."Wrote The Massage:".$massage;
  	$headers="From:".$email;


  	if(mail($to, $subject, $massage1, $headers))
  	{
  		echo "<h1 style='text-align: center; color: blue; font-family:bookman old style; margin-top: 200px;'>Sent Successfully!<br> Thank You"." ".$name.",<br> Will We Contact You Shortly!</h1>
  		<br>
  		<div style='align:center;'>
  		<a href='' style='text-align:center;'><h2 style='color:red;'>Click here to see your ID.</h2></a>
  		</div>
  		
  		";
  	
  	}
  	else
  	{
  		echo "<h1 style='color: red;'>Somethimg went wrong !</h1>";
  	}
  }


 ?>