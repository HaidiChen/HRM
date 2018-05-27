<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_password_old'] != "" && $_POST['txt_password_new'] != ""){
	$oldpassword= $_POST['txt_password_old'];
	$newpassword = $_POST['txt_password_new'];
	$id = $_POST["txt_id"];
	$str = "select password from yuangong where id = $id";
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
	if ($result['password'] != $oldpassword){
		echo "<script>
			alert('原密码输入错误');
			window.location.href='../adminpwd_update.php';
		</script>";
		exit(0);
	}
	$str = "update yuangong set password = '$newpassword' where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('密码修改成功');
			window.location.href='../admin_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('密码修改失败');
			window.location.href='../adminpwd_update.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('密码不能为空！');
		window.location.href='../admin_update.php';
	</script>";
}

?>
