<html>

<head>
	<title>
	劳动关系	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; 
	require_once('../conn/Conn_DB.php');
	if ($_GET['id'] != ""){
		$_SESSION['laodongid'] = $_GET['id'];
	}
	$str = "select * from yuangong where id = ".$_SESSION['laodongid'];
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
?>
	<form action="action/laodong_update_do.php" method="post">
		<table class="add" >
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					修改劳动关系	
				</td>
			</tr>
			<tr>
				<td>职员：</td>
				<td><?php echo $result['id'] ?></td>
			</tr>
			<tr>
				<td>入职时间：</td>
				<td><input type="date" name="txt_ruzhishijian" value="<?php echo $result['ruzhishijian']; ?>" /></td>
			</tr>
			<tr>
				<td>签约时间：</td>
				<td><input type="date" name="txt_qianyueshijian" value="<?php echo $result['qianyueshijian']; ?>" /></td>
			</tr>
			<tr>
				<td>合同编号：</td>
				<td><select name="txt_hetongbianhao" >
<?php
	$str2 = "select * from hetong";
	$arr2 = mysql_query($str2);
	while ($hetong = mysql_fetch_array($arr2)){
		if ($result['hetongbianhao'] == $hetong['id']){
			echo "<option value='".$hetong['id']."' selected='true'>".$hetong['bianhao']."</option>";
		}
		else
			echo "<option value='".$hetong['id']."'>".$hetong['bianhao']."</option>";
	}
?>
				</select></td>
			</tr>
			<tr>
				<td>绩效级别：</td>
				<td><select name="txt_jixiao" >
<?php
	$str2 = "select * from jixiao";
	$arr2 = mysql_query($str2);
	while ($jixiao = mysql_fetch_array($arr2)){
		if ($result['jixiaogongzibianhao'] == $jixiao['id']){
			echo "<option value='".$jixiao['id']."' selected='true'>".$jixiao['jibie']."</option>";
		}
		else
			echo "<option value='".$jixiao['id']."'>".$jixiao['jibie']."</option>";
	}
?>
				</select></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="hidden" value="<?php echo $result['id']; ?>" name="txt_yuangongbianhao" />
					<input type="submit" value="保存" />
					<input type="button" value="取消" onclick="window.location.href='cover.html';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
