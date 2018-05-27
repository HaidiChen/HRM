<html>
    <head>
    <title>人事管理系统</title>
    <style type = "text/css">
        body{
            background-image: url("../images/login2.jpg");   
            background-repeat: no-repeat;
            margin:0 auto;
            width:100%;
            height:100%;
            position:fixed;
            background-size: cover;
        }   
        .rs{
            width:30px;
            height:30px;
            margin-top:25px;
            padding: 0 15px;
            background:#2d2d2d;
            background:rgba(45,45,45,.45);
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            border-radius:6px;
            border:1px solid #3d3d3d;
            border:1px solid rgba(255,255,255,.15);
            -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            font-family: 'PT Sans', Helvetica, Arial,sans-serif;
            font-size:14px;
            color: #FFFFFF;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }
        input{
            width:270px;
            height:42px;
            margin-top:25px;
            padding: 0 15px;
            background:#2d2d2d;
            background:rgba(45,45,45,.45);
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            border-radius:6px;
            border:1px solid #3d3d3d;
            border:1px solid rgba(255,255,255,.15);
            -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            font-family: 'PT Sans', Helvetica, Arial,sans-serif;
            font-size:26px;
            color: #FFFFFF;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }
    </style>
    </head>
    <body>
	<?php 
		session_start();
		if ($_SESSION['user1'] != "")
			$_SESSION['user1'] = "";
		if ($_SESSION['user2'] != "")
			$_SESSION['user2'] = "";
	?>  
        <form name="login" action="action/login_do.php" method = "post">
            <p style="margin: 50px 0px 0px 640px">
            <font size = "7" ><br/>人事管理系统软件<br/><br/>
            </p>
            <p style="margin: 0px 0px 0px 600px">
            <font size = "5">账号：<input type="text" name="txt_username" id="txt_username"/><br/>
            </p>
            <p style="margin: 0px 0px 0px 600px">
            密码：<input type="password" name="txt_pwd" id="txt_pwd"/><br/>
            </p>
            <p style="margin: 0px 0px 0px 600px">
            身份：<input type="radio" name="identity" value="administrator" class="rs">管理员
                    <input type="radio" name="identity" value="zhiyuan" class = "rs">员工<br/>
            </p>
            <p style="margin: 0px 0px 0px 670px"><input type="submit" value="登录"></p>
        </form>
        
    </body>
</html>
