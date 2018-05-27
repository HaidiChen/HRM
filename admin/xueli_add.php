<html>

<head>
	<title>
		新增学历补贴	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/xueli_add_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					新增学历补贴	
				</td>
			</tr>
			<tr>
				<td>学历：</td>
				<td>
					<input type="text" name="txt_xueli" />
				</td>
			</tr>
			<tr>
				<td>补贴：</td>
				<td><input type="text" name="txt_butie" /></td>
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
