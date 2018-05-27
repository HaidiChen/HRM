<html>
<head><title>员工个人绩效考核</title></head>
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
    <tr><td colspan="2" align="center" class="tabletitle">个人绩效考核</td><tr>
    </table>
    <table align = "center" border="0">
        <tr>
            <td>主管考评：</td>
            <td><?php echo $result["zhuguan"];?></td>
        </tr>
        <tr>
            <td>自我考评：</td>
            <td><?php echo $result["ziwo"];?></td>
        </tr>
        <tr>
            <td>同事考评：</td>
            <td><?php echo $result["tongshi"];?></td>
        </tr>
        <tr>
            <td>下属考评：</td>
            <td><?php echo $result["xiashu"];?></td>
        </tr>
        <tr>
            <td>总考评：</td>
            <td><?php echo $result["zongping"];?></td>
        </tr>
    </table>
</body>
</html>
