<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/formtemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>View Forms Data</title>
<link rel="stylesheet" type="text/css" media="all" href="css/screen.css" /> 
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
<form name='mainform' method="post" action="formresults.php" >

    <table>
	    <tr>
        	<td>Select a form: </td>
        	<td>
            	<select name="tablevalue">
					<option value="comments">Comments Form</option>
					<option value="reserves">Course Reserves Request Form</option>
					<option value="exhibit">Exhibits Request Form </option>
					<option value="ill">ILL Request Form </option>
					<option value="instructionrequest">Library Instruction Request Form</option>
					<option value="Materials Request Form">Materials Request Form</option>      
					<option value="roomreservations">Room Reservation Request Form</option>
					<option value="trialdb">Trial Database Feedback Form </option>                                   
				</select>
            </td>
        </tr>
    	
        <tr><td><br></td></tr>
        
        <tr>
        	<td>Submission Date: </td>
            <td>
            	From  <input name="month1" maxlength="2" size="2" type="text">(mm) &nbsp;<input name="day1" maxlength="2" size="2" type="text">(dd)&nbsp;  <input name="year1" maxlength="4" size="4" type="text">(yyyy)				
            </td>
        </tr>
        <tr>
        	<td><br />
            </td>
        	<td>
				To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="month2" maxlength="2" size="2" type="text">(mm)&nbsp; <input name="day2" maxlength="2" size="2" type="text">(dd)&nbsp; <input name="year2" maxlength="4" size="4" type="text">(yyyy)            
            </td>            
        </tr>
        
        <tr><td><br></td></tr>

		<tr><td align="center" colspan="2"><input type="submit" value="Submit" align="middle"></td></tr>
        <input type="hidden" name="REG_insert" value="valicationcheck"> 
        
    </table>

</form>

	<!-- InstanceEndEditable -->    
    </div>

      </div><!-- close body-->
</div><!-- close container -->
</body>
<!-- InstanceEnd --></html>
