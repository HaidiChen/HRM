<?php 

class Conn_DB {
	private $host;
	private $username;
	private $password;
	private $dbname;
	private $charset;

	public function Conn_DB($h, $u, $p, $d, $c){
		$this->host = $h;
		$this->username = $u;
		$this->password = $p;
		$this->dbname = $d;
		$this->charset = $c;
	}

	public function getConn(){
		$conn = mysql_connect($this->host, $this->username, $this->password);
		mysql_select_db($this->dbname, $conn);
		mysql_query('set names '.$this->charset);
		mysql_query('set character set '.$this->charset);
		return $conn;
	}
}

$conndb = new Conn_DB("localhost", "root", "", "hrmanagement", "utf8");
$conn = $conndb->getConn();

?>
