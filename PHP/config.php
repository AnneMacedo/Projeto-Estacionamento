<?php
	$connect = @mysql_connect("localhost", "root", "");
	mysql_select_db("estacionamento", $connect);

	function anti_sql($query){
		$sql = mysql_real_escape_string($query);
		return $query;
	}
 ?>