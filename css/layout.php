<?php require "_header.php"; ?>

* {
	margin: 0em;
	padding: 0em;
	border: 0px solid;
	}
body {
	font-family: Arial, Verdana, Helvetica, sans-serif;
	font-size: .9em;
	text-align: center;
	line-height: 1.35em;
	color: <?php echo $contentFG; ?>;
	background: <?php echo $bodyBG; ?> url(../images/bg_<?php echo $activeScheme; ?>.jpg) fixed no-repeat bottom right;
	}

div#window {
	margin: 0px auto;
	text-align: left;
	position: relative;
	width: <?php echo $contentWidth; ?>px;
	z-index: 2;
	}

div#header {
	padding: 10px 0px 25px;
	border-bottom: 1px solid <?php echo $menuBG1; ?>;
	position: absolute;
	top: 8px;
	left: 0px;
	width: 100%;
	z-index: 3;
	}
	div#header a {
		padding: 1px;
		font-size: 16px;
		text-decoration: none;
		display: block;
		}

div#content {
	margin: 0px;
	padding: 100px 50px 50px;
	line-height: 1.6em;
	position: relative;
	z-index: 2;
	
	background: <?php echo $contentBG; ?>;
	<?php $opacity = 90; ?>
	opacity: .<?php echo $opacity ?>;
	filter: alpha( opacity = <?php echo $opacity ?> );
	-moz-opacity: .<?php echo $opacity ?>;
	}
	
div#footer {
	margin: 0px auto;
	padding: 1em 0em;
	font-size: .8em;
	text-align: right;
	position: relative;
	z-index: 2;
	opacity: .<?php echo $opacity ?>;
	filter: alpha( opacity = <?php echo $opacity ?> );
	-moz-opacity: .<?php echo $opacity ?>;
	}
	div#footer a {
		padding: .5em 1em;
		color: <?php echo $menuBG1; ?>;
		text-decoration: none;
		}
		div#footer a:hover{
			text-decoration: underline;
			}