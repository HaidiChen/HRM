<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_zhuguan'] != "" && $_POST['txt_tongshi'] != "" && $_POST['txt_xiashu'] != "" && $_POST['txt_ziwo'] != "" && $_POST['txt_yuangongbianhao'] != ""){
	$zhuguan = $_POST['txt_zhuguan'];
	$tongshi = $_POST['txt_tongshi'];
	$xiashu = $_POST['txt_xiashu'];
	$ziwo = $_POST['txt_ziwo'];
	$id = $_POST['txt_yuangongbianhao'];
	$zongping = $zhuguan * 0.40 + $tongshi * 0.30 + $xiashu * 0.20 + $ziwo * 0.10;
	$str = "update yuangong set zhuguan = $zhuguan, tongshi = $tongshi, xiashu = $xiashu, ziwo = $ziwo, zongping = $zongping where id = $id"; 
	$update = mysql_query($str);
	if ($update){
		echo "<script>
			alert('考核完毕');
			window.location.href='../kaohe_manager.php';
		</script>";
	}
	else {
		echo "<script>
			alert('考核失败');
			window.location.href='../kaohe_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('请确保所有数据均已填写！');
		window.location.href='../kaohe_add.php';
	</script>";
}

?>
