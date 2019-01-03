<?php

// Using class
class NumberConverter {
    public static $unicode = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $english = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    
    public static function unicode($number) {
        return str_replace(self::$unicode, self::$english, $number);
    }
    
    public static function english($number) {
        return str_replace(self::$english, self::$unicode, $number);
    }
}


echo '<br/>';
echo '// Using OOP PHP Class Function';
echo '<br/><br/>';
echo 'This is an unicode number ১২৩৪৫৬  which convert to english number ' .  NumberConverter::unicode(" ১২৩৪৫৬"). '<br/>';
echo 'This is an english number 123456 which convert to unicode number ' .  NumberConverter::english('123456'). '<br/>';


// using function

if (!function_exists('unicode')) {
   function unicode($number)
   {
      
         $unicode = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
         $english = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
		  
         $value = str_replace($unicode, $english, $number);

         return $value;
     
   }
}

if (!function_exists('english')) {
   function english($number)
    {      
		  $unicode = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
          $english = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
		           
         $value = str_replace($english, $unicode, $number);

         return $value;
      
   }
}

echo '<br/>';
echo '// Using Normal PHP Function';
echo '<br/><br/>';

echo 'This is an unicode number ১২৩৪৫৬  which convert to english number ' .  unicode('১২৩৪৫৬'). '<br/>';
echo 'This is an english number 123456 which convert to unicode number ' .  english('123456'). '<br/>';