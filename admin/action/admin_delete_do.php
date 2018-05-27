<?php
require_once("../../conn/Conn_DB.php");
$str = "update yuangong set shenfen = '' where id = ".$_GET['id'];
$delete = mysql_query($str);
if ($delete){
	echo "<script>
		alert('已删除该管理员');
		window.location.href='../admin_manager.php';
	</script>";
}
else {
	echo "<script>
		alert('删除失败！');
		window.location.href='../admin_manager.php';
	</script>";
}
?>
