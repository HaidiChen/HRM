<html>

<head>
	<title>
		职员信息修改
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php';
		require_once('../conn/Conn_DB.php');
		if ($_POST['id'] != "")
			$_SESSION['zhiyuanupdateid'] = $_POST['id'];
		$str = "select * from yuangong where id = ".$_SESSION['zhiyuanupdateid'];
		$arr = mysql_query($str);
		$result = mysql_fetch_array($arr);
		$str2 = "select * from zhiwei where id = ".$result['zhiweibianhao'];
		$arr2 = mysql_query($str2);
		$zhiwei = mysql_fetch_array($arr2);
	?>
	<form action="action/zhiyuan_update_do.php" method="post">
		<table class="add" >
			<tr>
				<td colspan="6" align="center" class="tabletitle">
					职员基本信息修改	
				</td>
			</tr>
			<tr>
				<td><font color='red'>*</font>职位：</td>
				<td colspan="3"><?php echo $zhiwei['name']; ?></td>
				<td><font color='red'>*</font>姓名：</td>
				<td><input type="text" name="txt_name" value="<?php echo $result['xingming']; ?>" /></td>
			</tr>
			<tr>
				<td>性别：</td>
				<td colspan="3">
<?php
		if ($result['gender'] == "男"){
			echo "<input type='radio' name='txt_gender' value='男' checked='true' />男";
			echo "<input type='radio' name='txt_gender' value='女' />女";
		}
		else{
			echo "<input type='radio' name='txt_gender' value='女' checked='true' />女";
			echo "<input type='radio' name='txt_gender' value='男' />男";
		}
?>
				</td>
				<td>民族：</td>
				<td><input type="text" name="txt_minzu" value="<?php echo $result['minzu']; ?>" /></td>
			</tr>
			<tr>
				<td>出生日期：</td>
				<td colspan="3">
				<input type="date" name="txt_birthdate" value="<?php echo $result['birthdate']; ?>" />
				</td>
				<td>政治面貌：</td>
				<td>
				<input type="text" name="txt_mianmao" value="<?php echo $result['zhengzhimianmao']; ?>" />
				</td>
			</tr>
			<tr>
				<td>籍贯：</td>
				<td colspan="5"><textarea cols="65" rows="1" name="txt_jiguan"><?php echo $result['jiguan']; ?></textarea></td>
			</tr>
			<tr>
				<td>身份证号：</td>
				<td><input type="text" name="txt_idcard" value="<?php echo $result['idcard']; ?>" /></td>
				<td>邮箱：</td>
				<td><input type="text" name="txt_youxiang" value="<?php echo $result['youxiang']; ?>" /></td>
				<td>邮编：</td>
				<td><input type="text" name="txt_youbian" value="<?php echo $result['youbian']; ?>" /></td>
			</tr>
			<tr>
				<td>联系地址：</td>
				<td colspan="5"><textarea cols="65" rows="1" name="txt_dizhi" ><?php echo $result['lianxidizhi']; ?></textarea></td>
			</tr>
			<tr>
				<td>毕业学校：</td>
				<td><input type="text" name="txt_xuexiao" value="<?php echo $result['biyexuexiao']; ?>" /></td>
				<td>专业：</td>
				<td><input type="text" name="txt_zhuanye" value="<?php echo $result['zhuanye']; ?>"/></td>
				<td><font color='red'>*</font>学历：</td>
				<td>
<?php
	$str3 = "select * from xueli where id = ".$result['xuelibianhao'];
	$arr3 = mysql_query($str3);
	while ($result3 = mysql_fetch_array($arr3)){
		echo $result3['xueli'];
	}
?>
				</td>
			</tr>
			<tr>
				<td>联系电话：</td>
				<td><input type="text" name="txt_dianhua" value="<?php echo $result['lianxidianhua']; ?>" /></td>
				<td><font color='red'>*</font>职位状态：</td>
				<td>
<?php
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
?>
				</td>
				<td><font color='red'>*</font>绩效级别：</td>
				<td>
<?php
	$str4 = "select * from jixiao where id = ".$result['jixiaogongzibianhao'];
	$arr4 = mysql_query($str4);
	while ($result4 = mysql_fetch_array($arr4)){
		echo $result4['jibie']; 
	}
?>
				</td>
			</tr>
			<tr>
				<td><font color='red'>*</font>入职时间：</td>
				<td><?php echo $result['ruzhishijian'] ?></td>
				<td><font color='red'>*</font>签约时间：</td>
				<td><?php echo $result['qianyueshijian']; ?></td>
				<td><font color='red'>*</font>合同编号：</td>
				<td><?php echo $result['hetongbianhao'] ?></td>
			</tr>
			<tr>
			<input type="hidden" name="id" value="<?php echo $result['id']; ?>" />
				<td colspan="6" align="center">
					<input type="submit" value="保存" />
					<input type="button" value="取消" onclick="window.location.href='cover.html';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
