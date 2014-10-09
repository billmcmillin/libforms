<?php
$q=$_GET["q"];

if($q == "BOOK"){
		echo "<fieldset>
    	<h2>Purchase Request - Book</h2>.
    	
				<label for='author'>Author(s)/Editor(s) *</label>
				<input type='text' name='author' value='$author' size='32'>	<br />			
				<label for='title'>Title *</label>
				<input type='text' name='title' value='$title' size='32'><br />
				<label for='publisher'>Publisher</label>
				<input type='text' name='publisher' value='$publisher' size='32'><br />
				<label for='year'>Year of Publication</label>
				<input type='text' name='year' value='$year' size='32'><br />
				<label for='edition'>Edition</label>
				<input type='text' name='edition' value='$edition' size='32'>
				<label for='ISBN_ISSN'>ISBN</label>
				<input type='text' name='ISBN_ISSN' value='$ISBN_ISSN' size='32'><br />  
				<label for='price'>Price</label>
				<input type='text' name='price' value='$price' size='32'><br />
				
      </fieldset>
			";
}

if($q == "PERIODICAL"){
	echo "<fieldset>
    	<h2>Purchase Request - Periodical Subscription</h2>.
    	
		
				<label for='title'>Title *</label>
				<input type='text' name='title' value='$title' size='32'><br />
				<label for='publisher'>Publisher</label>
				<input type='text' name='publisher' value='$publisher' size='32'><br />
				<label for='frequency'>Frequency of Publication</label>
				<input type='text' name='frequency' value='$frequency' size='32'><br />
				<label for='frequency'>Frequency of Publication</label>
				<input type='text' name='frequency' value='$frequency' size='32'><br />
	      <label for='ISBN_ISSN'>ISSN</label>
				<input type='text' name='ISBN_ISSN' value='$ISBN_ISSN' size='32'><br />  
				<label for='price'>Price</label>
				<input type='text' name='price' value='$price' size='32'><br />
				<label for='price'>Price</label>
      </fieldset>
			";
}


if($q == "ELECTRONIC"){
	echo "<fieldset>
    	<h2>Purchase Request - Electronic Resource</h2>.
    	
		
				<label for='title'>Resource Title *</label>
				<input type='text' name='title' value='$title' size='32'><br />
				<label for='publisher'>Publisher</label>
				<input type='text' name='publisher' value='$publisher' size='32'><br />
				<label for='frequency'>Frequency of Publication</label>
				<input type='text' name='frequency' value='$frequency' size='32'><br />
				<label for='ISBN_ISSN'>ISSN Number</label>
				<label for='frequency'>Frequency of Publication</label>
				<input type='text' name='frequency' value='$frequency' size='32'><br />
				<input type='text' name='ISBN_ISSN' value='$ISBN_ISSN' size='32'><br />  
				<label for='price'>Price</label>
				<input type='text' name='price' value='$price' size='32'><br />
				<label for='price'>Price</label>
      </fieldset>
			";
}


if($q == "VIDEOTITLE"){
	echo "<fieldset>
	
	<h2>Purchase Suggestions - Video</h2>
  		  <label for='format'>Format *</label>
				 <select name='reserve' value='$reserve'>
						 <option value='DVD'>DVD</option>
						 <option value='VHS'>VHS</option>
						 <option value='16MM'>16MM</option>
						 <option value='other'>other</option>
						 
						 
				 </select>
				<label for='title'>Title *</label>
       	<input type='text' name='title' value='$title' size='32'><br />
       	<label for='director'>Director</label>
				<input type='text' name='frequency' value='$director' size='32'><br />
				<label for='publisher'>Publisher</label>
				<input type='text' name='publisher' value='$publisher' size='32'><br />
				<label for='year'>Year</label>
				<input type='text' name='year' value='$year' size='32'><br />
      </fieldset>
			";
			
}
?>