<?php 
// data sanitization
function sanitize($value)
{
	$value=trim($value);	
	$value=stripslashes($value);	
	$value=strip_tags($value);
	$value=htmlspecialchars($value);
	return $value;
}
 ?>
