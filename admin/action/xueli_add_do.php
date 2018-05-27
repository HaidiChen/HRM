<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_xueli'] != "" && $_POST['txt_butie'] != ""){
	$xueli = $_POST['txt_xueli'];
	$butie = $_POST['txt_butie'];
	$str = "select * from xueli";
	$arr = mysql_query($str);
	// 检查是否已经存在该学历，如存在则不执行添加并退出该脚本
	while ($result = mysql_fetch_array($arr)){
		if ($result['xueli'] == $xueli){
		echo "<script>
			alert('已存在该学历补贴，请填写新的学历');
			window.location.href='../xueli_add.php';
		</script>";
		exit();
		}
	}
	$str = "insert into xueli (butie, xueli) 
	values($butie, '$xueli')";
	$insert = mysql_query($str);
	if ($insert){
		echo "<script>
			alert('学历补贴添加成功');
			window.location.href='../xueli_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('学历补贴添加失败');
			window.location.href='../xueli_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('学历和补贴不能为空！');
		window.location.href='../xueli_add.php';
	</script>";
}

?>
