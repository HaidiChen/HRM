<html>
	<head>
		<title>
			人事管理系统
		</title>
	<link href='../css/style.css' rel="stylesheet" type='text/css' >
	</head>
	<body>
		<?php  include 'action/session_check.php';	?>
		<table style="width:100%">
			<tr class="myfont">
				<td width="200px" valign="center" align="center">
					<a href="admin_add.php" target="mainframe" class="text">添加管理员</a><br />
					<a href="admin_manager.php?page=1" target="mainframe" class="text" >管理员管理</a><br />
					<br />
					<a href="zhiweitype_add.php" target="mainframe" class="text" >添加职位</a><br />
					<a href="zhiweitype_manager.php?page=1" target="mainframe" class="text">职位管理</a><br />
					<br />
					<a href="zhiyuan_add.php" target="mainframe" class="text" >添加职员信息</a><br />
					<a href="zhiyuan_manager.php?page=1" target="mainframe" class="text" >职员信息管理</a><br />
					<br />
					<a href="jixiao_add.php" target="mainframe" class="text" >添加绩效级别</a><br />
					<a href="jixiao_manager.php?page=1" target="mainframe" class="text">绩效级别管理</a><br />
					<br />
					<a href="kaohe_add.php" target="mainframe" class="text">绩效考核</a><br />
					<a href="kaohe_manager.php?page=1" target="mainframe" class="text">历史绩效考核</a><br />
					<br />
					<a href="xueli_add.php" target="mainframe" class="text" >新增学历补贴</a><br />
					<a href="xueli_manager.php?page=1" target="mainframe" class="text">学历补贴管理</a><br />
					<br />
					<a href="jiben_add.php" target="mainframe" class="text" >添加基本工资</a><br />
					<a href="jiben_manager.php?page=1" target="mainframe" class="text">基本工资管理</a><br />
					<br />
					<a href="hetong_add.php" target="mainframe" class="text">添加合同项目</a><br />
					<a href="hetong_manager.php?page=1" target="mainframe" class="text">合同项目管理</a><br />
					<br />
					<a href="laodong_manager.php?page=1" target="mainframe" class="text">劳动关系管理</a><br />
					<br />
					<a href="login.php" class="zhuyetext">退出登录</td>
				</td>
				<td>
					<iframe name="mainframe" style="width:100%; height:575px;background-image:url('../images/bg3.jpg')" src="cover.html">
					</iframe>
				</td>
			</tr>
		</table>
	</body>
</html>
