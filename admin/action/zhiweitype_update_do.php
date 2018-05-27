<?php 

require_once("../../conn/Conn_DB.php");

$id = $_POST['txt_id'];
$renshu = $_POST['txt_renshu'];
$gongzi = $_POST['txt_gongzi'];
$quanzhong = $_POST['txt_quanzhong'];
$str = "select xianyourenshu from zhiwei where id = ".$id;
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
if ($result['xianyourenshu'] > $renshu){
	echo "<script>
		alert('职位计划人数不可小于现有人数！');
		window.location.href='../zhiweitype_update.php';
	</script>";
	exit(0);
}
$str = "update zhiwei set jihuarenshu=$renshu, 
	gongzi = $gongzi, jixiaoquanzhong = $quanzhong where id = ".$id;
$update = mysql_query($str);
if ($update){
	echo "<script>
		alert('职位类别修改成功！');
		window.location.href='../zhiweitype_manager.php';
	</script>";
}
else {
	echo "<script>
		alert('职位类别修改失败！');
		window.location.href='../zhiweitype_manager.php';
	</script>";
}

?>
