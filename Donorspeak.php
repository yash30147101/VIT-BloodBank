<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title>VIT Blood Bank - Donate blood & save a life in time!</title> 
  <meta Name=" " Content="Every 2 seconds, someone needs blood in India. When you donate blood, you save a life in time. Be a donor on BharatBloodbank.com. Register today!">
  <script type='text/javascript' src='donors.js'></script>
  <link rel="stylesheet" href="bbb-styles.css">
 </head>
 <body>
  
 <div class="left" ><ul id="menu" ><li ><a href="Registerfree.html">Register Free</a></li><li ><a href="Whydonotblood.html">Why Donate Blood?</a></li><li ><a href="Whoneedsblood.html">Who Needs Blood?</a></li><li ><li ><a href="Contactus.html">Contact Us</a></li><li ><a href="Recipientlogin.html">Recipient Login</a></li><li ><a href="Employeelogin.html">Employee Login</a></li></ul></div><br clear="all"><div style="height:8px"></div>
<div class="left" style="width:563px;">
	<div class="left"></div><div class="clear"></div>
	<div class="left" style="width:561px;border:1px solid #D7D7D7;border-top:0px;border-bottom:0px;">
		<div class="left" style="width:561px;">
			<div style="background: url(images/div-spheadbg-crv.gif) no-repeat; width:561px; height:50px;"><p style="padding-top:10px;padding-left:15px;"><font class="headtxt">Share Your Experience</font></p></div>
			<div class="left" style="width:10px;"></div>
			
			<div class="left" style="width:541px;">
		
					<div style="padding:20px;">

					<?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="shareyourexp";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Name,Experience FROM $tbl_name" ;
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){

                			echo "<div>".$row['Experience']."</div><div align='right' class='boldtxt' style='padding:18px 0px 10px 0px;'>".$row['Name']."</div><div class='dotline'><img src='trans.gif' width='1' height='1' border='0' alt=''></div>";
                			}
			?>
								
					<!-- <p>We at BharatBloodBank.com would like to hear your experiences. Tell us what you think of this service, is it useful, how did you go about finding donors, would others too benefit from a service like this and so on. We are sure your experiences will be a guiding spirit to our future endeavors.</p> -->
					
					<div>I have donated blood more than seven times and have'nt had any problems due to donation.</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Sreekanth C</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>

					<div style="padding-top:10px;">I have donated blood on many occasions and believe me while donating I always feel pride from inside, a feeling of saving someone's life is beyond anything else. We all should experiance such feelings in life..........</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Manish Bhartia</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">I brought awareness of blood donation among my friends and made two others regular donors and they felt very happy participating in social activities. I think more publicity is required in rural areas to bring awareness among the donors.</div><br /><div style="padding-top:10px;">My experience has been Nice.</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Anil Reddy</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>

					<div style="padding-top:10px;">I am a regular donor who normally  donates blood  on the occasion of  my birthday or my daughter's birthday, else on demand.  I am so happy that I have done a good job through net by registering on BharatBloodBank.com</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Muralidhar</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">I donated blood to a needy patient undergoing open heart surgery at GKNM Hospital, Coimbatore. I am happy to be associated with BharatBloodBank   and thank them for giving me this opportunity. </div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Dr. S. Rajesh</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>

					<div style="padding-top:10px;">I am not a regular donor. But with switch over of job  which makes me travel every day a minimum of 40 to 50 kms within the city made me realise the value of human beings every day struggle with life, ill health etc. I realised how we healthy  men and women never think of blood donation. </div><br /><div style="padding-top:10px;">But now I have become a regular donor and after giving blood I never felt ill or went to a doctor with any complaint.</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">S Kumar</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">I have been donating blood to the needy as and when it comes to my knowledge. I have donated blood to my friends, their parents, my co-employees and to unknown persons while attending in any hospital or nursing home. I feel proud to do so.</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Rajul Parikh</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>

					<div style="padding-top:10px;">I started donating blood while I was studying. My teacher Smt. Renukamba was the source of encouragement. A Rotary blood camp was organised in our campus. I went there out of curiosity. Many refused to donate but my teacher did'nt. That inspired me and it also became my first blood donation. Since then I  have donated at least 8 times which is at least twice a year.</div><br /><div style="padding-top:10px;">I am healthy. Don't get worried after or before donating. You are saving a life with your blood</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">B S Narahari</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">I have donated blood many times. Once Idonated blood to a person at a government hospital. The person who needed blood had many relatives around who were not ready to donate blood. In fact, they were not aware of  blood donation which is not a very good sign.</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Raja</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">I donated blood for the first time to my father, when I realised how much important it is to man kind.</div><br /><div style="padding-top:10px;">I would  like to donate blood to the needy</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Manigandan</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">I have donated so far 9 times. I wish to donate until 55 years.......<br />Donate heartfully and save life...u can...</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Kiran</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<div style="padding-top:10px;">Just  today morning I donated blood to a Bi-Pass Surgery Patient....Patient is from Orissa..New to Andhra Pradesh...</div><br /><div style="padding-top:10px;">Ealier also I have donated blood once in 2003. I am feeling proud having participated in such activities. Never miss an OPPORTUNITY to HELP OTHERS</div><div align="right" class="boldtxt" style="padding:18px 0px 10px 0px;">Kiran</div><div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>
					
					<!-- <br>
					<form name="share" method="POST" action="share-experience.php" onSubmit="return shareexp();" style="margin:0px;">
						<div class="left" style="width:200px;padding-bottom:10px;">Name :</div><div class="left"><input type="text" name="name" class="textbox"></div><br clear="all">
						<div class="left" style="width:200px;padding-bottom:10px;">E-mail id :</div><div class="left"><input type="text" name="email" class="textbox"></div><br clear="all">
						<div class="left" style="width:200px;">Your experience :</div><div class="left"><textarea cols="50" rows="3" name="experience" class="textbox"></textarea></div><br clear="all">
						<div class="left" style="padding: 10px 0px 0px 200px;"><input type="hidden" name="send" value="1"><input type="image" src="images/submit-button.gif" name="submit" value="Submit"></div>

					</form> -->
					   	
					</div>
			</div>
			
			<div class="left" style="width:10px;"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="left"></div><div class="clear"></div>
</div>

 <!--{ Right Panel -->
<div class="left" style="width:8px;"></div>
 <div class="left">
 <form name="sfrm"  method="post" style="margin:0px;" action="newsearchresults.php" onsubmit="return iFormCheck();">
	<div style="background: url(images/right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(images/right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<div style="padding: 10px 15px 0px 15px">			
				<font class="headtxt">Find a Donor</font>
				
				<div   style="padding-top:10px;"><B>City :</B><br>
				<div id="city2">
				<select name="city2" id="city2"  style="width:165px;" class="textbox">
				<!-- onchange="return FormTown();" -->
					<option value="" selected> --- Select City ---</option>
					<option value="Chennai" > Chennai			
									</select></div></div>

				<div   style="padding-top:10px;"><B>Area :</B><br>
				<div id="area2">
				<select   id="town2" NAME="town2"  style="width:165px;" class="textbox">
					<option value="" selected> --- Select Area ---</option>
					<option value="Mambakkam" > Mambakkam		<option value="Kandigai" > Kandigai	     <option value="Kelambakkam" > Kelambakkam	     <option value="Chrompet" >     Chrompet	    <option value="Moolacheri" > Moolacheri         <option value="Tambaram" > Tambaram	     <option value="Kovalam" > 	Kovalam		<option value="Thiruvidanhai" > Thiruvidanhai		 	
							                 <option value="6483" > 	                   				</select></div></div>

				<div style="padding-top:10px;"><B>Group :</B><br>
				<select name="bloodgroup2" value="" style="width:165px;" class="textbox">
					<option value="" selected> --- Select Group ---</option>
							<option value="A1+" > A1+			<option value="A1-" > A1-			<option value="A2+" > A2+			<option value="A2-" > A2-			<option value="B+" > B+			<option value="B-" > B-			<option value="A1B+" > A1B+			<option value="A1B-" > A1B-			<option value="A2B+" > A2B+			<option value="A2B-" > A2B-			<option value="AB+" > AB+			<option value="AB-" > AB-			<option value="O+" > O+			<option value="O-" > O-			<option value="A+" > A+			<option value="A-" > A-					</select></div>

				<div class="right" style="padding-top:10px;">
				<input type="hidden" name="search">
		
				<input type="image" src="search-button.gif" width="55" height="21" border="0" alt=""  ></div><br clear="all"><br>
			</div>
		</div></form>
	 </div>
	   <div style="height:8px"></div>
	 <div style="background: url(images/right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(images/right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<div style="padding: 10px 13px 0px 13px">
				<div  style="padding: 10px 3px;border-bottom: 1px solid #fff;"><a href="Donorlogin.html" class="headtxt1">Donor Login</a></div>

				<div  style="padding: 10px 3px;border-top: 1px solid #D2D2D2;border-bottom: 1px solid #fff;"><a href="Donorspeak.php" class="headtxt1">Donors' Speak</a></div>
				
				<div  style="padding: 10px 3px;border-top: 1px solid #D2D2D2;border-bottom: 1px solid #fff;"><a href="Bloodfacts.html" class="headtxt1">Blood Facts</a></div>

				<div  style="padding: 10px 0px;border-top: 1px solid #D2D2D2;"><a href="Tipsonblooddonation.html" class="headtxt1">Tips on Blood Donation</a></div>

				
			</div><br clear="all">
		</div>
	 </div>
	 <!-- <div style="height:8px"><img src="images/trans.gif" width="1" height="1" border="0" alt=""></div>
	 <div style="background: url(images/right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(images/right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<div style="padding: 20px 20px 0px 20px">
				<div style="background:#fff;width:160px;height:600px;">

				</div>
			</div><br clear="all">
		</div>
	 </div> -->
	
 </div>
 <!-- Right Panel }-->
<br clear="all"> <div style="height:8px"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>

  <div style="border-top: 1px solid #D8D8D8;border-bottom: 4px solid #B70407;text-align:center;">
	 <div style="padding: 8px 0px;"><a href="aboutus.html" class="footerclr">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="feedback.html" class="footerclr">Feedback</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="FAQ.html" class="footerclr">FAQ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="shareyourexpirence.html" class="footerclr">Share Your Experience</a></div>

  </div>

 </div>
 </body>
</html>
