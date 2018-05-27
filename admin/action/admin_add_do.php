<?php

function idExists($bianhao){
	$str = "select id from yuangong";
	$arr = mysql_query($str);
	while ($result = mysql_fetch_array($arr)){
		if ($result['id'] == $bianhao){
			return true;
		}
	}
	return false;
}
require_once("../../conn/Conn_DB.php");
if ($_POST['txt_yuangongbianhao'] != "" && $_POST['txt_password1'] != "" && $_POST['txt_password2'] != ""){
	$yuangongbianhao = $_POST['txt_yuangongbianhao'];
	$password1 = $_POST['txt_password1'];
	$password2 = $_POST['txt_password2'];
	if ($password1 != $password2){
		echo "<script>
			alert('密码不一致！添加失败！');
			window.location.href='../admin_add.php';
		</script>";
		exit(0);
	}
	// 检查是否已经存在该管理员，如存在则不执行添加并退出该脚本
	if (!idExists($yuangongbianhao)){
		echo "<script>
			alert('不存在该职员!');
			window.location.href='../admin_add.php';
		</script>";
		exit(0);
	}
	$str = "select shenfen from yuangong where id = $yuangongbianhao";
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
		if ($result['shenfen'] == "administrator"){
		echo "<script>
			alert('已存在该管理员!');
			window.location.href='../admin_add.php';
		</script>";
		exit(0);
		}
	$str = "update yuangong set shenfen = 'administrator', password = '$password1' where id = $yuangongbianhao";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('管理员添加成功');
			window.location.href='../admin_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('管理员添加失败');
			window.location.href='../admin_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('职员编号和密码不能为空！');
		window.location.href='../admin_add.php';
	</script>";
}

?>
