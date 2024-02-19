<?php 
  if (isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $massage=$_POST['massage'];


//sarpanch mail id
      $to='sarpanch@gmail.com';

//tahesil higher authority mail id
    $to2='thesil@gmail.com';
    
      
    
    $massage1="Name:".$name."\n"."Subject:".$subject."\n\n"."Address:".$address."\n\n"."Wrote The Massage:".$massage;
    $massage2="Name:".$name."\n"."Subject:".$subject."\n\n"."Address:".$address."\n\n"."Wrote The Massage: alarting massage:".$massage;
    $headers="From:".$email;
    


    if(mail($to, $subject, $massage1, $headers) && mail($to2, $subject, $massage2, $headers))
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
      echo "<h1>Somethimg went wrong !</h1>";
    }
  }


 ?>