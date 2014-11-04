<?php
		ob_start();
		include ("./functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Request Result Form</title>
<link rel="stylesheet" type="text/css" media="all" href="/includes/css/PrattCSS/screen.css" /> 
<link rel="stylesheet" type="text/css" media="all" href="/includes/css/PrattCSS/library_style.css" /> 

</head>                                                     

<body>

   
    <div id="content">
	
<?php
			
	//connect to the database							
	 require('scripts/conn.php');
			
		 //general variables//

	    //timestamp must be full ymdhis to generate a unique primary key in sql
			$timeStamp = date("Y-m-d H:i:s");			

		  $name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
		  $email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
		  $prattID = isset($_POST['prattID']) ? strip_tags($_POST['prattID']) : '';	  
		  $people = isset($_POST['people']) ? strip_tags($_POST['people']) : '';
		  $department = isset($_POST['department']) ? strip_tags($_POST['department']) : '';
		  $reserve = isset($_POST['reserve']) ? strip_tags($_POST['reserve']) : '';
		  $matType = isset($_POST['matType']) ? strip_tags($_POST['matType']) : '';		  
			$curriculum = isset($_POST['curriculum']) ? strip_tags($_POST['curriculum']) : '';
	    $notify = isset($_POST['notify']) ? strip_tags($_POST['notify']) : '';	
	    //end general variables//
	    
	    
	    //course reserve variables//
	    $semester = isset($_POST['semester']) ? strip_tags($_POST['semester']) : '';	
		  $cyear = isset($_POST['cyear']) ? strip_tags($_POST['cyear']) : '';
		  $cnum = isset($_POST['cnum']) ? strip_tags($_POST['cnum']) : '';
		  $cname = isset($_POST['cname']) ? strip_tags($_POST['cname']) : '';
		  $citation1 = isset($_POST['citation1']) ? strip_tags($_POST['citation1']) : '';	
		  $citation2 = isset($_POST['citation2']) ? strip_tags($_POST['citation2']) : '';	
		  $citation3 = isset($_POST['citation3']) ? strip_tags($_POST['citation3']) : '';	
		  $citation4 = isset($_POST['citation4']) ? strip_tags($_POST['citation4']) : '';	
		  $citation5 = isset($_POST['citation5']) ? strip_tags($_POST['citation5']) : '';	
		  $citation6 = isset($_POST['citation6']) ? strip_tags($_POST['citation6']) : '';	
		  $citation7 = isset($_POST['citation7']) ? strip_tags($_POST['citation7']) : '';	
		  $citation8 = isset($_POST['citation8']) ? strip_tags($_POST['citation8']) : '';	
		  $citation9 = isset($_POST['citation9']) ? strip_tags($_POST['citation9']) : '';	
		  $citation10 = isset($_POST['citation10']) ? strip_tags($_POST['citation10']) : '';	
		  
		  $location = isset($_POST['location']) ? strip_tags($_POST['location']) : '';	
		  $phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';	
			$instructName = isset($_POST['instructName']) ? strip_tags($_POST['instructName']) : '';
			$instructEmail = isset($_POST['instructEmail']) ? strip_tags($_POST['instructEmail']) : '';
			$instructorDepartment = isset($_POST['instructorDepartment']) ? strip_tags($_POST['instructorDepartment']) : '';
	    //end course reserve variables//
	    
	    
			//book variables
			$bookTitle = isset($_POST['bookTitle']) ? strip_tags($_POST['bookTitle']) : '';
			$bookAuthor = isset($_POST['bookAuthor']) ? strip_tags($_POST['bookAuthor']) : '';
			$bookPublisher = isset($_POST['bookPublisher']) ? strip_tags($_POST['bookPublisher']) : '';
			$bookYear = isset($_POST['bookYear']) ? strip_tags($_POST['bookYear']) : '';
	    $bookEdition = isset($_POST['bookEdition']) ? strip_tags($_POST['bookEdition']) : '';
			$ISBN = isset($_POST['ISBN']) ? strip_tags($_POST['ISBN']) : '';	
	    $bookPrice = isset($_POST['bookPrice']) ? strip_tags($_POST['bookPrice']) : '';
	    //end book variables
	    
	    //periodical variables
	    $perTitle = isset($_POST['perTitle']) ? strip_tags($_POST['perTitle']) : '';
	    $perPublisher = isset($_POST['perPublisher']) ? strip_tags($_POST['perPublisher']) : '';
	    $perFrequency = isset($_POST['perFrequency']) ? strip_tags($_POST['perFrequency']) : '';
	    $perISSN = isset($_POST['perISSN']) ? strip_tags($_POST['perISSN']) : '';
	    $perPrice = isset($_POST['perPrice']) ? strip_tags($_POST['perPrice']) : '';
	    //end periodical variables
	    
	    //electronic resources variables
	    $erTitle = isset($_POST['erTitle']) ? strip_tags($_POST['erTitle']) : '';
	    $erPublisher = isset($_POST['erPublisher']) ? strip_tags($_POST['erPublisher']) : '';
	    $erFrequency = isset($_POST['erFrequency']) ? strip_tags($_POST['erFrequency']) : '';
	    $erISSN = isset($_POST['erISSN']) ? strip_tags($_POST['erISSN']) : '';
	    $erPrice = isset($_POST['erPrice']) ? strip_tags($_POST['erPrice']) : '';
	    //end electronic resources variables
	    
	    //video variables
	    $videoTitle = isset($_POST['videoTitle']) ? strip_tags($_POST['videoTitle']) : '';
	    $videoDirector = isset($_POST['videoDirector']) ? strip_tags($_POST['videoDirector']) : '';
	    $videoPublisher = isset($_POST['videoPublisher']) ? strip_tags($_POST['videoPublisher']) : '';
	    $videoFormat = isset($_POST['videoFormat']) ? strip_tags($_POST['videoFormat']) : '';  
	    $videoYear = isset($_POST['videoYear']) ? strip_tags($_POST['videoYear']) : '';
	    $videoPrice = isset($_POST['videoPrice']) ? strip_tags($_POST['videoPrice']) : '';
	    //end electronic resources variables
	    
	    
	    
	    
	    $error = 1;
			$email = validateEmail("email", strip_tags($_POST['email']), TRUE);
			$error = declareError(TRUE);
			if($error){
				echo "<br/> Please click Back button on your browser to return to the previous page";
				return;
			}

			if(($reserve == "noReserve") && ($matType == "")){
					echo "<b><font color='red'>Please select a material type.</b></font><br/> Please click Back button on your browser to return to the previous page";
					return;
			}

			//check to see if this is for course reserve
			  //if not selected, give error
				switch($reserve){		
					case "":
						echo "<b><font color='red'>Please indicate if this is for course reserve</b></font><br/> Please click Back button on your browser to return to the previous page";
						return;
						break;
						
					// yes, the item is for course reserve, submit the reserve info	
			  	case "yesReserve":			
			  					//$libemail = 'selectors.library@pratt.edu';
									$libemail = 'wmcmilli@pratt.edu';
									//Create the email body.
									$today = date('m/d/Y');
									$body .="<p><b>Date : </b>". $today."</p>\r\n";
									$body .="<p><b>Name : </b>".$name."</p> \n";
									$body .="<p><b>E-mail * : </b>".$email." </p>\n";		
									$body .="<p><b>PrattID : </b>".$prattID."</p> \n";			
									$body .="<p><b>Student, Faculty, Staff or Other * : </b>".$people." </p>\n\n\n";
									$body .="<p><b>Department : </b>".$department."</p> \n";
									$body .="<p><b>Semester : </b>".$semester."</p> \n";
									$body .="<p><b>Do You wish to be notified when item arrives? </b>".$notify."</p> \n";
									$body .="<p><b>Course Year : </b>".$cyear."</p> \n";
									$body .="<p><b>Course Number : </b>".$cnum."</p> \n";
									$body .="<p><b>Course Name : </b>".$cname."</p> \n";
									$body .="<p><b>Reserves Location : </b>".$location."</p> \n";
									$body .="<p><b>Phone : </b>".$phone."</p> \n";
									$body .="<p><b>Instructor Name : </b>".$instructName."</p> \n";
									$body .="<p><b>Instructor Email : </b>".$instructEmail."</p> \n";
									$body .="<p><b>Instructor Department : </b>".$instructorDepartment."</p> \n";
									$body .="<p><b>Citation 1 : </b>".$citation1."</p> \n";
									$body .="<p><b>Citation 2  : </b>".$citation2."</p> \n";
									$body .="<p><b>Citation 3  : </b>".$citation3."</p> \n";
									$body .="<p><b>Citation 4  : </b>".$citation4."</p> \n";
									$body .="<p><b>Citation 5  : </b>".$citation5."</p> \n";
									$body .="<p><b>Citation 6  : </b>".$citation6."</p> \n";
									$body .="<p><b>Citation 7  : </b>".$citation7."</p> \n";
									$body .="<p><b>Citation 8  : </b>".$citation8."</p> \n";
									$body .="<p><b>Citation 9  : </b>".$citation9."</p> \n";
									$body .="<p><b>Citation 10  : </b>".$citation10."</p> \n";
									
									//form the db query
									$query = sprintf("INSERT INTO purchase (timeStamp, name, email, phone, prattID, people, department, curriculum, notify, cyear, cnum, cname, location, instructName, instructEmail, instructorDepartment, citation1, citation2, citation3, citation4, citation5, citation6, citation7, citation8, citation9, citation10) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s','%s', '%s', '%s', '%s', '%s', '%s', '%s','%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
									 mysqli_real_escape_string($dbLink, $timeStamp),																																																	 
									 mysqli_real_escape_string($dbLink, $name),																																																	 
									 mysqli_real_escape_string($dbLink, $email),																																																	 
									 mysqli_real_escape_string($dbLink, $phone),																																																	 
									 mysqli_real_escape_string($dbLink, $prattID),																																																	 
									 mysqli_real_escape_string($dbLink, $people),
									 mysqli_real_escape_string($dbLink, $department),																																																	 
									 mysqli_real_escape_string($dbLink, $curriculum),
									 mysqli_real_escape_string($dbLink, $notify),
									 mysqli_real_escape_string($dbLink, $cyear),
									 mysqli_real_escape_string($dbLink, $cnum),
									 mysqli_real_escape_string($dbLink, $cname),
									 mysqli_real_escape_string($dbLink, $location),
									 mysqli_real_escape_string($dbLink, $instructName),
									 mysqli_real_escape_string($dbLink, $instructEmail),
									 mysqli_real_escape_string($dbLink, $instructorDepartment),
									 mysqli_real_escape_string($dbLink, $citation1),
									 mysqli_real_escape_string($dbLink, $citation2),
									 mysqli_real_escape_string($dbLink, $citation3),
									 mysqli_real_escape_string($dbLink, $citation4),
									 mysqli_real_escape_string($dbLink, $citation5),
									 mysqli_real_escape_string($dbLink, $citation6),
									 mysqli_real_escape_string($dbLink, $citation7),
									 mysqli_real_escape_string($dbLink, $citation8),
									 mysqli_real_escape_string($dbLink, $citation9),
									 mysqli_real_escape_string($dbLink, $citation10)
									  );

										
									 echo "query = $query";	
						
						break;
					//no, the item is not for course reserve, so do nothing	
					case "noReserve":
								          
						
							break;
				}
				
				//what material type was selected
				switch($matType){		
								
						//////////////////////BEGIN BOOK INFO//////////////////////////////			
								case "book":			
									
									//$libemail = 'selectors.library@pratt.edu';
									$libemail = 'wmcmilli@pratt.edu';
									//Create the email body.
									$today = date('m/d/Y');
									$body .="<p><b>Date : </b>". $today."</p>\r\n";
									$body .="<p><b>Name : </b>".$name."</p> \n";
									$body .="<p><b>E-mail * : </b>".$email." </p>\n";		
									$body .="<p><b>PrattID : </b>".$prattID."</p> \n";			
									$body .="<p><b>Student, Faculty, Staff or Other * : </b>".$people." </p>\n\n\n";
									$body .="<p><b>Department : </b>".$department."</p> \n";
									$body .="<p><b>How does this item support the curriculum, research, and/or learning needs of the Institute?  : </b>".$curriculum."</p> \n";
									$body .="<p><b>Material Type * : </b>".$matType."</p> \n";
									$body .="<p><b>Author(s)/Editor(s) : </b>".$bookAuthor."</p> \n";
									$body .="<p><b>Title * : </b>".$bookTitle."</p> \n";
									$body .="<p><b>Publisher : </b>".$bookPublisher."</p> \n";
									$body .="<p><b>Year of Publication: </b>".$bookYear."</p> \n";
									$body .="<p><b>Edition : </b>".$bookEdition."</p> \n";
									$body .="<p><b>ISBN : </b>".$ISBN."</p> \n";			
									$body .="<p><b>Price : </b>".$bookPrice."</p> \n";
									$body .="<p><b>Do you wish to be notified when the item arrives? </b>".$notify."</p> \n";			
											
									$query = sprintf("INSERT INTO purchase (timeStamp, name, email, phone, prattID, people, department, curriculum, matType, bookAuthor, bookTitle, bookPublisher, bookYear, bookEdition, ISBN, bookPrice, notify) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
									 mysqli_real_escape_string($dbLink, $timeStamp),																																																	 
									 mysqli_real_escape_string($dbLink, $name),																																																	 
									 mysqli_real_escape_string($dbLink, $email),																																																	 
									 mysqli_real_escape_string($dbLink, $phone),																																																	 
									 mysqli_real_escape_string($dbLink, $prattID),																																																	 
									 mysqli_real_escape_string($dbLink, $people),
									 mysqli_real_escape_string($dbLink, $department),																																																	 
									 mysqli_real_escape_string($dbLink, $curriculum),																																																	 
									 mysqli_real_escape_string($dbLink, $matType),		
									 mysqli_real_escape_string($dbLink, $bookAuthor),
									 mysqli_real_escape_string($dbLink, $bookTitle),																																																	 
									 mysqli_real_escape_string($dbLink, $bookPublisher),
									 mysqli_real_escape_string($dbLink, $bookYear),
									 mysqli_real_escape_string($dbLink, $bookEdition),
									 mysqli_real_escape_string($dbLink, $ISBN),																																																																																																	 
									 mysqli_real_escape_string($dbLink, $bookPrice),
									 mysqli_real_escape_string($dbLink, $notify)																																																																																														
							 );
															
						echo "query = $query";	
						
						break;
				//////////////////////END BOOK INFO//////////////////////////////			

			
				////////////////////BEGIN PERIODICAL INFO///////////////////////
								case "periodical":
									
									//$libemail = 'selectors.library@pratt.edu';
									$libemail = 'wmcmilli@pratt.edu';
									//Create the email body.
									$today = date('m/d/Y');
									$body .="<p><b>Date : </b>". $today."</p>\r\n";
									$body .="<p><b>Name : </b>".$name."</p> \n";
									$body .="<p><b>E-mail * : </b>".$email." </p>\n";		
									$body .="<p><b>PrattID : </b>".$prattID."</p> \n";			
									$body .="<p><b>Student, Faculty, Staff or Other * : </b>".$people." </p>\n\n\n";
									$body .="<p><b>Department : </b>".$department."</p> \n";
									$body .="<p><b>How does this item support the curriculum, research, and/or learning needs of the Institute?  : </b>".$curriculum."</p> \n";
									$body .="<p><b>Material Type * : </b>".$matType."</p> \n";
									$body .="<p><b>Title * : </b>".$perTitle."</p> \n";
									$body .="<p><b>Publisher : </b>".$perPublisher."</p> \n";
									$body .="<p><b>Frequency of Publication: </b>".$perFrequency."</p> \n";
									$body .="<p><b>ISSN : </b>".$perISSN."</p> \n";			
									$body .="<p><b>Price : </b>".$perPrice."</p> \n";
									$body .="<p><b>Do you wish to be notified when the item arrives? </b>".$notify."</p> \n";			
												
						
									$query = sprintf("INSERT INTO purchase (timeStamp, name, email, phone, prattID, people, department, curriculum, matType, perTitle, perPublisher, perFrequency, perISSN, perPrice, notify) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
									 mysqli_real_escape_string($dbLink, $timeStamp),																																																	 
									 mysqli_real_escape_string($dbLink, $name),																																																	 
									 mysqli_real_escape_string($dbLink, $email),																																																	 
									 mysqli_real_escape_string($dbLink, $phone),																																																	 
									 mysqli_real_escape_string($dbLink, $prattID),																																																	 
									 mysqli_real_escape_string($dbLink, $people),
									 mysqli_real_escape_string($dbLink, $department),																																																	 
									 mysqli_real_escape_string($dbLink, $curriculum),																																																	 
									 mysqli_real_escape_string($dbLink, $matType),		
									 mysqli_real_escape_string($dbLink, $perTitle),																																																	 
									 mysqli_real_escape_string($dbLink, $perPublisher),
									 mysqli_real_escape_string($dbLink, $perFrequency),
									 mysqli_real_escape_string($dbLink, $perISSN),																																																																																																	 
									 mysqli_real_escape_string($dbLink, $perPrice),
									 mysqli_real_escape_string($dbLink, $notify)																																																																																														
									 );
																		
							echo "query = $query";	
									
									break;
									
						//////////////END PERIODICAL INFO//////////////////////
						
						
						//////////////////BEGIN E-Resource INFO//////////////////
									
					    	case "electronic":
					    		
					    		
									//$libemail = 'selectors.library@pratt.edu';
									$libemail = 'wmcmilli@pratt.edu';
									//Create the email body.
									$today = date('m/d/Y');
									$body .="<p><b>Date : </b>". $today."</p>\r\n";
									$body .="<p><b>Name : </b>".$name."</p> \n";
									$body .="<p><b>E-mail * : </b>".$email." </p>\n";		
									$body .="<p><b>PrattID : </b>".$prattID."</p> \n";			
									$body .="<p><b>Student, Faculty, Staff or Other * : </b>".$people." </p>\n\n\n";
									$body .="<p><b>Department : </b>".$department."</p> \n";
									$body .="<p><b>How does this item support the curriculum, research, and/or learning needs of the Institute?  : </b>".$curriculum."</p> \n";
									$body .="<p><b>Material Type * : </b>".$matType."</p> \n";
									$body .="<p><b>Title * : </b>".$erTitle."</p> \n";
									$body .="<p><b>Publisher : </b>".$erPublisher."</p> \n";
									$body .="<p><b>Frequency of Publication: </b>".$erFrequency."</p> \n";
									$body .="<p><b>ISSN : </b>".$erISSN."</p> \n";			
									$body .="<p><b>Price : </b>".$erPrice."</p> \n";
									$body .="<p><b>Do you wish to be notified when the item arrives? </b>".$notify."</p> \n";			
												
						
									$query = sprintf("INSERT INTO purchase (timeStamp, name, email, phone, prattID, people, department, curriculum, matType, erTitle, erPublisher, erFrequency, erISSN, erPrice, notify) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
									 mysqli_real_escape_string($dbLink, $timeStamp),																																																	 
									 mysqli_real_escape_string($dbLink, $name),																																																	 
									 mysqli_real_escape_string($dbLink, $email),																																																	 
									 mysqli_real_escape_string($dbLink, $phone),																																																	 
									 mysqli_real_escape_string($dbLink, $prattID),																																																	 
									 mysqli_real_escape_string($dbLink, $people),
									 mysqli_real_escape_string($dbLink, $department),																																																	 
									 mysqli_real_escape_string($dbLink, $curriculum),																																																	 
									 mysqli_real_escape_string($dbLink, $matType),		
									 mysqli_real_escape_string($dbLink, $erTitle),																																																	 
									 mysqli_real_escape_string($dbLink, $erPublisher),
									 mysqli_real_escape_string($dbLink, $erFrequency),
									 mysqli_real_escape_string($dbLink, $erISSN),																																																																																																	 
									 mysqli_real_escape_string($dbLink, $erPrice),
									 mysqli_real_escape_string($dbLink, $notify)																																																																																														
									 );
			
									echo "query = $query";	
						break;		
			/////////////////////END EResource INFO////////////////////
			
			
			
			
			///////////////BEGIN VIDEO INFO/////////////////////////////			
									
			
								case "video":
									
									//$libemail = 'selectors.library@pratt.edu';
									$libemail = 'wmcmilli@pratt.edu';
									//Create the email body.
									$today = date('m/d/Y');
									$body .="<p><b>Date : </b>". $today."</p>\r\n";
									$body .="<p><b>Name : </b>".$name."</p> \n";
									$body .="<p><b>E-mail * : </b>".$email." </p>\n";		
									$body .="<p><b>PrattID : </b>".$prattID."</p> \n";			
									$body .="<p><b>Student, Faculty, Staff or Other * : </b>".$people." </p>\n\n\n";
									$body .="<p><b>Department : </b>".$department."</p> \n";
									$body .="<p><b>How does this item support the curriculum, research, and/or learning needs of the Institute?  : </b>".$curriculum."</p> \n";
									$body .="<p><b>Material Type * : </b>".$matType."</p> \n";
									$body .="<p><b>Title * : </b>".$videoTitle."</p> \n";
									$body .="<p><b>Director : </b>".$videoDirector."</p> \n";
									$body .="<p><b>Publisher : </b>".$videoPublisher."</p> \n";
									$body .="<p><b>Format: </b>".$videoFormat."</p> \n";
									$body .="<p><b>Year : </b>".$videoYear."</p> \n";			
									$body .="<p><b>Price : </b>".$videoPrice."</p> \n";
									$body .="<p><b>Do you wish to be notified when the item arrives? </b>".$notify."</p> \n";			
												
						
									$query = sprintf("INSERT INTO purchase (timeStamp, name, email, phone, prattID, people, department, curriculum, matType, videoTitle, videoDirector, videoPublisher, videoFormat, videoYear, videoPrice, notify) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
									 mysqli_real_escape_string($dbLink, $timeStamp),																																																	 
									 mysqli_real_escape_string($dbLink, $name),																																																	 
									 mysqli_real_escape_string($dbLink, $email),																																																	 
									 mysqli_real_escape_string($dbLink, $phone),																																																	 
									 mysqli_real_escape_string($dbLink, $prattID),																																																	 
									 mysqli_real_escape_string($dbLink, $people),
									 mysqli_real_escape_string($dbLink, $department),																																																	 
									 mysqli_real_escape_string($dbLink, $curriculum),																																																	 
									 mysqli_real_escape_string($dbLink, $matType),		
									 mysqli_real_escape_string($dbLink, $videoTitle),																																																	 
									 mysqli_real_escape_string($dbLink, $videoDirector),
									 mysqli_real_escape_string($dbLink, $videoPublisher),
									 mysqli_real_escape_string($dbLink, $videoFormat),																																																																																																	 
									 mysqli_real_escape_string($dbLink, $videoYear),
									 mysqli_real_escape_string($dbLink, $videoPrice),
									 mysqli_real_escape_string($dbLink, $notify)																																																																																														
									 );
			
									echo "query = $query";		
									
									break;	
						
							
							}
				//send email
	//First initialize internal variables for cleanliness and safety.
	$address = '';
	$key = '';
	$value = '';
	//$body = '';
	$headers = '';
	$RETURNPAGE="index.htm";
	$ERRORPAGE="response/error.php";
	$SUCCESSPAGE="response/success_general.php?email=$email";
	$REPLY='';
	$SUBJECT="Material Purchase Request";
	//$FROM="<webmaster@libserv.ucmo.edu>";

	//Create the headers, including the $FROM header.
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=us-ascii\r\n";
	$headers .= "Content-Transfer-Encoding: 7bit\r\n";

	//Final if block to see if the mail succeeded in going or if there was an error.
	
	$libemail = 'wmcmilli@pratt.edu';
	$adminemail = mail($libemail,$SUBJECT,$body,$headers);
	

	//Confirmation email to requestor
	if($email != ''){
		$bodyrequest = "<p><b>This is an automatic message. PLEASE DO NOT REPLY THIS EMAIL.\n\nYour request has been submitted successfully. The following is your comment details: </b></p><br/>\n\n";
		$bodyrequest .= $body;
		$SUBJECTconfirm = "Material Purchase Request Confirmation";
		$confirmemail = mail($email,$SUBJECTconfirm,$bodyrequest,$headers);
	}else
		$confirmemail = 1;	

	if($adminemail && $confirmemail){

		$retreiveresult = mysqli_query($dbLink, $query) or die(mysqli_error($dbLink));	
		
		header("Location: $SUCCESSPAGE"); //redirect to success.php page
		exit(0);
	}											else{
		  header("Location:$ERRORPAGE"); //redirect to error.php page
		  exit(1);
	  }
				
				
			
			?>


     
</div><!-- close content div -->
</body><!-- close body-->
</html>
