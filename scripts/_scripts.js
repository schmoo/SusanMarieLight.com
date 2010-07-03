
function $( id ) { return document.getElementById( id ); }
function _( tag ) { return document.getElementsByTagName( tag.toUpperCase() ); }

function update() {
	var source = document.forms.regexTester.src;
	var testex = document.forms.regexTester.regex;
	if( source.value != "" && testex.value != "" ) {
		var sense = ( document.forms.regexTester.getAll.checked )? "g": "";
		sense += ( document.forms.regexTester.sensitive.checked )? "i": "";
		var show = $( "result" );
		show.innerHTML = "";
		
		var regex = RegExp( "" + document.forms.regexTester.regex.value.replace( /\s+/g, "\\s" ) + "", sense );	
		$( "currRegex" ).innerHTML = regex;
		if( regex.test( source.value ) ) {
			show.innerHTML = source.value.replace( regex, "<span class=\"highlight\">" + RegExp.lastMatch + "</span>" );
		}
	}
}

siteRoot = /^http:\/\/(?:www.)?susanmarielight.com/;
window.onload = function() {
	links = _( "a" );
	var testing = /local/.test( document.location );
	for( var c = 0; c < links.length; c++ ) {
		node = links[c];
		node.onclick = function() { if( this.blur ) { this.blur(); } }
		if( !siteRoot.test( node.href ) && !testing ) { node.target = "_blank"; }
	}
	
	if( document.forms.regexTester ) {
		document.forms.regexTester.src.onkeyup = update;
		document.forms.regexTester.regex.onkeyup = update;
		document.forms.regexTester.sensitive.onclick = update;
		document.forms.regexTester.getAll.onclick = update;
	}
}