<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_parentid'] != ""){
	$zhiweibianhao = $_POST['txt_parentid'];
	$id = $_POST['txt_id'];
	$str = "update yuangong set zhiweibianhao = $zhiweibianhao where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('职位变动成功');
			window.location.href='../zhiyuan_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('职位变动失败');
			window.location.href='../zhiyuan_biandong.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('目标职位不能为空！');
		window.location.href='../zhiyuan_biandong.php';
	</script>";
}

?>
