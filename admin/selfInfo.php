<html>
    <head><title>员工个人基础信息</title></head>
	<link rel="stylesheet" href="../css/style.css" type="text/css" >
    <body style = "margin=0px 0px 0px 0px;">
    <?php
    session_start();
        require_once("../conn/Conn_DB.php");
    	include 'action/session_check.php';
            $id = $_SESSION['user2'];
            $str = "select * from yuangong where id = $id";
            $arr = mysql_query($str);
            $result = mysql_fetch_array($arr);
    ?>
    <table>
    <tr><td colspan="2" align="center" class="tabletitle">个人基础信息</td><tr>
    </table>
    <table align="center" border="0">
        <tr>
            <td>编号：</td>
            <td><?php echo $result["id"];?></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><?php echo $result["xingming"];?></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><?php echo $result["gender"];?></td>
        </tr>
        <tr>
            <td>职位编号：</td>
            <td><?php echo $result["zhiweibianhao"];?></td>
        </tr>
        <tr>
            <td>生日：</td>   
            <td><?php echo $result["birthdate"];?></td> 
        </tr>
        <tr>
            <td>政治面貌：</td>
            <td><?php echo $result["zhengzhimianmao"];?></td>
        </tr>
        <tr>
            <td>民族：</td>
            <td><?php echo $result["minzu"];?></td>
        </tr>
        <tr>
            <td>籍贯：</td>
            <td><?php echo $result["jiguan"];?></td>
        </tr>
        <tr>
            <td>联系地址：</td>
            <td><?php echo $result["lianxidizhi"];?></td>
        </tr>
        <tr>
            <td>学历编号：</td>
            <td><?php echo $result["xuelibianhao"];?></td>
        </tr>
        <tr>
            <td>身份证号：</td>
            <td><?php echo $result["idcard"];?></td>
        </tr>
        <tr>
            <td>联系电话：</td>
            <td><?php echo $result["lianxidianhua"];?></td>
        </tr>
        <tr>
            <td>毕业学校：</td>
            <td><?php echo $result["biyexuexiao"];?></td>
        </tr>
        <tr>
            <td>专业：</td>
            <td><?php echo $result["zhuanye"];?></td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td><?php echo $result["youxiang"];?></td>
        </tr>
        <tr>
            <td>入职时间：</td>
            <td><?php echo $result["ruzhishijian"];?></td>
        </tr>
    </table>
    </body>
</html>
