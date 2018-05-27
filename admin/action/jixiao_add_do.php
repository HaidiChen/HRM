<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_jibie'] != "" && $_POST['txt_gongzi'] != ""){
	$jibie = $_POST['txt_jibie'];
	if ($jibie < 1 || $jibie > 10){
		echo "<script>
			alert('请保证绩效级别在1-10之内！');
			window.location.href='../jixiao_add.php';
		</script>";
		exit();
	}
	$gongzi = $_POST['txt_gongzi'];
	$str = "select * from jixiao";
	$arr = mysql_query($str);
	// 检查是否已经存在该绩效级别，如存在则不执行添加并退出该脚本
	while ($result = mysql_fetch_array($arr)){
		if ($result['jibie'] == $jibie){
		echo "<script>
			alert('已存在该绩效级别，请填写新的级别');
			window.location.href='../jixiao_add.php';
		</script>";
		exit();
		}
	}
	$str = "insert into jixiao (jibie, gongzi) 
	values($jibie, $gongzi)";
	$insert = mysql_query($str);
	if ($insert){
		echo "<script>
			alert('绩效级别添加成功');
			window.location.href='../jixiao_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('绩效级别添加失败');
			window.location.href='../jixiao_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('绩效级别和工资不能为空！');
		window.location.href='../jixiao_add.php';
	</script>";
}

?>
