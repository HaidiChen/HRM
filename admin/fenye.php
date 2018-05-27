<?php
function PageOrdered($str, $address){
	$arr = mysql_query($str);
	$num = mysql_num_rows($arr);
	$fnum = 6;
	$pagenum = ceil($num / $fnum);
	$tmp = $_GET['page'];
	if ($tmp > $pagenum){
		echo "<script>window.location.href=".$address."</script>";
	}
	if ($tmp == "")
		$n = 0;
	else
		$n = ($tmp - 1) * $fnum;
	echo "<br />";
	echo "<br />";
	echo "<br />";
	for ($i = 0; $i < $pagenum; $i++){
		echo "<a href=".$address."?page=".($i+1).">".($i + 1)."</a>&nbsp;";
	}
	echo "<br />";
	echo "<br />";
	echo "<br />";
	$param = array($n, $fnum);
	return $param;
}
?>
