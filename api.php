<?php 

  require_once ('./includes/config.php');
/*
 * Very Simple api for others to validate their accounts.
 * 
 */
  if(IsThere('m')){
    	$method = $_REQUEST['m'];
	}else{
		echo 'You need to provide a valid MODE via: api.php?m=';
	}


switch($method){
	case "c":
		if(IsThere('u') && IsThere('c')){
			if(IsThere('ss')){
				$sitesalt = $_REQUEST['ss'];
				$name = $_REQUEST['u'];
				$authcode = $_REQUEST['c'];
				$responce = CheckAuth($name,$authcode,$sitesalt);
				echo $responce;
			}else{
				$name = $_REQUEST['u'];
				$authcode = $_REQUEST['c'];
				$responce = CheckAuth($name,$authcode);
				echo $responce;
			}
		
		}else{
		
			if(IsThere('u')){
				echo 'You must provide a username! <br />';
			}
		
			if(IsThere('c')){
				echo 'You must provide a AuthCode! <br />';
			}
		
		
		}
		break;
		
	case "n":
		if(IsThere('c')){
			$code = $_REQUEST['c'];
			$name = GetName($code);
			echo $name;
		}
		break;

	case "m":
		if(IsThere('u')){
			if(IsThere('ss')){
				$sitesalt = $_REQUEST['ss'];
				$name = $_REQUEST['u'];
				$authcode = MakeAuth($name,$sitesalt);
				echo $authcode;
			}else{
				$name = $_REQUEST['u'];
				$authcode = MakeAuth($name);
				echo $authcode;
			}

	 	}else{
			echo 'You must provide a username! <br />';
		}
		break;
	
}

?>
