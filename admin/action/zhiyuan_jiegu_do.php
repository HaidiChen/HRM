<?php
include '../../conn/Conn_DB.php';
$str = "delete from yuangong where id = ".$_GET['id'];
$delete = mysql_query($str);
if ($delete){
	echo "<script>
		alert('已解雇该职员！');
		window.location.href='../../admin/zhiyuan_manager.php';
	</script>";
}
else {
	echo "<script>
		alert('解雇失败！');
		window.location.href='../../admin/zhiyuan_manager.php';
	</script>";
}
?>
