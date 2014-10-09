<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/formtemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title></title>
<link rel="stylesheet" type="text/css" media="all" href="../../../includes/css/PrattCSS/screen.css" />
<link rel="stylesheet" type="text/css" media="all" href="../../../includes/css/PrattCSS/library_style.css" />
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body bgcolor="#f9f7f5">

     <div id="thinMarquee"><h1 class="thin1"><a href="http://library.pratt.edu/">Pratt Institute Libraries</a></h1></div>	
	
	<div class="headerBar">
		<div class="headerNav">
			<ul class="tabs">
				<li><a href="/about" title="">About</a></li>
				<li><a href="/services" title="">Services</a></li>
				<li><a href="/find_resources" title="">Find Resources</a></li>

				<li><a href="/research_assistance" title="">Research Assistance</a></li>
			</ul>
		</div><!-- close HeaderNav DIV -->
        
		<div class="searchBar">
			<a href="#" title="">Ask Us</a>
			<a class="last" href="http://cat.pratt.edu/" title="">PrattCat</a>

			
			<form method="post" action="http://library2.pratt.edu/"  >
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
	<!-- InstanceBeginEditable name="maincontent" success_general.php-->
	
	
	<?php
		
		$email = $_GET['email'];
	?>

		<p>Thank you for your request. 
        <?php if($email != ''){
			echo "A confirmation email has been sent to <strong>$email</strong>.</p>";
		}
        ?>
		
		<p>If you have any questions, please contact the Reference Desk:
		Tel. 718-636-3704,  Fax. 718-399-4220.</p>
		<p>Thanks! </p>

	<!-- InstanceEndEditable -->    
    </div>

      </div><!-- close body-->
</div><!-- close container -->
</body>
<!-- InstanceEnd --></html>
