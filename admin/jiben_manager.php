<html>

<head><title>基本工资及工龄补贴管理</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css" >
</head>

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>基本工资及工龄补贴</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from jiben order by gongling";
				$address = "jiben_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from jiben order by gongling limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>工龄</td><td>补贴</td><td>基本工资</td><td colspan="2">操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
					if ($result['gongling'] < 0)
						continue;
			?>
			<tr align="center">
				<td ><?php echo $result["gongling"]; ?></td>
				<td ><?php echo $result['butie'];?></td>
				<td ><?php echo $result['gongzi'];?></td>
				<td ><a href="jiben_update.php?id=<?php echo $result["id"]; ?>">修改</a></td>
				<td ><a href="action/jiben_delete_do.php?id=<?php echo $result['id']; ?>">删除</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
