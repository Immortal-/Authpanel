<?
/*
 * PasteBins Code
* Coded by PasteBin
* Credits: 
* _  PasteBin I stole their Highlighting script and used it in source.php *Sorry pastebin I love you guys*
* _  8/11/2013
* */
?>
document.write('<style>		div.embedPastebin { padding: 0; color: #000; margin: 0; font-family: monospace; background: #eee; border: 1px solid black; }		div.embedPastebin { border: none; }		div.embedPastebin div.embedFooter { background: #ccc; font-size: 100%; padding: 0px 6px; }		div.embedPastebin div.embedFooter a,		div.embedPastebin div.embedFooter a:visited { color: blue; }		div.embedPastebin div.embedFooter a:hover { color: red; }		.noLines ol { list-style-type: none; padding-left: 0.5em; }		.embedPastebin{background-color:#F8F8F8;border:1px solid #ddd;font-size:12px;overflow:auto;margin: 0 0 0 0;padding:0 0 0 0;line-height:21px}		.embedPastebin div { line-height:21px; font-family:Consolas, Menlo, Monaco, Lucida Console,\'Bitstream Vera Sans Mono\',\'Courier\',monospace; }		ol { margin:0; padding: 0 0 0 48px}		li.ln-xtra .de1, li.ln-xtra .de2 {background:#FFFF88;}.php .de1, .php .de2 {-moz-user-select: text;-khtml-user-select: text;-webkit-user-select: text;-ms-user-select: text;user-select: text;margin:0; padding: 0 5px; background:none; vertical-align:top;color:#000;border-left: 1px solid #ccc; margin: 0 0 0 -7px; position: relative; background: #ffffff;}.php  {color:#ACACAC;}.php .imp {font-weight: bold; color: red;}.php li, .php .li1 {-moz-user-select: -moz-none;-khtml-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;}.php .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}.php .kw1 {color: #b1b100;}.php .kw2 {color: #000000; font-weight: bold;}.php .kw3 {color: #990000;}.php .kw4 {color: #009900; font-weight: bold;}.php .co1 {color: #666666; font-style: italic;}.php .co2 {color: #666666; font-style: italic;}.php .co3 {color: #0000cc; font-style: italic;}.php .co4 {color: #009933; font-style: italic;}.php .coMULTI {color: #666666; font-style: italic;}.php .es0 {color: #000099; font-weight: bold;}.php .es1 {color: #000099; font-weight: bold;}.php .es2 {color: #660099; font-weight: bold;}.php .es3 {color: #660099; font-weight: bold;}.php .es4 {color: #006699; font-weight: bold;}.php .es5 {color: #006699; font-weight: bold; font-style: italic;}.php .es6 {color: #009933; font-weight: bold;}.php .es_h {color: #000099; font-weight: bold;}.php .br0 {color: #009900;}.php .sy0 {color: #339933;}.php .sy1 {color: #000000; font-weight: bold;}.php .st0 {color: #0000ff;}.php .st_h {color: #0000ff;}.php .nu0 {color: #cc66cc;}.php .nu8 {color: #208080;}.php .nu12 {color: #208080;}.php .nu19 {color:#800080;}.php .me1 {color: #004000;}.php .me2 {color: #004000;}.php .re0 {color: #000088;}.php .ln-xtra, .php li.ln-xtra, .php div.ln-xtra {color:black;background:#FFFF88;}.php span.xtra { display:block; }	</style>	<div class="embedPastebin">		<div class="php"><ol><li class="li1"><div class="de1"><span class="sy1">&lt;?</span></div></li><li class="li2"><div class="de2"><span class="coMULTI">/*</span></div></li><li class="li1"><div class="de1"><span class="coMULTI">&nbsp;* Example by Immortal</span></div></li><li class="li2"><div class="de2"><span class="coMULTI">&nbsp;* &nbsp; &nbsp; &nbsp;AuthCode</span></div></li><li class="li1"><div class="de1"><span class="coMULTI">&nbsp;* &nbsp; Version 1</span></div></li><li class="li2"><div class="de2"><span class="coMULTI">&nbsp;* */</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li><li class="li2"><div class="de2"><span class="coMULTI">/*</span></div></li><li class="li1"><div class="de1"><span class="coMULTI">&nbsp;* API INFO: m = Mode, Options: n = GetName, c = Check Code.</span></div></li><li class="li2"><div class="de2"><span class="coMULTI">&nbsp;* */</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">// Gets Remote Data Fast.</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> GetData<span class="br0">&#40;</span><span class="re0">$url</span><span class="br0">&#41;</span><span class="br0">&#123;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$ch</span><span class="sy0">=</span><span class="kw3">curl_init</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw3">curl_setopt</span><span class="br0">&#40;</span><span class="re0">$ch</span><span class="sy0">,</span> CURLOPT_URL<span class="sy0">,</span> <span class="re0">$url</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw3">curl_setopt</span> <span class="br0">&#40;</span><span class="re0">$ch</span><span class="sy0">,</span> CURLOPT_RETURNTRANSFER<span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$returned</span> <span class="sy0">=</span> <span class="kw3">curl_exec</span> <span class="br0">&#40;</span><span class="re0">$ch</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw3">curl_close</span> <span class="br0">&#40;</span><span class="re0">$ch</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$returned</span><span class="sy0">;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li><li class="li2"><div class="de2">&nbsp;</div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//Get\'s Valid or invalid based on name + authcode.</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> CheckAuthCode<span class="br0">&#40;</span><span class="re0">$name</span><span class="sy0">,</span><span class="re0">$code</span><span class="br0">&#41;</span><span class="br0">&#123;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$url</span> <span class="sy0">=</span> <span class="st0">&quot;#APILINK/api.php?m=c&amp;u=<span class="es4">$name</span>&amp;c=<span class="es4">$code</span>&quot;</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$response</span> <span class="sy0">=</span> GetData<span class="br0">&#40;</span><span class="re0">$url</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span><span class="br0">&#40;</span><span class="re0">$response</span> <span class="sy0">==</span> <span class="st0">&quot;valid&quot;</span><span class="br0">&#41;</span><span class="br0">&#123;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="st0">&quot;Valid AuthRequest!&quot;</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="co1">//Get\'s Username based on Authcode</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="kw2">function</span> GetUsername<span class="br0">&#40;</span><span class="re0">$authcode</span><span class="br0">&#41;</span><span class="br0">&#123;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$url</span> <span class="sy0">=</span> <span class="st0">&quot;#APILINK/api.php?m=n&amp;c=<span class="es4">$authcode</span>&quot;</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="re0">$response</span> <span class="sy0">=</span> GetData<span class="br0">&#40;</span><span class="re0">$url</span><span class="br0">&#41;</span><span class="sy0">;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">return</span> <span class="re0">$response</span><span class="sy0">;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span></div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; </div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; </div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; <span class="sy1">?&gt;</span></div></li><li class="li2"><div class="de2">&nbsp;</div></li><li class="li1"><div class="de1">&lt;html&gt;</div></li><li class="li2"><div class="de2">&lt;head&gt;</div></li><li class="li1"><div class="de1">&lt;/head&gt;</div></li><li class="li2"><div class="de2">&nbsp;</div></li><li class="li1"><div class="de1">&lt;body&gt;</div></li><li class="li2"><div class="de2">&lt;div align=&quot;center&quot;&gt;</div></li><li class="li1"><div class="de1"><span class="sy1">&lt;?</span> <span class="kw1">if</span><span class="br0">&#40;</span><span
 class="kw3">isset</span><span class="br0">&#40;</span><span class="re0">$_POST</span><span class="br0">&#91;</span><span class="st_h">\'u\'</span><span class="br0">&#93;</span><span class="br0">&#41;</span> <span class="sy0">&amp;&amp;</span> <span class="kw3">isset</span><span class="br0">&#40;</span><span class="re0">$_POST</span><span class="br0">&#91;</span><span class="st_h">\'c\'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#123;</span><span class="re0">$name</span> <span class="sy0">=</span> <span class="re0">$_POST</span><span class="br0">&#91;</span><span class="st_h">\'u\'</span><span class="br0">&#93;</span><span class="sy0">;</span><span class="re0">$code</span> <span class="sy0">=</span> <span class="re0">$_POST</span><span class="br0">&#91;</span><span class="st_h">\'c\'</span><span class="br0">&#93;</span><span class="sy0">;</span><span class="kw1">echo</span> CheckAuthCode<span class="br0">&#40;</span><span class="re0">$name</span><span class="sy0">,</span><span class="re0">$code</span><span class="br0">&#41;</span><span class="sy0">;</span><span class="br0">&#125;</span><span class="sy1">?&gt;</span></div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &lt;form action=&quot;&quot; method=&quot;post&quot;&gt;</div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; Name: &lt;input type=&quot;text&quot; name=&quot;u&quot; /&gt; &lt;br /&gt;</div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; AuthCode: &lt;input type=&quot;passsword&quot; name=&quot;c&quot; /&gt; &lt;br /&gt;</div></li><li class="li1"><div class="de1">&nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;submit&quot; value=&quot;Check AuthCode&quot; /&gt;</div></li><li class="li2"><div class="de2">&nbsp; &nbsp; &nbsp; &nbsp; &lt;/form&gt;</div></li><li class="li1"><div class="de1">&lt;/div&gt;</div></li><li class="li2"><div class="de2">&lt;/body&gt;</div></li><li class="li1"><div class="de1">&lt;/html&gt;</div></li></ol></div></div>');	
