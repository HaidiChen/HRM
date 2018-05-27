<html>

<head>
	<title>
		新增基本工资及其补贴	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/jiben_add_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					新增基本(工龄)工资及其补贴	
				</td>
			</tr>
			<tr>
				<td>工龄：</td>
				<td>
					<input type="number" name="txt_gongling" />
				</td>
			</tr>
			<tr>
				<td>补贴：</td>
				<td><input type="number" name="txt_butie" /></td>
			</tr>
			<tr>
				<td>基本工资：</td>
				<td><input type="number" name="txt_gongzi" /></td>
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
