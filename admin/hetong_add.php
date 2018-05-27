<html>

<head>
	<title>
		新增合同项目	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/hetong_add_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					新增合同项目	
				</td>
			</tr>
			<tr>
				<td>合同编号：</td>
				<td>
					<input type="text" name="txt_hetongbianhao" />
				</td>
			</tr>
			<tr>
				<td>有效期(年)：</td>
				<td><input type="text" name="txt_youxiaoqi" /></td>
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
