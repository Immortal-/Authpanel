<?php 
/*
 * AuthPanel's Api
* Coded by Immortal
* Credits: Twitter's Bootstrap, Hosted 3rd party with a cdn
* _  PasteBin I stole their Highlighting script and used it in source.php *Sorry pastebin I love you guys*
* _  8/11/2013
* */
  require_once 'global.php';
/*
 * Very Simple api for others to validate their accounts.
 * 
 */
	if(isset($_REQUEST['m'])){
		$method = $_REQUEST['m'];
	}else{
		echo 'You need to provide a valid MODE via: api.php?m=';
	}


switch($method){
	case "c":
		if(isset($_REQUEST['u']) && isset($_REQUEST['c'])){
		
			$name = $_REQUEST['u'];
			$authcode = $_REQUEST['c'];
		
			$responce = CheckAuth($name,$authcode);
		
			echo $responce;
		
		}else{
		
			if(isset($_REQUEST['u'])){
				echo 'You must provide a username! <br />';
			}
		
			if(isset($_REQUEST['c'])){
				echo 'You must provide a AuthCode! <br />';
			}
		
		
		}
		break;
		
	case "n":
		if(isset($_REQUEST['c'])){
			$code = $_REQUEST['c'];
			$name = GetName($code);
			echo $name;
		}
		break;
	
}

?>
