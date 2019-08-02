
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://hacettepe.ueuo.com/style2.css">
		<link rel="shortcut icon" type="image/png" href="http://hacettepe.ueuo.com/favicon.png"/>
	</head>
	<body>
		<?php
			$db = new mysqli("localhost","1122287","pass12026","1122287");
			
			$sor = $db->query("SELECT * FROM vote");
			$say = $sor->num_rows;
			
			$katilim = floor(($say/98)*100);
			$genislik = floor((810/100)*$katilim);
			
			$p1 = $db->query("SELECT * FROM vote WHERE p1='1'");
			$p1_say = $p1->num_rows;
			
			$p2 = $db->query("SELECT * FROM vote WHERE p2='1'");
			$p2_say = $p2->num_rows;
			
			$p3 = $db->query("SELECT * FROM vote WHERE p3='1'");
			$p3_say = $p3->num_rows;
			
			$p4 = $db->query("SELECT * FROM vote WHERE p4='1'");
			$p4_say = $p4->num_rows;
			
			$p5 = $db->query("SELECT * FROM vote WHERE p5='1'");
			$p5_say = $p5->num_rows;
			
			$p6 = $db->query("SELECT * FROM vote WHERE p6='1'");
			$p6_say = $p6->num_rows;
			
			$p7 = $db->query("SELECT * FROM vote WHERE p7='1'");
			$p7_say = $p7->num_rows;
			
			$s1 = $db->query("SELECT * FROM vote WHERE s1='1'");
			$s1_say = $s1->num_rows;
			
			$s2 = $db->query("SELECT * FROM vote WHERE s2='1'");
			$s2_say = $s2->num_rows;
			
			$s3 = $db->query("SELECT * FROM vote WHERE s3='1'");
			$s3_say = $s3->num_rows;
			
			$s4 = $db->query("SELECT * FROM vote WHERE s4='1'");
			$s4_say = $s4->num_rows;
			
			$s5 = $db->query("SELECT * FROM vote WHERE s5='1'");
			$s5_say = $s5->num_rows;
			
			$s6 = $db->query("SELECT * FROM vote WHERE s6='1'");
			$s6_say = $s6->num_rows;
			
			$s7 = $db->query("SELECT * FROM vote WHERE s7='1'");
			$s7_say = $s7->num_rows;
			
			$c1 = $db->query("SELECT * FROM vote WHERE c1='1'");
			$c1_say = $c1->num_rows;
			
			$c2 = $db->query("SELECT * FROM vote WHERE c2='1'");
			$c2_say = $c2->num_rows;
			
			$c3 = $db->query("SELECT * FROM vote WHERE c3='1'");
			$c3_say = $c3->num_rows;
			
			$c4 = $db->query("SELECT * FROM vote WHERE c4='1'");
			$c4_say = $c4->num_rows;
			
			$c5 = $db->query("SELECT * FROM vote WHERE c5='1'");
			$c5_say = $c5->num_rows;
			
			$c6 = $db->query("SELECT * FROM vote WHERE c6='1'");
			$c6_say = $c6->num_rows;
			
			$c7 = $db->query("SELECT * FROM vote WHERE c7='1'");
			$c7_say = $c7->num_rows;
			
			$pr1 = $db->query("SELECT * FROM vote WHERE pr1='1'");
			$pr1_say = $pr1->num_rows;
			
			$pr2 = $db->query("SELECT * FROM vote WHERE pr2='1'");
			$pr2_say = $pr2->num_rows;
			
			$pr3 = $db->query("SELECT * FROM vote WHERE pr3='1'");
			$pr3_say = $pr3->num_rows;
			
			$pr4 = $db->query("SELECT * FROM vote WHERE pr4='1'");
			$pr4_say = $pr4->num_rows;
			
			$pr5 = $db->query("SELECT * FROM vote WHERE pr5='1'");
			$pr5_say = $pr5->num_rows;
			
			$pr6 = $db->query("SELECT * FROM vote WHERE pr6='1'");
			$pr6_say = $pr6->num_rows;
			
			$pr7 = $db->query("SELECT * FROM vote WHERE pr7='1'");
			$pr7_say = $pr7->num_rows;
			
			
			$cm1 = $db->query("SELECT * FROM vote WHERE cm1='1'");
			$cm1_say = $cm1->num_rows;
			
			$cm2 = $db->query("SELECT * FROM vote WHERE cm2='1'");
			$cm2_say = $cm2->num_rows;
			
			$cm3 = $db->query("SELECT * FROM vote WHERE cm3='1'");
			$cm3_say = $cm3->num_rows;
			
			$cm4 = $db->query("SELECT * FROM vote WHERE cm4='1'");
			$cm4_say = $cm4->num_rows;
			
			$cm5 = $db->query("SELECT * FROM vote WHERE cm5='1'");
			$cm5_say = $cm5->num_rows;
			
			$cm6 = $db->query("SELECT * FROM vote WHERE cm6='1'");
			$cm6_say = $cm6->num_rows;
			
			$cm7 = $db->query("SELECT * FROM vote WHERE cm7='1'");
			$cm7_say = $cm7->num_rows;
			
			function hesapla($x){
				
				$db = new mysqli("localhost","1122287","pass12026","1122287");
				$sor = $db->query("SELECT * FROM vote");
				$say = $sor->num_rows;
			
				if($say==0){
					echo "% 0";
				}else{
					$a = 100/$say;
					echo "% ".floor($x*$a);
				}
			}
			
		?>
		<div id="page">
			<div id="page_in">
			
				<div id="total">
					<div id="total_in" style="width:<?php echo $genislik ?>px">
						<div id="total_in_in">
							%<?php echo $katilim ?>
						</div>
					</div>
				</div>
			
				<div id="page_line" class="first">
					<div id="page_colm">
						<div id="page_colm_in"></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">10:00-11:00</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">11:00-12:00</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">14:00-15:00</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">15:00-16:00</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">16:00-17:00</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">17:00-17:30</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in">17:30-18:00</div>
					</div>
				</div>
				
			
				<div id="page_line">
				<div id="page_colm">
						<div id="page_colm_in">Pzrtesi</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p1_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p2_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p3_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p4_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p5_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p6_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($p7_say)?></div>
					</div>
				</div>
				
			
				<div id="page_line">
				<div id="page_colm">
						<div id="page_colm_in">Salı</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s1_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s2_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s3_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s4_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s5_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s6_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($s7_say)?></div>
					</div>
				</div>
				
			
				<div id="page_line">
				<div id="page_colm">
						<div id="page_colm_in">Çarş</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c1_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c2_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c3_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c4_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c5_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c6_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($c7_say)?></div>
					</div>
				</div>
				
			
				<div id="page_line">
				<div id="page_colm">
						<div id="page_colm_in">Perş</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr1_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr2_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr3_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr4_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr5_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr6_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($pr7_say)?></div>
					</div>
				</div>
				
			
				<div id="page_line">
				<div id="page_colm">
						<div id="page_colm_in">Cuma</div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm1_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm2_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm3_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm4_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm5_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm6_say)?></div>
					</div>
					<div id="page_colm">
						<div id="page_colm_in"><?php hesapla($cm7_say)?></div>
					</div>
				</div>
				
				
			</div>
		</div>
	</body>
</html>