<html>

<head>
	<title>
		新增绩效工资	
	</title>
</head>
<link href="../css/style.css" rel="stylesheet" type="text/css" >

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/jixiao_add_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					新增绩效级别及对应工资	
				</td>
			</tr>
			<tr>
				<td>绩效级别(1-10)：</td>
				<td>
					<input type="number" name="txt_jibie" />
				</td>
			</tr>
			<tr>
				<td>工资：</td>
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
