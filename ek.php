<?php
	$sql = new mysqli("localhost","1122287","pass12026","1122287");
	
	$data = file("numbers.txt");
	
	$data2 = explode("+",$data[0]);
	
	foreach($data2 as $a){
		$a="+".trim($a);
		$sql->query("INSERT INTO numbers VALUES(NULL,'$a','0')");
	}
	
?>