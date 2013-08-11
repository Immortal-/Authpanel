<?php
/*
 * AuthPanel's Functions
* Coded by Immortal
* Credits: Twitter's Bootstrap, Hosted 3rd party with a cdn
* _  PasteBin I stole their Highlighting script and used it in source.php *Sorry pastebin I love you guys*
* _ jQuery hosted officaly
* _  8/11/2013
* */
  //makes the hashcode used in making the authcode. 
	function MakeCode($name){
		$salt = publickey;
		$secureinfo = hash("sha256",$name . $salt);
		$code = md5($salt.hash("sha512",$secureinfo));
		return $code;
	}
	
	// makes a serial based on a name and salt.
	function MakeAuth($name){
		$code = MakeCode($name);
		$enc = encrypt($name . ":" .$code);
		
		return $enc;
		
	}
	
	//check serials based on name and provided code.
	function CheckAuth($name,$code){
		$salt = publickey;
		$_code = MakeCode($name);
		
		$dec = decrypt($code);
		$info = explode(':',$dec);
		
		//return $info[0] . ':' . $info[1];
		
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
	
?>
