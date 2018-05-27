<?php

require_once("../../conn/Conn_DB.php");
if ($_POST['txt_xueli'] != "" && $_POST['txt_parentid'] != "" && $_POST['txt_name'] != "" && $_POST['txt_jixiao'] != "" && $_POST['txt_hetongbianhao'] != "" && $_POST['txt_qianyueshijian'] != "" && $_POST['txt_ruzhishijian'] != "" && $_POST['txt_zhiweizhuangtai'] != ""){
	$xueli = $_POST['txt_xueli'];
	$zhiweibianhao = $_POST['txt_parentid'];
	$jixiao = $_POST['txt_jixiao'];
	$name = $_POST['txt_name'];
	$hetongbianhao = $_POST['txt_hetongbianhao'];
	$ruzhishijian = $_POST['txt_ruzhishijian'];
	$qianyueshijian = $_POST['txt_qianyueshijian'];
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
	$zhiweizhuangtai = $_POST['txt_zhiweizhuangtai'];
	$gongling = Date('Y') - Date('Y', strtotime($ruzhishijian));
	$password = substr($idcard, strlen($idcard)-6, strlen($idcard));
	$shenfen = "zhiyuan";
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
	$str = "insert into yuangong(zhiweibianhao, zhiweizhuangtai, xingming, gender, birthdate, xuelibianhao, jibengongzibianhao, jixiaogongzibianhao, minzu, idcard, zhengzhimianmao, jiguan, lianxidizhi, youbian, youxiang, ruzhishijian, qianyueshijian, hetongbianhao, biyexuexiao, zhuanye, lianxidianhua, password, shenfen)
		values($zhiweibianhao, $zhiweizhuangtai, '$name', '$gender', '$birthdate', $xueli, $jibengongzibianhao , $jixiao, '$minzu', '$idcard', '$mianmao', '$jiguan', '$lianxidizhi', '$youbian', '$youxiang', '$ruzhishijian', '$qianyueshijian', $hetongbianhao, '$biyexuexiao', '$zhuanye', '$lianxidianhua', '$password', '$shenfen')";
	$insert = mysql_query($str);
	if ($insert){
		echo "<script>
			alert('职员信息添加成功');
			window.location.href='../zhiyuan_manager.php';
		</script>";
	}
	else {
		echo mysql_error($str);
		echo "<script>
			alert('职员信息添加失败');
			window.location.href='../zhiyuan_add.php';
		</script>";
	}
}
else {
	echo "<script>
		alert('*号项不能为空！');
		window.location.href='../zhiyuan_add.php';
	</script>";
}

?>
