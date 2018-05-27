<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_name'] != ""){
	$name = $_POST['txt_name'];
	$parentid = $_POST['txt_parentid'];
	$renshu = $_POST['txt_renshu'];
	$gongzi = $_POST['txt_gongzi'];
	$quanzhong = $_POST['txt_quanzhong'];
	$str = "insert into zhiwei(shangjiid, name, jihuarenshu, gongzi,jixiaoquanzhong, zhuangtai)
	values($parentid, '$name', $renshu, $gongzi, $quanzhong, 0)";
	$insert = mysql_query($str);
	if ($insert){
		echo "<script>
			alert('职位类别添加成功');
			window.location.href='../zhiweitype_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('职位类别添加失败');
			window.location.href='../zhiweitype_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('请输入职位名称！');
		window.location.href='../zhiweitype_add.php';
	</script>";
}

?>