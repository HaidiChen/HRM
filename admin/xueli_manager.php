<html>

<head><title>学历补贴管理</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>学历补贴</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from xueli order by id";
				$address = "xueli_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from xueli order by id limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>学历</td><td>补贴</td><td colspan="2">操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
			?>
			<tr align="center">
				<td ><?php echo $result["xueli"]; ?></td>
				<td ><?php echo $result['butie'];?></td>
				<td ><a href="xueli_update.php?id=<?php echo $result["id"]; ?>">修改</a></td>
				<td ><a href="action/xueli_delete_do.php?id=<?php echo $result['id']; ?>">删除</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
