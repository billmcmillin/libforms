<?php
  require './conn.php';
  
  $query_text = $_REQUEST['query'];
  $result = mysql_query($query_text);
  
  if (!$result){
  	die("<p>Error in executing SQL query " . $query_text . ": " .
  		mysql_error() . "</p>");
  }
  
  echo "<p>Results from your query:</p>";
  echo "<ul>";
  while ($row = mysql_fetch_row($result)) {
  	echo "<li>{$row[0]}</li>";
  }
  echo "</ul>";
?>
