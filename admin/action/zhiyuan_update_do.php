<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_name'] != ""){
	$id = $_POST['id'];
	$name = $_POST['txt_name'];
	$gender = $_POST['txt_gender'];
	$minzu = $_POST['txt_minzu'];
	$birthdate = $_POST['txt_birthdate'];
	$mianmao = $_POST['txt_mianmao'];
	$jiguan = $_POST['txt_jiguan'];
	$idcard = $_POST['txt_idcard'];
	$youxiang = $_POST['txt_youxiang'];
	$youbian = $_POST['txt_youbian'];
	$lianxidizhi = $_POST['txt_dizhi'];
	$biyexuexiao = $_POST['txt_xuexiao'];
	$zhuanye = $_POST['txt_zhuanye'];
	$lianxidianhua = $_POST['txt_dianhua'];
	$str = "update yuangong set xingming = '$name', gender='$gender', minzu='$minzu', birthdate='$birthdate', zhengzhimianmao='$mianmao', jiguan='$jiguan', idcard='$idcard', youxiang='$youxiang', youbian='$youbian', lianxidizhi='$lianxidizhi', biyexuexiao='$biyexuexiao', zhuanye='$zhuanye', lianxidianhua='$lianxidianhua' where id = $id";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('职员信息修改成功');
			window.location.href='../zhiyuan_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('职员信息修改失败');
			window.location.href='../zhiyuan_update.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('姓名不能为空！');
		window.location.href='../zhiyuan_update.php';
	</script>";
}

?>
