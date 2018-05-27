<html>

<head>
	<title>
		职员详细信息
	</title>
</head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<body style="margin:0px 0px 0px 0px;">
	<?php include 'action/session_check.php';
		require_once("../conn/Conn_DB.php");	
		$str = "select * from yuangong where id = ".$_GET['id'];
		$arr = mysql_query($str);
		$result = mysql_fetch_array($arr);
		$str2 = "select * from zhiwei where id = ".$result['zhiweibianhao'];
		$arr2 = mysql_query($str2);
		$zhiwei = mysql_fetch_array($arr2);
		$str3 = "select * from jixiao where id = ".$result['jixiaogongzibianhao'];
		$arr3 = mysql_query($str3);
		$jixiao = mysql_fetch_array($arr3);
		$str4 = "select * from hetong where id = ".$result['hetongbianhao'];
		$arr4 = mysql_query($str4);
		$hetong = mysql_fetch_array($arr4);
		$str5 = "select * from jiben where id = ".$result['jibengongzibianhao'];
		$arr5 = mysql_query($str5);
		$jiben = mysql_fetch_array($arr5);
		$str6 = "select * from xueli where id = ".$result['xuelibianhao'];
		$arr6 = mysql_query($str6);
		$xueli = mysql_fetch_array($arr6);
	 ?>
	<form action="zhiyuan_update.php" method="post">
		<table class="add" >
			<tr>
				<td colspan="6" align="center" class="tabletitle">
					职员信息一览表	
				</td>
			</tr>
			<tr>
				<td>职位：</td>
				<td>
					<?php echo $zhiwei['name']; ?>
				</td>
				<td>姓名：</td>
				<td><?php echo $result['xingming']; ?></td>
			</tr>
			<tr>
				<td>性别：</td>
				<td><?php echo $result['gender']; ?></td>
				<td>民族：</td>
				<td><?php echo $result['minzu']; ?></td>
			</tr>
			<tr>
				<td>出生日期：</td>
				<td>
				<?php echo $result['birthdate']; ?>
				</td>
				<td>政治面貌：</td>
				<td>
				<?php echo $result['zhengzhimianmao']; ?>
				</td>
			</tr>
			<tr>
				<td>籍贯：</td>
				<td><?php echo $result['jiguan'];?></td>
			</tr>
			<tr>
				<td>身份证号：</td>
				<td><?php echo $result['idcard']; ?></td>
				<td>邮箱：</td>
				<td><?php echo $result['youxiang']; ?></td>
				<td>邮编：</td>
				<td><?php echo $result['youbian']; ?></td>
			</tr>
			<tr>
				<td>联系地址：</td>
				<td><?php echo $result['lianxidizhi']; ?></td>
			</tr>
			<tr>
				<td>毕业学校：</td>
				<td><?php echo $result['biyexuexiao']; ?></td>
				<td>专业：</td>
				<td><?php echo $result['zhuanye']; ?></td>
				<td>学历：</td>
				<td>
				<?php echo $xueli['xueli']; ?>
				</td>
			</tr>
			<tr>
				<td>联系电话：</td>
				<td><?php echo $result['lianxidianhua']; ?></td>
				<td>职位状态：</td>
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
				<td>绩效级别：</td>
				<td><?php echo $jixiao['jibie']; ?></td>
			</tr>
			<tr>
				<td>入职时间：</td>
				<td><?php echo $result['ruzhishijian']; ?></td>
				<td>签约时间：</td>
				<td><?php echo $result['qianyueshijian']; ?></td>
				<td>合同编号：</td>
				<td>
				<?php echo $result['hetongbianhao']; ?>
				</td>
			</tr>
			<tr>
				<td>绩效工资：</td>
				<td><?php echo $jixiao['gongzi']; ?></td>
				<td>基本工资：</td>
				<td><?php echo $jiben['gongzi']; ?></td>
				<td>职位工资：</td>
				<td>
				<?php echo $zhiwei['gongzi']; ?>
				</td>
			</tr>
			<tr>
				<td>合同有效期：</td>
				<td><?php echo $hetong['youxiaoqi']; ?></td>
				<td>学历补贴：</td>
				<td><?php echo $xueli['butie']; ?></td>
				<td>工龄补贴：</td>
				<td>
				<?php echo $jiben['butie']; ?>
				</td>
			</tr>
			<tr>
			<input type="hidden" name="id" value="<?php echo $result['id'];?>" />
				<td colspan="6" align="center">
					<input type="submit" value="修改" /> 
					<input type="button" value="返回" onclick="window.location.href='zhiyuan_manager.php';" />
				</td>
			</tr>
		</table>
	</form>
</body>

</html>
