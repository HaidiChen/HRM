<html>

<head><title>历史绩效考核</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>历史绩效考核</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from yuangong order by id";
				$address = "kaohe_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from yuangong order by id limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>职员编号</td><td>姓名</td><td>职位</td><td>总评分</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
					if ($result['zongping'] == "")
						continue;
			?>
			<tr align="center">
				<td ><?php echo $result["id"]; ?></td>
				<td ><?php echo $result['xingming'];?></td>
				<td ><?php 
					$str2 = "select name from zhiwei where id = ".$result['zhiweibianhao'];
					$arr2 = mysql_query($str2);
					$result2 = mysql_fetch_array($arr2);
					echo $result2['name'];
				?></td>
				<td ><?php echo $result['zongping'];?></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
