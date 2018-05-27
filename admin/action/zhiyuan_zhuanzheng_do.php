<?php
require_once('../../conn/Conn_DB.php');
$str = "update yuangong set zhiweizhuangtai = 1 where id = ".$_GET['id'];
$update = mysql_query($str);
if ($update){
	echo "<script>
		alert('转正成功');
		window.location.href='../zhiyuan_manager.php';
	</script>";
}
else {
	echo "<script>
		alert('转正失败');
		window.location.href='../zhiyuan_manager.php';
	</script>";
}
?>
