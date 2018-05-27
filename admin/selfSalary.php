<html>
<head><title>员工个人薪酬查询</title></head>
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
            $str_jiben = "select * from jiben where id = (select jibengongzibianhao from yuangong where id = $id)";
            $arr_jiben = mysql_query($str_jiben);
            $result_jiben = mysql_fetch_array($arr_jiben);
            $str_jixiao = "select * from jixiao where id = (select jixiaogongzibianhao from yuangong where id = $id)";
            $arr_jixiao = mysql_query($str_jixiao);
            $result_jixiao = mysql_fetch_array($arr_jixiao);
            $str_zhiwei = "select * from zhiwei where id = (select zhiweibianhao from yuangong where id = $id)";
            $arr_zhiwei = mysql_query($str_zhiwei);
            $result_zhiwei = mysql_fetch_array($arr_zhiwei);
            $str_xueli = "select * from xueli where id = (select xuelibianhao from yuangong where id = $id)";
            $arr_xueli = mysql_query($str_xueli);
            $result_xueli = mysql_fetch_array($arr_xueli);
    ?>
    <table>
    <tr><td colspan="2" align="center" class="tabletitle">个人薪酬查询</td><tr>
    </table>
    <table align = "center" border="0">
        <tr>
            <td>基本工资：</td>
            <td><?php echo $result_jiben["gongzi"];?></td>
        </tr>
        <tr>
            <td>职位工资：</td>
            <td><?php echo $result_zhiwei["gongzi"];?></td>
        </tr>
        <tr>
            <td>绩效工资：</td>
            <td><?php echo $result_jixiao["gongzi"];?></td>
        </tr>
        <tr>
            <td>补贴：</td>
            <td><?php echo $result_jiben["butie"] + $result_xueli["butie"];?></td>
        </tr>
        <tr>
            <td>总工资：</td>
            <td><?php echo $result_jiben["gongzi"] + $result_zhiwei["gongzi"] + 
                        $result_jixiao["gongzi"]  + $result_jiben["butie"] + $result_xueli["butie"];?></td>
        </tr>
    </table>
</body>
</html>
