<?php
/*
*	@Author: Immortal(https://github.com/Immortal-/)
*	@Date: 8/29/2013
*	@Licence: Gnu Gplv2
*	@LicenceLink: http://www.gnu.org/licenses/gpl-2.0.html	
*/
	class Authcode{
		/*
		* 	@Disc: Makes a new authcode 
		* 	@Var: $args1 is the user identifyer
		*   @Var: $args2 is the salt provided by the requestor
		*	@Var: $var1 is the adler32 hash of the user identifyer
		*	@Var: $var2 is the base64 encoded user identifyer followed by a : followed by the adler32 hash of the user identifyer
		*	@Var: $e is the exception that may or may not happen error handling
		*	@Return: an authcode
		*/
		function make($args1 , $args2){
			try{
				if(empty($args2)){
					return 'You must provide a sitesalt!';
				}
				$args1 = strtolower($args1);
				$var1 = hash('adler32',$args1 . $args2);
				$var2 = base64_encode($args1 .':'. $var1);
				return $var2;
			}catch(Exception $e){
				return $e->getMessage();
			}
		}
		/*
		* 	@Disc: Checks to see if an authcode is valid or not 
		* 	@Var: $args1 is the user identifyer
		*   @Var: $args2 is the salt provided by the requestor
		*	@Var: $args3 is the authcode to check
		*	@Var: $_pvar1 is a a generated authcode 
		*	@Var: $var1 is first the decoded authcode then split into parts
		*	@Var: $e is the exception that may or may not happen error handling
		*	@Return: Valid or invalid
		*/
		function check($args1, $args2, $args3){
			try{
				$_pvar1 = $this->make($args1,$args2);
				$args1 = strtolower($args1);
				$var1 = base64_decode($args3);
				$var1 = explode(':', $var1);

				if($args1 == $var1[0]){
					if($_pvar1 == $args3){
						return 'Valid';
					}else{
						return 'Invalid code';
					}
				}else{
					return "Invalid name";
				}
			

			} catch (Exception $e) {
				return $e->getMessage();
			}
		}
		/*
		*	@Disc: Get's username based on authcode
		*	@Var: $args1 is an authcode
		*	@Var: $var1 is the decoded authcode then is broken into peices
		*	@Var: $e is the exception that may or may not happen error handling
		*	@Return: the username
		*/
		function getName($args1){
			try{
				$var1 = base64_decode($args1);
				$var1 = explode(':', $var1);
				return $var1[0];
			}catch(Exception $e){
				return $e->getMessage();
			}

		} 
	}
?>
