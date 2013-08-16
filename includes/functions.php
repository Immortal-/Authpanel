<?php

  //makes the hashcode used in making the authcode. 
	function MakeCode($name, $sitesalt = ""){
		if(empty($sitesalt)){
			$salt = publickey;
			$secureinfo = hash("sha256",$name . $salt);
			$code = md5($salt.hash("sha512",$secureinfo));
			return $code;
		}else{
			$salt = $sitesalt;
			$secureinfo = hash("sha256",$name . $salt);
			$code = md5($salt.hash("sha512",$secureinfo));
			return $code;
		}
	}
	
	// makes a serial based on a name and salt.
	function MakeAuth($name,$sitesalt = ""){
		$code = MakeCode($name,$sitesalt);
		$enc = encrypt($name . ":" .$code);
		
		return $enc;
		
	}
	
	//check serials based on name and provided code.
	function CheckAuth($name,$code,$sitesalt= ""){
		$_code = MakeCode($name,$sitesalt);
		$dec = decrypt($code);
		$info = explode(':',$dec);
		
		if($info[0] == $name){

			if($info[1] == $_code){
				return 'valid';
			}else{
				return 'invalid';
			}

		}else{
			return 'Error Decrypting.';
		}
	}
	
 	// Returns an encrypted & utf8-encoded
	function encrypt($pure_string) {
  		 $data = base64_encode($pure_string);
  		 $data2 = str_replace("=","",$data);
 	  
  		 return $data2;
	}

	// Returns decrypted original string
	function decrypt($encrypted_string) {
		$data = $encrypted_string . "=";
  		$data2 = base64_decode($data);
   		
  		return $data2;
	}
	
	//Get username based on authcode.
	function GetName($authcode){
		$Split = decrypt($authcode);
		$info = explode(':',$Split);
		
		return $info[0];
	}
	//checks to see if a get or post variable exists if so return true else false
	function IsThere($variable){
		$data = $_REQUEST[$variable];
		if(isset($data)){
			return true;
		}else{
			return false;
		}
	}
	
?>
