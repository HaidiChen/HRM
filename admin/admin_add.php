<html>

<head>
	<title>
		新增管理员	
	</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
</head>

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/admin_add_do.php" method="post">
		<table class="add"> 
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					新增管理员	
				</td>
			</tr>
			<tr>
				<td>职员：</td>
				<td>
					<select name="txt_yuangongbianhao" >
<?php
	require_once('../conn/Conn_DB.php');
	$str = "select id, xingming from yuangong";
	$arr = mysql_query($str);
	while ($result = mysql_fetch_array($arr)){
		echo "<option value='".$result['id']."'>".$result['xingming']."</option>";
	}
?>
					</select>
				</td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="txt_password1" /></td>
			</tr>
			<tr>
				<td>确认密码：</td>
				<td><input type="password" name="txt_password2" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
