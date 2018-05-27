<html>

<head>
	<title>
		新增职员
	</title>
</head>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php' ?>
	<form action="action/zhiyuan_add_do.php" method="post">
		<table class="add" cellpadding="5" >
			<tr>
				<td colspan="6" align="center" class="tabletitle">
					新增职员	
				</td>
			</tr>
			<tr>
				<td><font color='red'>*</font>职位：</td>
				<td colspan="3"><?php include 'select_zhiweitype3.php'; ?></td>
				<td><font color='red'>*</font>姓名：</td>
				<td><input type="text" name="txt_name" /></td>
			</tr>
			<tr>
				<td>性别：</td>
				<td colspan="3">
					<input type="radio" name="txt_gender" value="男" />男
					<input type="radio" name="txt_gender" value="女" />女
				</td>
				<td>民族：</td>
				<td><input type="text" name="txt_minzu" /></td>
			</tr>
			<tr>
				<td>出生日期：</td>
				<td colspan="3">
					<input type="date" name="txt_birthdate" />
				</td>
				<td>政治面貌：</td>
				<td>
					<input type="text" name="txt_mianmao" />
				</td>
			</tr>
			<tr>
				<td>籍贯：</td>
				<td colspan="5"><textarea cols="65" rows="1" name="txt_jiguan" ></textarea></td>
			</tr>
			<tr>
				<td>身份证号：</td>
				<td><input type="text" name="txt_idcard" /></td>
				<td>邮箱：</td>
				<td><input type="text" name="txt_youxiang" /></td>
				<td>邮编：</td>
				<td><input type="text" name="txt_youbian" /></td>
			</tr>
			<tr>
				<td>联系地址：</td>
				<td colspan="5"><textarea cols="65" rows="1" name="txt_dizhi" ></textarea></td>
			</tr>
			<tr>
				<td>毕业学校：</td>
				<td><input type="text" name="txt_xuexiao" /></td>
				<td>专业：</td>
				<td><input type="text" name="txt_zhuanye" /></td>
				<td><font color='red'>*</font>学历：</td>
				<td>
					<select name="txt_xueli" >
<?php
	require_once("../conn/Conn_DB.php");
	$str = "select * from xueli";
	$arr = mysql_query($str);
	while ($result = mysql_fetch_array($arr)){
		echo "<option value='".$result['id']."'>".$result['xueli']."</option>";
	}
?>
					</select></td>
			</tr>
			<tr>
				<td>联系电话：</td>
				<td><input type="text" name="txt_dianhua" /></td>
				<td><font color='red'>*</font>职位状态：</td>
				<td>
					<input type="radio" name="txt_zhiweizhuangtai" value="0" />试用
					<input type="radio" name="txt_zhiweizhuangtai" value="1" />正式
				</td>
				<td><font color='red'>*</font>绩效级别：</td>
				<td><select name="txt_jixiao" >
<?php
	$str = "select * from jixiao";
	$arr = mysql_query($str);
	while ($result = mysql_fetch_array($arr)){
		echo "<option value='".$result['id']."'>".$result['jibie']."</option>";
	}
?>
				</select></td>
			</tr>
			<tr>
				<td><font color='red'>*</font>入职时间：</td>
				<td><input type="date" name="txt_ruzhishijian" /></td>
				<td><font color='red'>*</font>签约时间：</td>
				<td><input type="date" name="txt_qianyueshijian" /></td>
				<td><font color='red'>*</font>合同编号：</td>
				<td><select name="txt_hetongbianhao" >
<?php
	$str = "select * from hetong";
	$arr = mysql_query($str);
	while ($result = mysql_fetch_array($arr)){
		echo "<option value='".$result['id']."'>".$result['bianhao']."</option>";
	}
?>
				</select></td>
			</tr>
			<tr>
				<td colspan="6" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="取消" onclick="window.location.href='index.html';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
