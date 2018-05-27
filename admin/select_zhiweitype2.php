<select name="txt_parentid">
	<option value='0'></option>
	<?php

	function GetZhiweiType($parentid){
	global $line;
	global $parentid2;
	$str = "select * from zhiwei where shangjiid=".$parentid;
	$arr = mysql_query($str);
	if ($arr != null){
			while ($result = mysql_fetch_array($arr)){
				echo "<option value='".$result['id']."'".($parentid2 == $result['id'] ? "selected":"").">".$line.$result['name']."</option>";
				$line .= "|___";
				GetZhiweiType($result['id']);
				$line = substr($line, 0, strlen($line)-4);
			}
		}
	}
	
	
	require_once("../conn/Conn_DB.php");
	$line = "|___";
	GetZhiweiType('0');

	?>
</select>
