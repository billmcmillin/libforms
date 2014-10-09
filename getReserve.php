<?php
$q=$_GET["q"];


if($q == "Yes"){
		echo "<fieldset>
    	      <h2>Reserve Request Form</h2>
							<label for='author'>Author(s)/Editor(s) *</label>
							<input type='text' name='author' value='$author' size='32'>	<br />			
							<label for='title'>Title *</label>
							<input type='text' name='title' value='$title' size='32'><br />
    	      
          </fieldset>
			";
}

if($q == "No"){
		echo "<fieldset>
    	    	      <h2>Item Information</h2>
      
      <fieldset>
 
				<label for='type'>Material Type *</label>
				<select name='type' onChange='showCD(this.value)'>
					<option value=''>Select a material type</option>
					<option value='BOOK'>BOOKS</option>
					<option value='PERIODICAL'>PERIODICAL SUBSCRIPTION</option>
					<option value='ELECTRONIC'>ELECTRONIC RESOURCE</option>
					<option value='VIDEOTITLE'>VIDEO TITLE</option>
        </select>
				<div id='txtHelp'></div>

      </fieldset>
			";
}

if($q == ""){
		echo 'Please indicate if this is for course reserve';
}

?>