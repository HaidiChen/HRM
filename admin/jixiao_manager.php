<html>

<head><title>绩效级别管理</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>绩效级别</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from jixiao order by jibie";
				$address = "jixiao_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from jixiao order by jibie limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>绩效级别</td><td>工资</td><td colspan="2">操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
			?>
			<tr align="center">
				<td ><?php echo $result["jibie"]; ?></td>
				<td ><?php echo $result['gongzi'];?></td>
				<td ><a href="jixiao_update.php?id=<?php echo $result["id"]; ?>">修改</a></td>
				<td ><a href="action/jixiao_delete_do.php?id=<?php echo $result['id']; ?>">删除</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
