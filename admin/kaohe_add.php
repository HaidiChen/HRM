<html>

<head>
	<title>
		绩效考核	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/kaohe_add_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					绩效考核	
				</td>
			</tr>
			<tr>
				<td>员工：</td>
				<td><select name="txt_yuangongbianhao">
<?php
	require_once('../conn/Conn_DB.php');
	$str = "select id, xingming from yuangong";
	$arr = mysql_query($str);
	while ($result = mysql_fetch_array($arr)){
		echo "<option value='".$result['id']."'>".$result['xingming']."</option>";
	}
?>
				</select></td>
			</tr>
			<tr>
				<td>主管评分：</td>
				<td>
					<input type="number" name="txt_zhuguan" />
				</td>
			</tr>
			<tr>
				<td>同事评分：</td>
				<td><input type="number" name="txt_tongshi" /></td>
			</tr>
			<tr>
				<td>下属评分：</td>
				<td><input type="number" name="txt_xiashu" /></td>
			</tr>
			<tr>
				<td>自我评分：</td>
				<td><input type="number" name="txt_ziwo" /></td>
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
