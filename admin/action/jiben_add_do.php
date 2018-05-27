<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_gongzi'] != "" && $_POST['txt_butie'] != "" && $_POST['txt_gongling'] != ""){
	$gongling = $_POST['txt_gongling'];
	$gongzi = $_POST['txt_gongzi'];
	$butie = $_POST['txt_butie'];
	$str = "select * from jiben";
	$arr = mysql_query($str);
	// 检查是否已经存在该基本（工龄）工资补贴，如存在则不执行添加并退出该脚本
	while ($result = mysql_fetch_array($arr)){
		if ($result['gongling'] == $gongling){
		echo "<script>
			alert('已存在该工龄补贴，请填写新的工龄');
			window.location.href='../jiben_add.php';
		</script>";
		exit();
		}
	}
	$str = "insert into jiben (butie, gongling, gongzi) 
	values($butie, $gongling, $gongzi)";
	$insert = mysql_query($str);
	if ($insert){
		echo "<script>
			alert('基本工资及工龄补贴添加成功');
			window.location.href='../jiben_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('基本工资及工龄补贴添加失败');
			window.location.href='../jiben_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('基本工资，工龄和补贴不能为空！');
		window.location.href='../jiben_add.php';
	</script>";
}

?>
