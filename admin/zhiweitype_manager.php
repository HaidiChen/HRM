<html>

<head><title>职位类别管理</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php'; ?>
	<h1>职位统计管理</h1>
	<form action="" method="post">
		<table align="center">
			<?php 
				require_once("../conn/Conn_DB.php");
				include 'fenye.php';
				$str = "select * from zhiwei order by shangjiid, id, zhuangtai";
				$address = "zhiweitype_manager.php";
				$params = PageOrdered($str, $address);
		 	?>
			<tr align="center" class="tabletitle">
				<td>职位名称</td><td>上级职位</td>
				<td>职位计划人数</td><td>现有人数</td><td>人数缺口</td>
				<td>基本工资</td><td>状态</td>
				<td colspan="2">操作</td>
			</tr>
			<?php

				$str = "select * from zhiwei order by shangjiid, id, zhuangtai limit ".$params[0].", $params[1]";
				$arr = mysql_query($str);
				while($result = mysql_fetch_array($arr)){
			?>
			<tr align="center">
				<td ><?php echo $result["name"]; ?></td>
				<td ><?php
						$str2 = "select name from zhiwei where id = ".$result['shangjiid'];
						if ($arr2 = mysql_query($str2)){
							$result2 = mysql_fetch_array($arr2);
							echo $result2['name'];
						}
						else 
							echo "错误";
					?></td>
				<td ><?php echo $result["jihuarenshu"]; ?></td>
				<td ><?php echo $result["xianyourenshu"]; ?></td>
				<td ><?php echo $result["jihuarenshu"] - $result['xianyourenshu']; ?></td>
				<td ><?php echo $result["gongzi"]; ?></td>
				<td ><?php 
						switch($result["zhuangtai"]){
							case 0: echo "<font color='red'>补员</font>";break;
							case 1: echo "<font color=blue>满员</font>";break;
							default: break;
						}
					?></td>
				<td ><a href="zhiweitype_update.php?id=<?php echo $result["id"]; ?>">编辑</a></td>
				<td ><a href="action/zhiweitype_delete_do.php?id=<?php echo $result['id']; ?>">删除</a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>

</html>
