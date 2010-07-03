<?php require "_header.php"; ?>

div#menu {
	position: absolute;
	top: 64px;
	left: 0px;
	width: <?php echo $contentWidth - $sidebarWidth; ?>px;
	z-index: 3;
	}


ul#nav {
	font-size: .9em;
	list-style-type: none;
	}
	ul#nav li {
		display: inline;
		position: relative;
		top: 1px;
		}
	ul#nav li.right {
		float: right;
		<?php if( !$isIE ){ ?>
		position: relative;
		top: 1.1em;
		<?php } ?>
		}
	ul#nav li a {
		margin: 0px 4px;
		padding: 2px 10px;
		text-decoration: none;
		color: <?php echo $menuFG1; ?>;
		}
		ul#nav li.active a,
		ul#nav li a:hover {
			color: #FFFFFF;
			background: <?php echo $menuBG1; ?>;
			}