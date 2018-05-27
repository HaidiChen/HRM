<html>
<head><title>人事管理系统——员工平台</title></head>
<link rel="stylesheet" href="../css/style.css" type="text/css" >
<?php include 'action/session_check.php'; ?>
    <body style = "margin:0px 0px 0px 0px">
    <table border = "10" style = "width=100%" >
    <tr><td colspan = "2" align="center"><font size = "6" color="yellow">人事管理系统软件——员工平台</td></tr>
    <tr><td align="center" width="200px" valign = "top">
        <br/><a href = "selfInfo.php" target = "mainframe">个人信息查询</a><br/><br/>
        <a href = "selfPerformance.php" target = "mainframe">个人绩效查询</a><br/><br/>
        <a href = "selfSalary.php" target = "mainframe">个人薪酬查询</a><br/><br/>
        <a href = "login.php" class="zhuyetext" >退出登录</a><br/><br/>
    </td>
    <td>
    <iframe name = "mainframe" style = "width:100%; height:350%"></iframe><!--iframe框架-->
    </td></tr> 
    </table>
    </body>
</html>
