<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/formtemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<link rel="stylesheet" type="text/css" media="all" href="../../../includes/css/screen.css" /> 
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body bgcolor="#f9f7f5">

     <div id="thinMarquee"><h1 class="thin1"><a href="http://lib2.pratt.edu/">Pratt Libraries</a></h1></div>	
	
	<div class="headerBar">
		<div class="headerNav">
			<ul class="tabs">
				<li><a href="http://lib2.pratt.edu/about" title="">About</a></li>
				<li><a href="http://lib2.pratt.edu/services" title="">Services</a></li>
				<li><a href="http://lib2.pratt.edu/find_resources" title="">Find Resources</a></li>

				<li><a href="http://lib2.pratt.edu/research_assistance" title="">Research Assistance</a></li>
				<li><a class="active" href="http://lib2.pratt.edu/help" title="">Help</a></li>
			</ul>
		</div><!-- close HeaderNav DIV -->
        
		<div class="searchBar">
			<a href="#" title="">Ask Us</a>
			<a class="last" href="http://cat.pratt.edu/" title="">PrattCat</a>

			
			<form method="post" action="http://lib2.pratt.edu/"  >
                <div class='hiddenFields'>
                    <input type="hidden" name="ACT" value="19" />
                    <input type="hidden" name="XID" value="110b7a7f7f43a27ee4444450d9ff845a25c6a058" />
                    <input type="hidden" name="RP" value="search&amp;#47;index" />
                    <input type="hidden" name="NRP" value="search&amp;#47;noresults" />
                    <input type="hidden" name="RES" value="20" />
                    <input type="hidden" name="status" value="" />
                    <input type="hidden" name="weblog" value="" />
                    <input type="hidden" name="search_in" value="entries" />
                    <input type="hidden" name="where" value="exact" />
                    <input type="hidden" name="site_id" value="1" />
                </div>


			<p><input type="text" name="keywords" class="text" value="" maxlength="100" /></p>

			<p><input type="submit" name="search" class="search" value="Search Site" /></p>
			<input type="hidden" name="show_future_entries" id="field_show_future_entries" value="yes">
			</form>
			
		</div><!-- close searchBar DIV -->
	</div><!-- close headerBar DIV -->
    
    
    <div id="container" class="wrapper">
	<div id="body" class="wrapper">
		
			<div id="leftSide">
				<div class="leftNav">
                    <ul id="nav_sub"><li class="sub_level_0"><a href='/about/hours/'>Hours</a></li>
                        <li class="sub_level_0"><a href='/about/locations/'>Locations & Maps</a></li>
                        <li class="sub_level_0"><a href='/about/brooklyn_campus/'>Brooklyn Campus Library</a></li>
                        <li class="sub_level_0"><a href='/about/manhattan_campus/'>Manhattan Campus Library</a></li>
                        <li class="sub_level_0"><a href='/about/contact/'>Contact</a></li>
                        <li class="sub_level_0"><a href='/about/policies/'>Policies</a></li>
                        <li class="sub_level_0"><a href='/about/giving/'>Giving to the Libraries</a></li>
                        <li class="sub_level_0"><a href='/about/employment/'>Employment</a></li>                
                        <li class="sub_level_0 last"><a href='/about/announcements/'>Announcements</a></li>
               		</ul>

				</div><!-- close leftNav DIV -->
			</div><!-- close leftSide DIV -->


    <div id="content">
	<!-- InstanceBeginEditable name="maincontant" -->
	
<?php
  require_once('recaptchalib.php');
  $privatekey = "6LfXCQwAAAAAAC9-ziU72S9wsnJg6QZKPUQ8lPzU";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
	  
	  $subject = $_POST['subject'];
	  $name = $_POST['name'];
	  $people = $_POST['people'];
	  $email = $_POST['email'];
	  $reply = $_POST['reply'];	  
	  $comments = $_POST['comments'];	


	//First initialize internal variables for cleanliness and safety.
	$address = '';
	$key = '';
	$value = '';
	$body = '';
	$headers = '';
	$RETURNPAGE="./index.htm";
	$ERRORPAGE="./response/error.php";
	//$SUCCESSPAGE="./response/success_comments.php?email=$email";
	$REPLY='';
	$SUBJECT="Comments";
											
	  //Create the email body.
	  $today = date('m/d/Y');
	  $body .="<p><b>Date : </b>". $today."</p>\r\n";
	  $body .="<p><b>Subject : * </b>".$_POST['subject']."</p>\r\n";
	  $body .="<p><b>Name : </b>".$_POST['name']."</p> \n";
	  $body .="<p><b>Student, Faculty, Staff or Other * : </b>".$_POST['people']."</p> \n";									
	  $body .="<p><b>Phone : </b>".$_POST['phone']."</p> \n";
	  $body .="<p><b>E-mail : </b>".$_POST['email']." </p>\n";
	  $body .="<p><b>Reply : </b>".$_POST['reply']." </p>\n\n\n";
	  $body .="<p><b>Comments : </b>".$_POST['comments']."</p> \n";

	  //Create the headers, including the $FROM header.
	  $headers .= "MIME-Version: 1.0\r\n";
	  $headers .= "Content-type: text/html; charset=us-ascii\r\n";
	  $headers .= "Content-Transfer-Encoding: 7bit\r\n";

	  //Final if block to see if the mail succeeded in going or if there was an error.
	  $libemail = 'ywang9@pratt.edu';

	  $adminemail = mail($libemail,$SUBJECT,$body,$headers);
	  
	 
    echo "<p>Thank you for your comments.</p><p>If you have any questions, please contact the Reference Desk:
		Tel. 718-636-3704,  Fax. 718-399-4220.</p>
		<p>Thanks! </p>";
 
echo "email = $email";
  //Confirmation email to requestor
  if($email != ''){
	  
	  $bodyrequest = "<p><b>This is an automatic message. PLEASE DO NOT REPLY THIS EMAIL.\n\nYour request has been submitted successfully. The following is your comment details: </b></p><br/>\n\n";
	  $bodyrequest .= $body;
	  $SUBJECTconfirm="Comments Confirmation";
	  $confirmemail = mail($email,$SUBJECTconfirm,$bodyrequest,$headers);
  }else
	  $confirmemail = 1;


  if($adminemail && $confirmemail){
	  //if submitted successfully, insert values into database
	  require_once('Connections/dbConn.php');
	  mysql_select_db($database_dbConn, $dbConn);

	  $query = sprintf("INSERT INTO comments (Subject, Name, People, Phone, Email, Reply, Comments) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",																																					  
	  mysql_real_escape_string($subject),
	  mysql_real_escape_string($name),
	  mysql_real_escape_string($people),
	  mysql_real_escape_string($phone),
	  mysql_real_escape_string($email),
	  mysql_real_escape_string($reply),
	  mysql_real_escape_string($comments)
	  );
	  
	  //echo "query = $query";
	  
	  $retreiveresult = mysql_query($query, $dbConn) or die(mysql_error());
	  exit(0);
  }
  else{
	  header("Location:$ERRORPAGE"); //redirect to error.php page
	  exit(1);
  }

}									
  ?>

		

		
		

<!-- InstanceEndEditable -->    
    </div>

      </div><!-- close body-->
</div><!-- close container -->
</body>
<!-- InstanceEnd --></html>
