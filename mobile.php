
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://hacettepe.ueuo.com/style.css">
		<link rel="shortcut icon" type="image/png" href="http://hacettepe.ueuo.com/favicon.png"/>
		<script>
		// ^^ me upsheroes
			window.onload = function(){
				
				if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
						$('form').css("zoom","200%");
					}
				
					$('#a1').css("font-size","16px");
					$('#a1').css("color","#aaa");
					$('#a2').css("font-size","16px");
					$('#a2').css("color","#aaa");
				$('#a1').focusout(function(){
					if($('#a1').val()=="" || $('#a1').val()==" "){
						$('#a1').val("Phone Number");
						$('#a1').css("font-size","16px");
						$('#a1').css("color","#aaa");
					}
						
				});
				$('#a2').focusout(function(){
					if($('#a2').val()=="" || $('#a1').val()==" "){
						$('#a2').val("Student Id");
						$('#a2').css("font-size","16px");
						$('#a2').css("color","#aaa");
					}
					
				});
				$('#a1').focusin(function(){
					if($('#a1').val()=="Phone Number"){
						$('#a1').val("");
					}
					$('#a1').css("font-size","20px");
					$('#a1').css("color","#000");
				});
				$('#a2').focusin(function(){
					if($('#a2').val()=="Student Id"){
						$('#a2').val("");
					}
					$('#a2').css("font-size","20px");
					$('#a2').css("color","#000");
				});
				
					function look(val){
						
						 var allVals = [];
						 $('input.bigcheck:checked').each(function() {
						   allVals.push($(this).val());
						 });
						 
						 
						 var ok=0;
						 
						 
						 for(var i=0;i<allVals.length;i++){
							 if(allVals[i]==val){
								 ok=1;
							 }
						 }
						 
						 if(ok==1){
							 return 1;
						 }else{
							 return 0;
						 }
						
					}
				 
				   
				   $('#send_but').click(function(){
					   var phone = $('#a1').val();
					   var studentid = $('#a2').val();
					    var allVals = [];
						var keep;
						 $('input.bigcheck:checked').each(function() {
						   allVals.push($(this).val());
						 });
						
						data="phone="+phone+"&studentid="+studentid+"&p1="+look("p1")+"&p2="+look("p2")+"&p3="+look("p3")+"&p4="+look("p4")+"&p5="+look("p5")+"&p6="+look("p6")+"&p7="+look("p7")+"&s1="+look("s1")+"&s2="+look("s2")+"&s3="+look("s3")+"&s4="+look("s4")+"&s5="+look("s5")+"&s6="+look("s6")+"&s7="+look("s7")+"&c1="+look("c1")+"&c2="+look("c2")+"&c3="+look("c3")+"&c4="+look("c4")+"&c5="+look("c5")+"&c6="+look("c6")+"&c7="+look("c7")+"&pr1="+look("pr1")+"&pr2="+look("pr2")+"&pr3="+look("pr3")+"&pr4="+look("pr4")+"&pr5="+look("pr5")+"&pr6="+look("pr6")+"&pr7="+look("pr7")+"&cm1="+look("cm2")+"&cm2="+look("cm2")+"&cm3="+look("cm3")+"&cm4="+look("cm4")+"&cm5="+look("cm5")+"&cm6="+look("cm6")+"&cm7="+look("cm7");
						 
						 
					   $.ajax({
						   type:'POST',
						   url:'process.php',
						   data:data,
						   success:function(g){
								if(g==2){
									$('#error1').fadeIn(1200);
									$('#error1').fadeOut(800);
									$('#error1_in').text("This phone is invalid");
								}else if(g==3){
									$('#error1').fadeIn(1200);
									$('#error1').fadeOut(800);
									$('#error1_in').text("Phone format is invalid");
								}else if(g==4){
									$('#error2').fadeIn(1200);
									$('#error2').fadeOut(800);
									$('#error2_in').text("Student id is invalid");
								}
								else if(g==5){
									$('#error1').fadeIn(1200);
									$('#error1').fadeOut(800);
									$('#error1_in').text("There is an unknown error");
								}else if(g==1){
									var src = $('#add').html();
									$('#form_in').html(src);
									$("body").css("background","url(image/gokcek.jpg)");
									setTimeout(function(){
										$("body").css("background","url(image/bg.jpg) no-repeat  center center fixed");
										$("body").css("-webkit-background-size","cover");
										$("body").css("-moz-background-size","cover");
										$("body").css("-o-background-size","cover");
										$("body").css("background-size","cover");
									},200);
								}
								
						   }
					   });
				   });
				
			}
		</script>
		<style>
			#form{
				zoom:268%;
				float:left;
				margin-left:5px;
			}
			#page_in{
				float:left;
			}
		</style>
	</head>
	<body>
		<div id="page">
			<div id="page_in">
				<div id="form">
					<div id="form_in">
					
						<div id="header">
							<div id="header_top">
								<div id="header_top_in">
									<img src="image/acm.png" width="150px">
								</div>
							</div>
							<div id="header_bot">
								<div id="header_bot_in">
									
								</div>
							</div>
						</div>
					
						<div id="area">
							<div id="area_part">
								<div id="area_part_left">
								</div>
								<div id="area_part_right">
									<input type="text" value="Phone Number" id="a1" class="area_but">
									<div id="error1">
										<div id="error1_in">
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div id="area">
							<div id="area_part">
								<div id="area_part_left">
								</div>
								<div id="area_part_right">
									<input type="text" value="Student Id" id="a2" class="area_but">
									<div id="error2">
										<div id="error2_in">
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div id="area2">
						
						
							<div id="area2_line">
								<div id="area2_colm" class="imp"><div></div></div>
								<div id="area2_colm" class="edit"><div>10:00-11:00</div></div>
								<div id="area2_colm" class="edit"><div>11:00-12:00</div></div>
								<div id="area2_colm" class="edit"><div>13:00-14:00</div></div>
								<div id="area2_colm" class="edit"><div>14:00-15:00</div></div>
								<div id="area2_colm" class="edit"><div>15:00-16:00</div></div>
								<div id="area2_colm" class="edit"><div>16:00-17:00</div></div>
								<div id="area2_colm" class="edit"><div>17:00-18:00</div></div>
							</div>
						
							<div id="area2_line">
								<div id="area2_colm" class="imp"><div>Pzrtesi</div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" id='bug' class="bigcheck" name="cheese" value="p1" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="p2" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="p3" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="p4" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="p5" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="p6" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="p7" /> <span class="bigcheck-target"></span> </label></span></div></div>
							</div>
						
							<div id="area2_line">
								<div id="area2_colm" class="imp"><div>Salı</div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s1" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s2" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s3" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s4" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s5" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s6" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="s7" /> <span class="bigcheck-target"></span> </label></span></div></div>
							</div>
						
							<div id="area2_line">
								<div id="area2_colm" class="imp"><div>Çarş</div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c1" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c2" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c3" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c4" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c5" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c6" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="c7" /> <span class="bigcheck-target"></span> </label></span></div></div>
							</div>
						
							<div id="area2_line">
								<div id="area2_colm" class="imp"><div>Perş</div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr1" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr2" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr3" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr4" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr5" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr6" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="pr7" /> <span class="bigcheck-target"></span> </label></span></div></div>
							</div>
							
						
							<div id="area2_line">
								<div id="area2_colm" class="imp"><div>Cuma</div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm1" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm2" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm3" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm4" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm5" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm6" /> <span class="bigcheck-target"></span> </label></span></div></div>
								<div id="area2_colm"><div><span class="bigcheck"><label class="bigcheck"><input type="checkbox" class="bigcheck" name="cheese" value="cm7" /> <span class="bigcheck-target"></span> </label></span></div></div>
							</div>
						</div>
						
						<div id="send">
							<div id="send_in">
								<div id="send_but">
									<div id="send_but_in">
										UYGUN SAATLERİ SEÇTİM VE ONAYLIYORUM
									</div>
								</div>
							</div>
						</div>
						
						<div id="t">
						
						</div>
						
					</div>
					<div id="sign1">
						<div id="sign_in">
						
						</div>
					</div>
					<div id="sign2">
						<div id="sign_in">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="add">
			<div id="add_in">
				<div id="add_top">
					<div id="add_top_in">
						<img src="image/tick.png" id="gokcek">
					</div>
				</div>
				<div id="add_bot">
					<div id="add_bot_in">
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>