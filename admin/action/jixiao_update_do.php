<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_gongzi'] != ""){
	$gongzi = $_POST['txt_gongzi'];
	$id = $_POST['txt_id'];
	$str = "update jixiao set gongzi = $gongzi where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('绩效修改成功');
			window.location.href='../jixiao_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('绩效修改失败');
			window.location.href='../jixiao_update.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('工资不能为空！');
		window.location.href='../jixiao_update.php';
	</script>";
}

?>
