<?php

$activeScheme = 1;
$schemes = Array(
	//		pageBG		contentBG	contentFG	menuBG1		menuFG1		menuBG2		menuFG2		accent1		accent2
	//		0			1			2			3			4			5			6			7			8
	 Array( "001523",	"000000",	"FFFFFF",	"e05400",	"666666",	"FFFFFF",	"FFFFFF",	"3CA4E2",	"FFFFFF" )
	,Array( "1a1a1a",	"000000",	"FFFFFF",	"0fbbb9",	"666666",	"FFFFFF",	"FFFFFF",	"f71c5f",	"FFFFFF" )
	,Array( "000000",	"000000",	"EADEDD",	"541B15",	"BBBBBB",	"000000",	"000000",	"902D24",	"000000" )
	,Array( "211603",	"FFFFFF",	"FFFFFF",	"6FA2BC",	"666666",	"211603",	"FFFFFF",	"4E90AD",	"211603" )
);
$colors = $schemes[$activeScheme];

$contentWidth = 960;
$sidebarWidth = 0;

$bodyBG =		"#" . $colors[0];
$contentBG =	"#" . $colors[0];
$contentFG =	"#" . $colors[2];
$menuBG1 =		"#" . $colors[3];
$menuFG1 =		"#" . $colors[4];
$accent1 =		"#" . $colors[7];
$accent2 =		"#" . $colors[8];


?>