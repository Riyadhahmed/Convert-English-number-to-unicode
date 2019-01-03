<?php

// Using class
class BanglaConverter {
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    
    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }
    
    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }
}

echo BanglaConverter::bn2en("This is ২০১৬\n"). '<br/>';
echo BanglaConverter::en2bn("42.23 আমার প্রিয় সংখ্যা\n"). '<br/>';


// using function

if (!function_exists('convert')) {
   function convert($number)
   {
      if (is_numeric($number)) {
         $search_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
         $replace_array = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
         $value = str_replace($search_array, $replace_array, $number);

         return $value;
      } else {
         return $number;
      }
   }
}

 echo  "32412 is converted to bangla unicode " . convert(32412) . '<br/>';