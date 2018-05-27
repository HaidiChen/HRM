<html>

<head>
	<title>
		添加职位类别
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >

<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/zhiweitype_add_do.php" method="post">
		<table class="add" cellpadding="5">
			<tr>
				<td colspan="2" align="center" class="tabletitle">
					添加职位类别
				</td>
			</tr>
			<tr>
				<td><font color="red"> * </font>上级</td>
				<td><?php include 'select_zhiweitype1.php'; ?></td>
			</tr>
			<tr>
				<td><font color="red"> * </font>职位</td>
				<td><input type="text" name="txt_name" /></td>
			</tr>
			<tr>
				<td>职位人数</td>
				<td>
					<input onkeyup="this.value=this.value.replace(/\D/g,'')"  
					onafterpaste="this.value=this.value.replace(/\D/g,'')" name="txt_renshu" type="text" />
				</td>
			</tr>
			<tr>
				<td>职位工资</td>
				<td>
					<input onkeyup="this.value=this.value.replace(/\D/g,'')" 
					onafterpaste="this.value=this.value.replace(/\D/g,'')" name="txt_gongzi" type="text"/>  
				</td>
			</tr>
			<tr>
				<td>绩效权重</td>
				<td>
					<input onkeyup="this.value=this.value.replace(/\D/g,'')" 
					onafterpaste="this.value=this.value.replace(/\D/g,'')" name="txt_quanzhong" type="text"/>%
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="保存" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
