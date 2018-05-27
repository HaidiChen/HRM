<?php
session_start();
if ($_SESSION['user1'] == "" && $_SESSION['user2'] == ""){
	echo "<script>
		alert('登录超时，请重新登录.');
		window.location.href='login.php';
	</script>";
}

?>
