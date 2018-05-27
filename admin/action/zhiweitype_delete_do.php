<?php 
	require_once("../../conn/Conn_DB.php");
	if ($_GET['id'] != ""){
		$id = $_GET['id'];
		$str = "select * from zhiwei where shangjiid = ".$id;
		$arr = mysql_query($str);
		if (mysql_num_rows($arr) > 0){
			echo "<script>
				alert('该职位有下属职位，请先删除下属职位');
				window.location.href='../zhiweitype_manager.php';
			</script>";
		}
		else {
			$str = "delete from zhiwei where id =".$id;
			$delete = mysql_query($str);
			if ($delete){
				echo "<script>
					alert('职位删除成功');
					window.location.href='../zhiweitype_manager.php';
				</script>";
			}			
			else {
				echo "<script>
					alert('职位删除失败');
					window.location.href='../zhiweitype_manager.php';
				</script>";
			}
		}
	}
	else {
		echo "<script>
			alert('请选择要删除的职位');
			window.location.href='../zhiweitype_manager.php';
		</script>";
	}
?>
