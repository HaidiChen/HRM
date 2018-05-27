<html>

<head>
	<title>
		编辑合同项目	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
<?php include 'action/session_check.php';
	require_once("../conn/Conn_DB.php");
	session_start();
	if ($_GET['id'] != "")
		$_SESSION['hetongid'] = $_GET['id'];
	$str = "select * from hetong where id = ".$_SESSION['hetongid'];
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
?>
	<form action="action/hetong_update_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					编辑合同项目	
				</td>
			</tr>
			<tr>
				<td>合同编号：</td>
				<td>
				<input type="text" disabled value="<?php echo $result['bianhao']; ?>" />
				</td>
			</tr>
			<tr>
				<td>有效期(年)：</td>
				<td><input type="text" name="txt_youxiaoqi" value="<?php echo $result['youxiaoqi']; ?>" /></td>
			</tr>
			<tr>
			<input type="hidden" name="txt_id" value="<?php echo $result['id']; ?>" />
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="返回" onclick="window.location.href='hetong_manager.php';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
