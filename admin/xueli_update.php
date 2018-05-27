<html>

<head>
	<title>
		编辑学历补贴	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
<?php include 'action/session_check.php';
	require_once("../conn/Conn_DB.php");
	session_start();
	if ($_GET['id'] != "")
		$_SESSION['xueliid'] = $_GET['id'];
	$str = "select * from xueli where id = ".$_SESSION['xueliid'];
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
?>
	<form action="action/xueli_update_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					编辑学历补贴	
				</td>
			</tr>
			<tr>
				<td>学历：</td>
				<td>
				<input type="text" disabled value="<?php echo $result['xueli']; ?>" />
				</td>
			</tr>
			<tr>
				<td>补贴：</td>
				<td><input type="text" name="txt_butie" value="<?php echo $result['butie']; ?>" /></td>
			</tr>
			<tr>
			<input type="hidden" name="txt_id" value="<?php echo $result['id']; ?>" />
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="返回" onclick="window.location.href='xueli_manager.php';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
