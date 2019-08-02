
<?php
	if($_POST){
		$_POST = array_map("htmlspecialchars",$_POST);
		$_POST = array_map("trim",$_POST);
		$_GET = array_map("htmlspecialchars",$_GET);
		$_GET = array_map("trim",$_GET);
		
		$phone = $_POST["phone"];
		$studentid = $_POST["studentid"];
		extract($_POST);
		$date = date("Y-m-d H:i:s");
		$ip = $_SERVER["REMOTE_ADDR"];
		$browser = $_SERVER["HTTP_USER_AGENT"];
		
		
		if($phone=="Phone Number"){
			echo 3;
			exit();
		}
		elseif(strlen($phone)==10){
				$phone = "+90".$phone;
			}
			elseif(strlen($phone)==11){
				$phone = "+9".$phone;
			}
			elseif(strlen($phone)==12){
				$phone = "+".$phone;
				
			}elseif(strlen($phone)==13){
				
			}else{
				echo 3;
				exit();
			}
			
			if($studentid=="Student Id"){
			echo 4;
			exit();
		}
		elseif(strlen($studentid)!=8){
				echo 4;
				exit();
		}
		
		
		require_once("sql.php");
		$sor = $db->query("SELECT * FROM numbers WHERE number='$phone' && ok='0'");
		$al = $sor->num_rows;
		
		if($al>0){
			
			
			$get=$db->query("INSERT INTO vote VALUES(NULL,'$phone','$studentid','$p1','$p2','$p3','$p4','$p5','$p6','$p7',
			'$s1','$s2','$s3','$s4','$s5','$s6','$s7',
			'$c1','$c2','$c3','$c4','$c5','$c6','$c7',
			'$pr1','$pr2','$pr3','$pr4','$pr5','$pr6','$pr7',
			'$cm1','$cm2','$cm3','$cm4','$cm5','$cm6','$cm7','$date','$ip','$browser')");
			
			if($get){
				$guncelle = $db->query("UPDATE numbers SET ok='1' WHERE number='$phone'");
				echo 1;
			}else{
				echo 5;
			}
			
			
			
		}else{
			
			echo 2;
			exit();
		}
		
	}
?>