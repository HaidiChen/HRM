<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_butie'] != ""){
	$butie = $_POST['txt_butie'];
	$id = $_POST['txt_id'];
	$str = "update xueli set butie = $butie where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('学历补贴修改成功');
			window.location.href='../xueli_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('学历补贴修改失败');
			window.location.href='../xueli_update.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('补贴不能为空！');
		window.location.href='../xueli_update.php';
	</script>";
}

?>
