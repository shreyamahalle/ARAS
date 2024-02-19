<?php
require'connection.php';

if(isset($_POST['uplode'])) {
	
	

	$image= time().'_'.$_FILES['u_img']['name'];
	$folder='uplode/'.$image;
	move_uploaded_file($_FILES['u_img']['tmp_name'], $folder);
}


?>