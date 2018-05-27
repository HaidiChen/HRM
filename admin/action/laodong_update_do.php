<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_hetongbianhao'] != "" && $_POST['txt_qianyueshijian'] != "" && $_POST['txt_ruzhishijian'] != "" && $_POST['txt_jixiao'] != ""){
	$yuangongbianhao = $_POST['txt_yuangongbianhao'];
	$jixiao = $_POST['txt_jixiao'];
	$hetongbianhao = $_POST['txt_hetongbianhao'];
	$ruzhishijian = $_POST['txt_ruzhishijian'];
	$qianyueshijian = $_POST['txt_qianyueshijian'];
	$gongling = Date('Y') - Date('Y', strtotime($ruzhishijian));
	$str2 = "select max(gongling) as mg from jiben";
	$arr2 = mysql_query($str2);
	$result2 = mysql_fetch_array($arr2);
	if ($gongling > $result2['mg']){
		$jibengongzibianhao = -1;
	}
	else {
		$str2 = "select id from jiben where gongling = ".$gongling;
		$arr2 = mysql_query($str2);
		$result2 = mysql_fetch_array($arr2);
		$jibengongzibianhao = $result2['id'];
	}
	$str = "update yuangong set jibengongzibianhao=$jibengongzibianhao, ruzhishijian='$ruzhishijian', qianyueshijian='$qianyueshijian', hetongbianhao=$hetongbianhao, jixiaogongzibianhao=$jixiao where id = $yuangongbianhao";
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('劳动关系修改成功');
			window.location.href='../laodong_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('劳动关系修改失败');
			window.location.href='../laodong_update.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('每项必填');
		window.location.href='../laodong_update.php';
	</script>";
}

?>
