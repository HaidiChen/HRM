<html>

<head><title>劳动关系管理</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>劳动关系表</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from yuangong order by id";
				$address = "laodong_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from yuangong order by id limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>职员编号</td><td>姓名</td><td>合同编号</td>
				<td>合同有效期(年)</td><td>入职时间</td><td>签约时间</td>
				<td>绩效级别</td><td>操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
					if ($result['hetongbianhao'] == ""){
						continue;
					}
			?>
			<tr align="center">
				<td ><?php echo $result["id"]; ?></td>
				<td ><?php echo $result['xingming'];?></td>
				<td ><?php 
					$str2 = "select bianhao from hetong where id = ".$result['hetongbianhao'];
					$arr2 = mysql_query($str2);
					$result2 = mysql_fetch_array($arr2);
					echo $result2['bianhao'];
					?></td>
				<td ><?php
					$str2 = "select youxiaoqi from hetong where id = ".$result['hetongbianhao'];
					$arr2 = mysql_query($str2);
					if ($result2 = mysql_fetch_array($arr2)){
						echo $result2['youxiaoqi']; 
					}
				?></td>
				<td ><?php echo $result['ruzhishijian']; ?></td>
				<td ><?php echo $result["qianyueshijian"]; ?></a></td>
				<td ><?php
					$str2 = "select jibie from jixiao where id = ".$result['jixiaogongzibianhao'];
					$arr2 = mysql_query($str2);
					if ($result2 = mysql_fetch_array($arr2)){
						echo $result2['jibie']; 
					}
				?></td>
				<td ><a href="laodong_update.php?id=<?php echo $result["id"]; ?>">修改</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
