#AuthPanel Version 1.0.2#
=========

AuthPanel is supposed to be a very lite weight code based authencation system.


#ChangeLog:#
	- [x] Added site salt support to the make code and the check code.
	- [x] Made it very easy to include authpanel config / functions via: require_once('./includes/config.php');
	- [x] Added a .Htaccess for the includes folder, I have it block all access but, localhost for testing and sever sided script calls.
	- [ ] Make code Visualy appealing
	- [ ] Optimize code


#Coders note:#
	I know I promised you guys cleaner code in this update, Im sorry I currently do not have the time available to recode this.
	When some time is freed up in my life I will recode for the community!



#Api Usage:#

	To use AuthPanels Api you need to know a few things.

	One: AuthPanel has a few diffrent "modes" for example we have [ m=c ] which means mode = check we also have [ m=m ] which means mode=make aswell as [ m=n ] which means mode=name.

	Two: You need to know what parameters each mode needs. Such has mode c takes three paramters such as [u,c,ss] u= username, c= usernames authcode, ss= SiteSalt this is a site specific code that is used as a salt, if not supplyed will use default salt you set in /includes/config.php
	
	for better api please look at the offical documentation on 
[AuthPanel ApiDoc](http://authpanel.pw/api.php)
