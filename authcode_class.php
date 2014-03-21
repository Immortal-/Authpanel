<?php
	/**
		@Author: Immortal(https://github.com/Immortal-/)
		@Date: 3/21/2014
		@Version: 1.0.4
		@Licence: Gnu Gplv2
		@LicenceLink: http://www.gnu.org/licenses/gpl-2.0.html	
	*/
	class Authcode{
			/**
			 * Rotate each string characters by n positions in ASCII table
			 * To encode use positive n, to decode - negative.
			 * With n = 13 (ROT13), encode and decode n can be positive.
			 *  Provided on: http://www.php.net/manual/en/function.str-rot13.php#75469
			 * @param string $string
			 * @param integer $n
			 * @return string
			 */
                                    function rotate($string, $n) {
                                        
                                        $length = strlen($string);
                                        $result = '';
                                        
                                        for($i = 0; $i < $length; $i++) {
                                            $ascii = ord($string{$i});
                                            
                                            $rotated = $ascii;
                                            
                                            if ($ascii > 64 && $ascii < 91) {
                                                $rotated += $n;
                                                $rotated > 90 && $rotated += -90 + 64;
                                                $rotated < 65 && $rotated += -64 + 90; 
                                            } elseif ($ascii > 96 && $ascii < 123) {
                                                $rotated += $n;
                                                $rotated > 122 && $rotated += -122 + 96;
                                                $rotated < 97 && $rotated += -96 + 122; 
                                            }
                                            
                                            $result .= chr($rotated);
                                        }
                                        
                                        return $result;
                                    }

		/*
		* 	@Disc: Makes a new authcode 
		* 	@param: $args1 is the user identifyer
		*           @param: $args2 is the salt provided by the requestor
		*	@param: $var1 is the adler32 hash of the user identifyer
		*	@param: $var2 is the base64 encoded user identifyer followed by a : followed by the adler32 hash of the user identifyer
		*	@param: $e is the exception that may or may not happen error handling
		*	@Return: an authcode
		*/
		function make($args1 , $args2){
			try{
				if(empty($args2)){
					return 'You must provide a sitesalt!';
				}
				$args1 = strtolower($args1);
				$var1 = hash('adler32',$args1 . $args2);
				$var2 = strrev(base64_encode(strrev($this->rotate($args1. ':'.$var1,-10)))); // base64_encode($args1 .':'. $var1); // -- REMOVED for V1.0.4
				return $var2;
			}catch(Exception $e){
				return $e->getMessage();
			}
		}
		/*
		* 	@Disc: Checks to see if an authcode is valid or not 
		* 	@param: $args1 is the user identifyer
		*           @param: $args2 is the salt provided by the requestor
		*	@param: $args3 is the authcode to check
		*	@param: $_pvar1 is a a generated authcode 
		*	@param: $var1 is first the decoded authcode then split into parts
		*	@param: $e is the exception that may or may not happen error handling
		*	@Return: Valid or invalid
		*/
		function check($args1, $args2, $args3){
			try{
				$_pvar1 = $this->make($args1,$args2);
				$args1 = strtolower($args1);
				$var1 = $this->rotate(strrev(base64_decode(strrev($args3))),10);
				$var1 = explode(':', $var1);
				if($args1 == $var1[0]){
					if($_pvar1 == $args3){
						return 'Valid';
					}else{
						return 'Invalid code';
					}
				}else{

					return "Invalid name  is: " . $var1[0] . " Expecting: ". $args1;
				}


			} catch (Exception $e) {
				return $e->getMessage();
			}
		}
		/*
		*	@Disc: Get's username based on authcode
		*	@param: $args1 is an authcode
		*	@param: $var1 is the decoded authcode then is broken into peices
		*	@param: $e is the exception that may or may not happen error handling
		*	@Return: the username
		*/
		function getName($args1){
			try{
				$var1 = $this->rotate(strrev(base64_decode(strrev($args1))),10);  //base64_decode($args3);  // -- REMOVED for V1.0.4
				$var1 = explode(':', $var1);
				return $var1[0];
			}catch(Exception $e){
				return $e->getMessage();
			}

		} 
	}

	?>