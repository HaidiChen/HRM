<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_butie'] != "" && $_POST['txt_gongzi'] != ""){
	$butie = $_POST['txt_butie'];
	$id = $_POST['txt_id'];
	$gongzi = $_POST['txt_gongzi'];
	$str = "update jiben set butie = $butie, gongzi = $gongzi where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('基本工资及工龄补贴修改成功');
			window.location.href='../jiben_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('基本工资及工龄补贴修改失败');
			window.location.href='../jiben_manager.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('基本工资和补贴不能为空！');
		window.location.href='../jiben_update.php';
	</script>";
}

?>
