<?php
/*
var Browser = {
	IE:           !!( window.attachEvent && !window.opera ),
	IE6:          /MSIE\s6/.test( navigator.appVersion ),
	IE7:          /MSIE\s7/.test( navigator.appVersion ),
	Gecko:        navigator.userAgent.indexOf( 'Gecko' ) > -1 && navigator.userAgent.indexOf( 'KHTML' ) == -1,
	Opera:        !!window.opera,
	WebKit:       navigator.userAgent.indexOf( 'AppleWebKit/' ) > -1,
	MobileSafari: !!navigator.userAgent.match( /Apple.*Mobile.*Safari/ )
};
*/
Class Browser_Obj {
	function Browser_Obj(){
		preg_match( "/(?:MSIE\s\d*)|(?:Firefox)|(?:Safari)/i", $_SERVER['HTTP_USER_AGENT'], $temp );
		$this->name = $temp[0];
		
		$this->IE 		= ( $this->name == "MSIE" );
		$this->Firefox 	= ( $this->name == "Firefox" );
		$this->Safari 	= ( $this->name == "Safari" );
	}
}
$Browser = new Browser_Obj();


echo var_dump($Browser->Firefox);
?>