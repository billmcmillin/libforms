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
  
  $return_rows = true;
  if (preg_match("/^\s*(CREATE|INSERT|UPDATE|DELETE|DROP)/i",
  		$query_text)) {
  $return_rows= false;
  	}
  
  if ($return_rows) {
  	echo "<p>Results from your query:</p>";
  	echo "<ul>";
  	while ($row = mysql_fetch_row($result)) {
  		echo "<li>{$row[0]}</li>";
  	}
  	echo "</ul>";
  } else {
  	if ($result) {
  		echo "<p>Your query was processed successfully.</p>";
  		echo "<p>{$query_text}</p>";
  	}
  }
?>
