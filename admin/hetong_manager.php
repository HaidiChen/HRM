<html>

<head><title>合同项目管理</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css" >
</head>

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>现有合同项目</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from hetong order by id";
				$address = "hetong_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from hetong order by id limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>合同编号</td><td>有效期(年)</td><td colspan="2">操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
			?>
			<tr align="center">
				<td ><?php echo $result["bianhao"]; ?></td>
				<td ><?php echo $result['youxiaoqi'];?></td>
				<td ><a href="hetong_update.php?id=<?php echo $result["id"]; ?>">修改</a></td>
				<td ><a href="action/hetong_delete_do.php?id=<?php echo $result['id']; ?>">删除</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
