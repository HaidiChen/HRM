<html>

<head>
	<title>
		管理员密码修改	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
<?php include 'action/session_check.php';
	require_once("../conn/Conn_DB.php");
	session_start();
	if ($_GET['id'] != "")
		$_SESSION['adminpwdid'] = $_GET['id'];
	$str = "select * from yuangong where id = ".$_SESSION['adminpwdid'];
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
?>
	<form action="action/adminpwd_update_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					修改管理员密码	
				</td>
			</tr>
			<tr>
				<td>原密码：</td>
				<td>
				<input type="password" name="txt_password_old" />
				</td>
			</tr>
			<tr>
				<td>新密码：</td>
				<td><input type="password" name="txt_password_new"/></td>
			</tr>
			<tr>
			<input type="hidden" name="txt_id" value="<?php echo $result['id']; ?>" />
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="返回" onclick="window.location.href='admin_manager.php';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
