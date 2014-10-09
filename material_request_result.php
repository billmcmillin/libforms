<?php
		ob_start();
		include ("functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Request Result Form</title>
<link rel="stylesheet" type="text/css" media="all" href="../../includes/css/PrattCSS/screen.css" /> 
<link rel="stylesheet" type="text/css" media="all" href="../../includes/css/PrattCSS/library_style.css" /> 

</head>                                                     

<body>

   
    <div id="content">
	
<?php
	//connect to the database							
	//require('scripts/conn.php');
					
	    //timestamp must be full ymdhis to generate a unique primary key in sql
			$timeStamp = date("Y-m-d H:i:s");			

		  $name = isset($_POST['name']) ? $_POST['name'] : '';
		  $email = isset($_POST['email']) ? $_POST['email'] : '';
		  $people = isset($_POST['people']) ? $_POST['people'] : '';
		  $department = isset($_POST['department']) ? $_POST['department'] : '';
		  $reserve = isset($_POST['reserve']) ? $_POST['reserve'] : '';
		  $matType = isset($_POST['matType']) ? $_POST['matType'] : '';		  
		  $semester = isset($_POST['semester']) ? $_POST['semester'] : '';	
		  $cyear = isset($_POST['cyear']) ? $_POST['cyear'] : '';	
		  $cnum = isset($_POST['cnum']) ? $_POST['cnum'] : '';	
		  $cname = isset($_POST['cname']) ? $_POST['cname'] : '';	
		  $citation = isset($_POST['citation']) ? $_POST['citation'] : '';	
		  $location = isset($_POST['location']) ? $_POST['location'] : '';	
		  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';	
			$instructName = isset($_POST['instructName']) ? $_POST['instructName'] : '';
			$instructEmail = isset($_POST['instructEmail']) ? $_POST['instructEmail'] : '';
			$instructorDepartment = isset($_POST['instructorDepartment']) ? $_POST['instructorDepartment'] : '';
			
			//book variables
			$bookTitle = isset($_POST['bookTitle']) ? $_POST['bookTitle'] : '';
			$bookAuthor = isset($_POST['bookAuthor']) ? $_POST['bookAuthor'] : '';
			$bookPublisher = isset($_POST['bookPublisher']) ? $_POST['bookPublisher'] : '';
			$bookYear = isset($_POST['bookYear']) ? $_POST['bookYear'] : '';
	    $bookEdition = isset($_POST['bookEdition']) ? $_POST['bookEdition'] : '';
			$ISBN = isset($_POST['ISBN']) ? $_POST['ISBN'] : '';	
	    $bookPrice = isset($_POST['bookPrice']) ? $_POST['bookPrice'] : '';
	    //end book variables
	    
	    //periodical variables
	    $perTitle = isset($_POST['perTitle']) ? $_POST['perTitle'] : '';
	    $perPublisher = isset($_POST['perPublisher']) ? $_POST['perPublisher'] : '';
	    $perFrequency = isset($_POST['perFrequency']) ? $_POST['perFrequency'] : '';
	    $perFrequency = isset($_POST['perISSN']) ? $_POST['perISSN'] : '';
	    $perPrice = isset($_POST['perPrice']) ? $_POST['perPrice'] : '';
	    //end periodical variables
	    
	    
	    
	    $format = isset($_POST['format']) ? $_POST['format'] : '';
	    $curriculum = isset($_POST['curriculum']) ? $_POST['curriculum'] : '';
	    $notify = isset($_POST['notify']) ? $_POST['notify'] : '';
	    
	    $error = 1;
			$email = validateEmail("email", $_POST['email'], TRUE);
			$error = declareError(TRUE);
			if($error){
				echo "<br/> Please click Back button on your browser to return to the previous page";
				return;
			}

			
		  
		  //echo $reserve;
		  //echo $matType;

				switch($reserve){		
					case "":
						echo "<b><font color='red'>Please indicate if this is for course reserve</b></font><br/> Please click Back button on your browser to return to the previous page";
						return;
						break;
			  	case "yesReserve":			
			  			echo $semester;
					  
						break; 
						
						
					case "noReserve":
								          
						
							break;
				}
				
				//what material type was selected
				switch($matType){		
								case "":
									
									break;
						//////////////////////BEGIN BOOK INFO//////////////////////////////			
								case "book":			
									

									echo "book details";	
									echo $bookTitle;
									
						/*			
						//$libemail = 'selectors.library@pratt.edu';
						$libemail = 'wmcmilli@pratt.edu';
						//Create the email body.
						$today = date('m/d/Y');
						$body .="<p><b>Date : </b>". $today."</p>\r\n";
						$body .="<p><b>Name : </b>".$name."</p> \n";
						$body .="<p><b>E-mail * : </b>".$email." </p>\n";		
						$body .="<p><b>Phone : </b>".$_POST['phone']."</p> \n";
						$body .="<p><b>PrattID : </b>".$_POST['prattID']."</p> \n";			
						$body .="<p><b>Student, Faculty, Staff or Other * : </b>".$_POST['people']." </p>\n\n\n";
						$body .="<p><b>Department : </b>".$_POST['department']."</p> \n";
						$body .="<p><b>How does this item support the curriculum, research, and/or learning needs of the Institute?  : </b>".$_POST['curriculum']."</p> \n";
						$body .="<p><b>Material Type * : </b>".$_POST['type']."</p> \n";
						$body .="<p><b>Author(s)/Editor(s) : </b>".$_POST['bookAuthor']."</p> \n";
						$body .="<p><b>Title * : </b>".$_POST['bookTitle']."</p> \n";
						$body .="<p><b>Publisher : </b>".$_POST['publisher']."</p> \n";
						$body .="<p><b>Year of Publication: </b>".$_POST['year']."</p> \n";
						$body .="<p><b>Edition : </b>".$_POST['edition']."</p> \n";
						$body .="<p><b>ISBN : </b>".$_POST['ISBN_ISSN']."</p> \n";			
						$body .="<p><b>Price : </b>".$_POST['price']."</p> \n";
						$body .="<p><b>Is this purchase wanted for Course Reserve? : </b>".$reserve."</p> \n";
						$body .="<p><b>Course Name : </b>".$_POST['cname']."</p> \n";
						$body .="<p><b>Course Number : </b>".$_POST['cnum']."</p> \n";
						$body .="<p><b>Semester Course Taught : </b>".$_POST['semester']."</p> \n";			
						$body .="<p><b>Year Course Taught : </b>".$_POST['cyear']."</p> \n";			
						$body .="<p><b>Do you wish to be notified when the item arrives? </b>".$_POST['notify']."</p> \n";			
									
						$query = sprintf("INSERT INTO purchase (timeStamp, name, email, phone, prattID, people, department, supportCurriculum, materialType, author, bookTitle, publisher, year, edition, ISBN_ISSN, price, courseReserve, courseName, courseNum, semester, courseYear, notify) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
						 mysqli_real_escape_string($dbLink, $timeStamp),																																																	 
						 mysqli_real_escape_string($dbLink, $name),																																																	 
						 mysqli_real_escape_string($dbLink, $email),																																																	 
						 mysqli_real_escape_string($dbLink, $phone),																																																	 
						 mysqli_real_escape_string($dbLink, $prattID),																																																	 
						 mysqli_real_escape_string($dbLink, $people),
						 mysqli_real_escape_string($dbLink, $department),																																																	 
						 mysqli_real_escape_string($dbLink, $curriculum),																																																	 
						 mysqli_real_escape_string($dbLink, $type),		
						 mysqli_real_escape_string($dbLink, $bookAuthor),
						 mysqli_real_escape_string($dbLink, $bookTitle),																																																	 
						 mysqli_real_escape_string($dbLink, $publisher),
						 mysqli_real_escape_string($dbLink, $year),
						 mysqli_real_escape_string($dbLink, $edition),
						 mysqli_real_escape_string($dbLink, $ISBN_ISSN),																																																																																																	 
						 mysqli_real_escape_string($dbLink, $price),
						 mysqli_real_escape_string($dbLink, $reserve),
						 mysqli_real_escape_string($dbLink, $cname),
						 mysqli_real_escape_string($dbLink, $cnum),
						 mysqli_real_escape_string($dbLink, $semester),
						 mysqli_real_escape_string($dbLink, $cyear),
						 mysqli_real_escape_string($dbLink, $notify)																																																																																														
						 );
															
						echo "query = $query";	*/
						
						break;
				//////////////////////END BOOK INFO//////////////////////////////			

								case "periodical":
									
									
									
									echo "periodical details";
									
									break;		
									
					    	case "electronic":
					    		
					    		
									echo "electronic details";
									break;		
									
						
									
								case "video":
									
									
									echo "video details";			
									
									break;	
						
							
							}
				
				
				
			
			?>


     
</div><!-- close content div -->
</body><!-- close body-->
</html>
