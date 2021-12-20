<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
if ( check_palindrome('reviver') == 1){
    echo "string is Palindrome";
}
else{
    echo "Number is not palindrome";
}
?>