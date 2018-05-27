<?php
    require_once("../../conn/Conn_DB.php");
    if ($_POST["txt_username"]!="" && $_POST["txt_pwd"]!=""){
        $id = $_POST["txt_username"];
        $pwd = $_POST["txt_pwd"];
        $identity = $_POST["identity"];
        $str = "select * from yuangong where id= $id and password='$pwd' and shenfen='$identity'";
        $result = mysql_query($str);        
        if(mysql_num_rows($result)>0 && ($identity == "administrator")){
            session_start();
            $_SESSION['user1'] = $_POST['txt_username'];
            echo "<script>window.location.href='../manager.php';</script>";
            
        }else if(mysql_num_rows($result)>0 && ($identity == "zhiyuan")){   
            session_start();
            $_SESSION['user2'] = $_POST['txt_username'];
            echo "<script>window.location.href='../employee.php';</script>";
            
        }else{
            echo "<script>alert('账号或密码错误！');window.location.href='../login.php'</script>";
        }
    }else{
        echo "<script>alert('请输入账号和密码！');window.location.href='../login.php'</script>";
    }
?>
