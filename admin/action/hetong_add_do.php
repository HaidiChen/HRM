<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_hetongbianhao'] != "" && $_POST['txt_youxiaoqi'] != ""){
	$hetongbianhao = $_POST['txt_hetongbianhao'];
	$youxiaoqi = $_POST['txt_youxiaoqi'];
	$str = "select * from hetong";
	$arr = mysql_query($str);
	// 检查是否已经存在该合同，如存在则不执行添加并退出该脚本
	while ($result = mysql_fetch_array($arr)){
		if ($result['bianhao'] == $hetongbianhao){
		echo "<script>
			alert('已存在该合同项目，请填写新的项目');
			window.location.href='../hetong_add.php';
		</script>";
		exit();
		}
	}
	$str = "insert into hetong (bianhao, youxiaoqi) 
	values($hetongbianhao, $youxiaoqi)";
	$insert = mysql_query($str);
	if ($insert){
		echo "<script>
			alert('合同项目添加成功');
			window.location.href='../hetong_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('合同项目添加失败');
			window.location.href='../hetong_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('合同项目编号和有效期不能为空！');
		window.location.href='../hetong_add.php';
	</script>";
}

?>
