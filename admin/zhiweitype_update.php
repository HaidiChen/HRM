<html>

<head><title>编辑职位类别</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px">
	<?php	include 'action/session_check.php'; ?>
	<form action="action/zhiweitype_update_do.php" method="post">
		<?php
		session_start();
			if ($_GET['id'] != ""){
				$_SESSION['zhiweiupdateid'] = $_GET['id'];
			}
				require_once('../conn/Conn_DB.php');
				$id = $_SESSION['zhiweiupdateid'];
				$str = "select * from zhiwei where id = ".$id;
				$arr = mysql_query($str);
				$result = mysql_fetch_array($arr);
				$str2 = "select name from zhiwei where id = ".$result['shangjiid'];
				$arr2 = mysql_query($str2);
				$result2 = mysql_fetch_array($arr2);
		?>
		<table class="add">
			<tr>
				<td colspan="2" align="center" class="tabletitle">编辑职位类别</td>
			</tr>
			<tr>
				<td><font color="red">*</font>上级</td>
				<td><?php echo $result2['name']; ?></td>
			</tr>
			<tr>
				<td><font color="red">*</font>职位名称</td>
				<td><?php echo $result['name'] ?></td>
			</tr>
			<tr>
				<td>职位人数：</td>
				<td><input type="text" name="txt_renshu" value="<?php echo $result['jihuarenshu'] ?>" /></td>
			</tr>
			<tr>
				<td>职位工资：</td>
				<td><input type="text" name="txt_gongzi" value="<?php echo $result['gongzi'] ?>" /></td>
			</tr>
			<tr>
				<td>绩效权重：</td>
				<td><input type="text" name="txt_quanzhong" value="<?php echo $result['jixiaoquanzhong'] ?>" />%</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="hidden" name="txt_id" value="<?php echo $result['id'] ?>" />
					<input type="submit" value="保存"/>
					<input type="button" value="返回" onclick="window.location.href='zhiweitype_manager.php';"/>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
