<html>

<head><title>职员信息表</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>职员信息表</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from yuangong order by id";
				$address = "zhiyuan_manager.php";
				$params = PageOrdered($str, $address);
				$str = "select * from yuangong order by id limit $params[0], $params[1]";
				$arr = mysql_query($str);
			?>
			<tr align="center" class="tabletitle">
				<td>职员编号</td><td>姓名</td><td>职位</td><td>状态</td><td colspan="6">操作</td>
			</tr>
			<?php
				while($result = mysql_fetch_array($arr)){
			?>
			<tr align="center">
				<td ><?php echo $result["id"]; ?></td>
				<td ><?php echo $result['xingming'];?></td>
				<td ><?php
					$str2 = "select name from zhiwei where id = ".$result['zhiweibianhao'];
					$arr2 = mysql_query($str2);
					if ($result2 = mysql_fetch_array($arr2)){
						echo $result2['name']; 
					}
				?></td>
				<td ><?php 
					switch($result['zhiweizhuangtai']){
						case 0:
							echo "试用";
							break;
						case 1:
							echo "正式";
							break;
						default:
							break;
					}
				?></td>
				<td ><a href="zhiyuan_info.php?id=<?php echo $result["id"]; ?>">查看详情</a></td>
				<td ><a href="zhiyuan_biandong.php?id=<?php echo $result["id"]; ?>">职位变动</a></td>
				<td ><a href="action/zhiyuan_jiegu_do.php?id=<?php echo $result["id"]; ?>">解雇</a></td>
				<?php 
				if ($result['zhiweizhuangtai'] == 0)
				echo "<td ><a href='action/zhiyuan_zhuanzheng_do.php?id=".$result['id']."'>转正</a></td>";
				?>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
