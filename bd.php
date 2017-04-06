<?
	$sqli = new mysqli("localhost", "root", "", "agent-english");
	if($sqli->connect_errno){
		echo "Попытка соеденения не удалась!";
	}
	$sqli->query("SET NAMES 'utf8'");
	$sqli->set_charset("utf-8");
	mb_internal_encoding("utf-8");
?>