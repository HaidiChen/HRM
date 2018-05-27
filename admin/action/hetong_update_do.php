<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_youxiaoqi'] != ""){
	$youxiaoqi = $_POST['txt_youxiaoqi'];
	$id = $_POST['txt_id'];
	$str = "update hetong set youxiaoqi = $youxiaoqi where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('合同项目修改成功');
			window.location.href='../hetong_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('合同项目修改失败');
			window.location.href='../hetong_update.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('有效期不能为空！');
		window.location.href='../hetong_update.php';
	</script>";
}

?>
