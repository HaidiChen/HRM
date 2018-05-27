<html>

<head><title>管理员一览</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" >
</head>

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>管理员一览</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select id,xingming from yuangong where shenfen = 'administrator' order by id";
				$address = "admin_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select id,xingming from yuangong where shenfen = 'administrator' order by id limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>编号</td><td>姓名</td><td colspan="2">操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
			?>
			<tr align="center">
				<td ><?php echo $result["id"]; ?></td>
				<td ><?php echo $result["xingming"]; ?></td>
				<td ><a href="adminpwd_update.php?id=<?php echo $result["id"]; ?>">修改密码</a></td>
				<td ><a href="action/admin_delete_do.php?id=<?php echo $result['id']; ?>">删除</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
