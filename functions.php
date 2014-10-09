<?php


function GetSQLValueString($theValue, $theType, $theDefinedValue = "",
$theNotDefinedValue = "")
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) :
$theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue :
$theNotDefinedValue;
      break;
  }
  return $theValue;
}


 Function alternateRowColor() {
      global $rowStyle;
      $rowStyle ++;
      If ($rowStyle%2 == 1) {
           Return "row1";
      } Else {
           Return "row2";
      }
  }



//other validation functions

  Function antiSlash($strValue) {
      If ($strValue != "") {
          $strValue = stripslashes($strValue);
          $strValue = str_replace("\"", "&quot;", $strValue); # fixes broken html input field problem
      }
      Return $strValue;
  }


  Function declareError($bolBold) {
      global $strError;
      If ($strError != "") {
	  	  $haserror = TRUE;
          If ($bolBold == TRUE) {
              echo "<b><font color='red'>$strError</font></b><p>";
          } Else {
              echo "<font color='red'>$strError</font><p>";
          }
      }else
	  	  $haserror = FALSE;
	return $haserror;
  }


  Function fillError($strValue) {
      global $strError;
      If ($strError == "") {
           $strError = $strValue;
		   //echo $strError;
      }
  }


  Function validateText($strFieldName, $strValidate, $intMin, $intMax, $bolRequired, $bolHTML) {
      global $strError;
     
      If ($bolHTML == FALSE) {
          $strValidate = Trim(strip_tags($strValidate));
      } Else {
          $strValidate = Trim($strValidate);
      }
      If ($bolRequired == TRUE OR $strValidate != "") {
          If ($strValidate=="") {
			 // echo "strValidate==null";
              fillError("$strFieldName is required.");
              Return $strValidate;
          } Else {
              $intField = strlen($strValidate);
              If (($intField >= $intMin) AND ($intField <= $intMax)) {
                  Return $strValidate;
              } Else {
                  If ($intMin==$intMax) {
                       fillError("$strFieldName must be exactly $intMax characters long.");
                       Return $strValidate;
                  } Else {
                       fillError("$strFieldName must be between $intMin and $intMax characters in length.");
                       Return $strValidate;
                  }
              }
          }
      } Else {
          Return $strValidate;
      }
  }



  Function validateDate($strFieldName, $strValidate, $bolRequired, $bolHTML) {
        global $strError;
      
        If ($bolHTML == FALSE) {
            $strValidate = Trim(strip_tags($strValidate));
        } Else {
            $strValidate = Trim($strValidate);
        }



        If ($bolRequired == TRUE OR $strValidate != "") {
            If ($strValidate=="") {
  			 // echo "strValidate==null";
                fillError("$strFieldName is required.");
                Return $strValidate;
            } Else {				
				if(preg_match(("/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/"),$strValidate)===0) {
					fillError("$strFieldName format is not correct. Please use the format yyyy-mm-dd"); 
					Return $strValidate;
				}
				else
					Return $strValidate;
            }
        } Else {
            Return $strValidate;
        }
  }


  Function validateChoice($strFieldName, $strValidate) {
      global $strError;
      $strValidate = strip_tags($strValidate);
      If ($strValidate == "") {
           fillError("$strFieldName is required.");
      } Else {
           Return $strValidate;
      }
  }

  Function validateEmail($strFieldName, $strValidate, $bolRequired) {
      global $strError;
      $strValidate = trim(strtolower(strip_tags($strValidate)));

      If ($bolRequired == TRUE OR $strValidate != "") {
          If ($strValidate=="") {
              fillError("$strFieldName is required.");
             // Return $strValidate;
          } Else {
            if(preg_match(("/^([a-zA-Z0-9._-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/"),$strValidate)===0) {
					fillError("Email format is not correct.");
					Return $strValidate;
			}
			else
				Return $strValidate;	
          }
      } Else {
          Return $strValidate;
      }
  }
  
  

 function validateid($strFieldName, $strValidate, $bolRequired){
      global $strError;
      $strValidate = trim(strtolower(strip_tags($strValidate)));
	  
	    If ($bolRequired == TRUE OR $strValidate != "") {
          If ($strValidate=="") {
              fillError("$strFieldName is required.");
             // Return $strValidate;
          } Else {
            if(preg_match(("/^[\d.]{7}+$/"),$strValidate)===0) {
					fillError("Pratt ID format is not correct.");
					Return $strValidate;
			}
			else
				Return $strValidate;	
          }
      } Else {
          Return $strValidate;
      }
	}
	

 function validatebarcode($strFieldName, $strValidate, $bolRequired){
      global $strError;
      $strValidate = trim(strtolower(strip_tags($strValidate)));
	  
	    If ($bolRequired == TRUE OR $strValidate != "") {
          If ($strValidate=="") {
              fillError("$strFieldName is required.");
             // Return $strValidate;
          } Else {
            if(preg_match(("/^[\d.]{14}+$/"),$strValidate)===0) {
					fillError("Pratt barcode format is not correct.");
					Return $strValidate;
			}
			else
				Return $strValidate;	
          }
      } Else {
          Return $strValidate;
      }
	}
	
	
	
  Function validateNumber($strFieldName, $strValidate, $intMin, $intMax, $bolRequired) {
      global $strError;
      $strValidate = Trim(strip_tags($strValidate));
      $strValidate = str_replace(" ", "", $strValidate);
      $strValidate = str_replace(")", "", $strValidate);
      $strValidate = str_replace("(", "", $strValidate);
      $strValidate = str_replace("-", "", $strValidate);

      If ($bolRequired == TRUE OR $strValidate != "") {
          If ($strValidate=="") {
              fillError("$strFieldName is required.");
              Return $strValidate;
          } Else {
              $intField = strlen($strValidate);
              If (($intField >= $intMin) AND ($intField <= $intMax)) {
                  If (is_numeric($strValidate)===TRUE) {
                       Return $strValidate;
                  } Else {
                       fillError("$strFieldName must be purely numeric.");
                       Return $strValidate;
                  }
              } Else {
                  If ($intMin==$intMax) {
                       fillError("$strFieldName must be exactly $intMax digits long.");
                       Return $strValidate;
                  } Else {
                       fillError("$strFieldName must be between $intMin and $intMax digits in length.");
                       Return $strValidate;
                  }
              }
          }
      } Else {
          Return $strValidate;
      }
  }

Function getTimediff($t1,$t2)
{
$a1 = explode(":",$t1);
$a2 = explode(":",$t2);
$time1 = (($a1[0]*60*60)+($a1[1]*60)+($a1[2]));
$time2 = (($a2[0]*60*60)+($a2[1]*60)+($a2[2]));
$diff = abs($time1-$time2);
$hours = floor($diff/(60*60));
$mins = floor(($diff-($hours*60*60))/(60));
$secs = floor(($diff-(($hours*60*60)+($mins*60))));
$result = $hours.":".$mins.":".$secs;
return $result;
}

function getTotalTime($t1, $t2){
	$a1 = explode(":",$t1);
	$a2 = explode(":",$t2);
	$time1 = (($a1[0]*60*60)+($a1[1]*60)+($a1[2]));
	$time2 = (($a2[0]*60*60)+($a2[1]*60)+($a2[2]));
	$diff = $time1 + $time2;
	$hours = floor($diff/(60*60));
	$mins = floor(($diff-($hours*60*60))/(60));
	$secs = floor(($diff-(($hours*60*60)+($mins*60))));
	$result = $hours.":".$mins.":".$secs;
	return $result;	
}  
	  
	  
?>