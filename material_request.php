<?php
		ob_start();
		include ("functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Material Purchase Suggestion Form</title>
<!-- 
<link rel="stylesheet" type="text/css" media="all" href="http://library.pratt.edu/includes/css/PrattCSS/screen.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://library.pratt.edu/includes/css/PrattCSS/library_style.css" />

<link rel="stylesheet" type="text/css" media="all" href="validation.css" /> -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts/form_display.js"></script>


<style>
.hidden
{
  display:none;
}
</style>
</head>

<body>

  <div id="content">
	<h1>Recommend a Library Purchase</h1>

    <p>The Pratt Institue Libraries welcomes suggestions for material purchases which support the teaching, study, and research at the Institute. Budgetary considerations and the Library Collection Development Policy are taken into account for each request. All suggestions will be reviewed by the appropriate <a href="http://library.pratt.edu/research_assistance/department_liaisons/">subject librarian</a> and you will be notified of their decision.</p> 
	<p>Before submitting a suggestion, please check the online library catalog, <a href="http://cat.pratt.edu/">PrattCat</a> to see if the material you need is already owned by Pratt Institute or on order. </p>
    



 <form name="validationcheck" action="material_request_result.php" method="POST">
   <h2>Contact Information</h2>
   <div id="patron">
      <fieldset>

				<label for="name">Your Name</label>
				<input type="text" name="name" size="32" /><br />
				<label for="email">E-Mail Address *</label>
				<input type="text" name="email" size="50" /><br />
				<label for="prattID">Pratt ID Number</label>
				<input type="text" name="prattID" size="50" /><br />
				<label for="people">Student, Faculty, Staff, or Other</label>
				 <select name="people">
						 <option value="faculty">Faculty</option>
						 <option value="student">Student</option>
						 <option value="staff">Staff</option>
						 <option value="other">Other</option>
				 </select>
				 <label for="department">Department</label>
				<input type="text" name="department" size="32" /><br />  
				
      </fieldset>
     </div><!-- close patron div --> 
     
     <div id="course_reserves">
      <fieldset>
      			<label for="reserve">Is this item for course reserve? *</label>
						<select name="reserve" id="reserve" >
								 <option value="">Select</option>
								 <option value="yesReserve">Yes</option>
								 <option value="noReserve">No</option>
						 </select>

				</fieldset>
				
				<div class="hidden" id="details_yesReserve">
				 <fieldset>
								
						<h2>Purchase and Course Reserves Request</h2>
							
						  
							<h3>Course Information</h3>
								<label for="semester">Semester course taught</label>
								<input type="text" name="semester" size="32" /><br />
								<label for="cyear">Year course taught</label>
								<input type="text" name="cyear" size="32" /><br />	
								<label for="cnum">Course number</label>
								<input type="text" name="cnum" size="32" /><br />
								<label for="cname">Course name</label>
								<input type="text" name="cname" size="32" /><br />
							 
							 
							<h3>Item Information</h3>
							  <h4>Each reserve item request requires a <strong>full citation</strong> for copyright compliance. Lack of a full citation will slow down the processing of placing reserve items. Please provide the following information:</h4>
								  <ul>
								    <li><strong>For books:</strong> Book title, author/editor(s), publisher, edition, publication year, ISBN and call number and location if owned by Pratt.</li>
                    <li><strong>For book chapters:</strong> Book title, book author/editor(s), chapter title, publisher, edition, publication year, ISBN, <strong>pages 
                    of the chapter being placed and total number of pages</strong>.</li>
                                                    
                    <li><strong>For articles:</strong>
                    Journal name, full article title, author(s), volume, number, ISSN, publication date and pages</li>
                   </ul>
                
                   <label for='citation1'>Full citation for item 1:</label>
                   <input type="text" name="citation1" size="150" /><br /> 
										

								<label for='additional'>Would you like to place additional items on reserve?</label>
								<select id="additional">
								
									<option value=''>Select</option>
									<option value='noMore'>No</option>
									<option value='yesMore'>Yes</option>
								</select>	
								<br /> 
								
												<div class="hidden" id="details_yesMore">
												 <fieldset>
													 <label for='citation2'>Full citation for item 2:</label>
													 <input type='text' name='citation2' size='150'><br />
													 <label for='citation3'>Full citation for item 3:</label>
													 <input type='text' name='citation3' size='150'><br />
													 <label for='citation4'>Full citation for item 4:</label>
													 <input type='text' name='citation4' size='150'><br />
													 <label for='citation5'>Full citation for item 5:</label>
													 <input type='text' name='citation5' size='150'><br />
													 <label for='citation6'>Full citation for item 6:</label>
													 <input type='text' name='citation6' size='150'><br />
													 <label for='citation7'>Full citation for item 7:</label>
													 <input type='text' name='citation7' size='150'><br />
													 <label for='citation8'>Full citation for item 8:</label>
													 <input type='text' name='citation8' size='150'><br />
													 <label for='citation9'>Full citation for item 9:</label>
													 <input type='text' name='citation9' size='150'><br />
													 <label for='citation10'>Full citation for item 10:</label>
													 <input type='text' name='citation10' size='150'><br />
													</fieldset>
												</div>
												
							<label for='location'>Where should the item be placed on reserve? *</label>
								<select name="location">
									<option value=''>Select campus library</option>
									<option value='BK'>Brooklyn</option>
									<option value='MA'>Manhattan</option>
								</select>	
							
							<h3>Instructor Information</h3>
								<label for='phone'>Instructor's Phone*</label>
								<input type='text' name='phone' size='32'><br />
								<label for='instructName'>Instructor's Name*</label>
								<input type='text' name='instructorName' size='32'>	<br />			
								<label for='instructEmail'>Instructor's Email (if you are submitting on behalf of an instructor)</label>
								<input type='text' name='instructEmail' size='32'><br />
								<label for="instructorDepartment">Instructor's Department (if you are submitting on behalf of an instructor)</label>
								<input type="text" name="instructorDepartment" size="32" /><br />
						</fieldset>
				</div>


				<div class="hidden" id="details_noReserve">
				 <fieldset>
							<label for='matType'>Material Type *</label>
							<select name="matType" id="matType">
								<option value=''>Select a material type</option>
								<option value='book'>Book</option>
								<option value='periodical'>Periodical Subscription</option>
								<option value='electronic'>Electronic Resource</option>
								<option value='video'>Video</option>
							</select>
					</fieldset>
						
							
							<div class="hidden" id="details_book">

								<fieldset>
								
										<h2>Purchase Request - Book</h2>
										
											<label for='author'>Author(s)/Editor(s) *</label>
											<input type='text' name='author' size='32'>	<br />			
											<label for='title'>Title *</label>
											<input type='text' name='title' size='32'><br />
											<label for='publisher'>Publisher</label>
											<input type='text' name='publisher'size='32'><br />
											<label for='year'>Year of Publication</label>
											<input type='text' name='year' size='32'><br />
											<label for='edition'>Edition</label>
											<input type='text' name='edition' size='32'>
											<label for='ISBN_ISSN'>ISBN</label>
											<input type='text' name='ISBN_ISSN' size='32'><br />  
											<label for='price'>Price</label>
											<input type='text' name='price' size='32'><br />
											
										</fieldset>
								</div><!--close div hidden book-->
								
								<div class="hidden" id="details_periodical">

								<fieldset>
								
										<h2>Purchase Request - Periodical Subscription</h2>
    	
										<label for='title'>Title *</label>
										<input type='text' name='title' size='32'><br />
										<label for='publisher'>Publisher</label>
										<input type='text' name='publisher'  size='32'><br />
										<label for='frequency'>Frequency of Publication</label>
										<input type='text' name='frequency' size='32'><br />
										<label for='ISBN_ISSN'>ISSN</label>
										<input type='text' name='ISBN_ISSN' size='32'><br />  
										<label for='price'>Price</label>
										<input type='text' name='price' size='32'><br />
										
									</fieldset>
								</div><!--close div hidden periodical-->
								
								
								<div class="hidden" id="details_electronic">

								  <fieldset>
								
										<h2>Purchase Request - Electronic Resource</h2>
    	
		
											<label for='title'>Resource Title *</label>
											<input type='text' name='title'  size='32'><br />
											<label for='publisher'>Publisher</label>
											<input type='text' name='publisher'  size='32'><br />
											<label for='frequency'>Frequency of Publication</label>
											<input type='text' name='frequency'  size='32'><br />
											<label for='ISBN_ISSN'>ISSN</label>
											<input type='text' name='ISBN_ISSN'  size='32'><br />  
											<label for='price'>Price</label>
											<input type='text' name='price'  size='32'><br />
										</fieldset>
								</div><!--close div hidden electronic-->

								<div class="hidden" id="details_video">

								  <fieldset>
								
										<h2>Purchase Suggestions - Video</h2>
											<label for='format'>Format *</label>
											 <select name='format'>
											 		 <option value=''>Select</option>
													 <option value='DVD'>DVD</option>
													 <option value='VHS'>VHS</option>
													 <option value='16MM'>16MM</option>
													 <option value='other'>other</option>
											 </select>
											<label for='title'>Title *</label>
											<input type='text' name='title'  size='32'><br />
											<label for='director'>Director</label>
											<input type='text' name='frequency'  size='32'><br />
											<label for='publisher'>Publisher</label>
											<input type='text' name='publisher' size='32'><br />
											<label for='year'>Year</label>
											<input type='text' name='year' size='32'><br />
										</fieldset>
								</div><!--close div hidden video-->
		            <label for='curriculum'>How does the item support teaching, study, or research at Pratt?</label>
								<input type='text' name='curriculum' size='200'><br />
								<label for='notify'>Would you like to be notified when the item arrives?</label>
								<select id="notify">
								
									<option value=''>Select</option>
									<option value='yes'>Yes</option>
									<option value='no'>No</option>
								</select>	
							</fieldset>

				</div>
			</div>
      <fieldset class="center">
        <input type="submit" value="Submit Request" />
        <input type="reset" value="Clear and Restart" />
      </fieldset>
      
    </form>


								
					
    </div><!--close content div-->

</body>

</html>
