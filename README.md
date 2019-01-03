# Convert English number to Unicode or Unicode to English
Simple php code to Convert English number to Unicode or Unicode to English    


   You can add this code your any php framework    
   
   For Codigniter pls follow    
   
   Create a helper php file in application/helpers folder like convert_helper.php    
   Then load your helper file using autoload. Go to config/autoload.php file and add you file name into $config['helpers'] = 'convert'    
   Now you can access this function any where in your project    
   
   
   
##  Using OOP PHP Class Function  


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

    echo 'This is an unicode number ১২৩৪৫৬  which convert to english number ' .  NumberConverter::unicode(" ১২৩৪৫৬"). '<br/>';
    echo 'This is an english number 123456 which convert to unicode number ' .  NumberConverter::english('123456'). '<br/>';    
	
	
	Output : 
	
	// This is an unicode number ১২৩৪৫৬ which convert to english number 123456    
    // This is an english number 123456 which convert to unicode number ১২৩৪৫৬     
	
	
## // Using Normal PHP Function    


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

    echo 'This is an unicode number ১২৩৪৫৬  which convert to english number ' .  unicode('১২৩৪৫৬'). '<br/>';    
    echo 'This is an english number 123456 which convert to unicode number ' .  english('123456'). '<br/>';   
   
    Output : 
	
	// This is an unicode number ১২৩৪৫৬ which convert to english number 123456   
    // This is an english number 123456 which convert to unicode number ১২৩৪৫৬     


 Find me on Facebook  : [ My Facebook profile link](https://www.facebook.com/morshed.riyad) \
 Find me on  Linkedin  : [My Linkedin profile  link](https://www.linkedin.com/in/monjur-morshed-riyadh-6aaba465/)  \
 Email me : riyadhahmed777@gmail.com