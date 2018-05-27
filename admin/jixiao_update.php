<html>

<head>
	<title>
		编辑绩效级别	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
<?php include 'action/session_check.php';
	require_once("../conn/Conn_DB.php");
	session_start();
	if ($_GET['id'] != "")
		$_SESSION['jixiaoid'] = $_GET['id'];
	$str = "select * from jixiao where id = ".$_SESSION['jixiaoid'];
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
?>
	<form action="action/jixiao_update_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					编辑绩效级别及对应工资	
				</td>
			</tr>
			<tr>
				<td>绩效级别：</td>
				<td>
				<input type="text" disabled value="<?php echo $result['jibie']; ?>" />
				</td>
			</tr>
			<tr>
				<td>工资：</td>
				<td><input type="number" name="txt_gongzi" value="<?php echo $result['gongzi']; ?>" /></td>
			</tr>
			<tr>
			<input type="hidden" name="txt_id" value="<?php echo $result['id']; ?>" />
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="返回" onclick="window.location.href='jixiao_manager.php';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
