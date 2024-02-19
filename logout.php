<?php
session_start();
unset($_SESSION['u_id']);
echo"<script>
		window.location.href='login.html';
		</script>";
?>