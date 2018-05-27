<html>

<head>
	<title>
		职位变动登记	
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
<?php include 'action/session_check.php';
	require_once("../conn/Conn_DB.php");
	session_start();
	if ($_GET['id'] != "")
		$_SESSION['zhiyuanid'] = $_GET['id'];
	$str = "select * from yuangong where id = ".$_SESSION['zhiyuanid'];
	$arr = mysql_query($str);
	$result = mysql_fetch_array($arr);
?>
	<form action="action/zhiyuan_biandong_do.php" method="post">
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					职位变动登记表	
				</td>
			</tr>
			<tr>
				<td>姓名：</td>
				<td>
				<input type="text" disabled value="<?php echo $result['xingming']; ?>" />
				</td>
			</tr>
			<tr>
				<td>现职位：</td>
				<td><input type="text" disabled value="<?php
					$str2 = "select name from zhiwei where id = ".$result['zhiweibianhao'];
					$arr2 = mysql_query($str2);
					$result2 = mysql_fetch_array($arr2);
					echo $result2['name'];
				?>" /></td>
			</tr>
			<tr>
				<td>目标职位：</td>
				<td><?php include "select_zhiweitype3.php"; ?></td>
			</tr>
			<tr>
			<input type="hidden" name="txt_id" value="<?php echo $result['id']; ?>" />
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="返回" onclick="window.location.href='zhiyuan_manager.php';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
