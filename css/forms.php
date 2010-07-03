<?php require "_header.php"; ?>

.button {
	<?php if( $isIE ) { ?>
	padding-top: 2px;
	<?php } else { ?>
	padding: 1px 10px;
	<?php } ?>
	color: <?php echo $contentFG; ?>;
	border: 1px solid <?php echo $menuBG1; ?>;
	background: <?php echo $menuBG1; ?> url(../images/bg_<?php echo $activeScheme; ?>.jpg) scroll no-repeat -95px -8px;
	cursor: pointer; 
	cursor: hand;
	}
	input:hover { background-position: -95px -80px; }

form.styled {
	margin: 1em 0px;
	}
	form.styled .box {
		border: 1px solid <?php echo $menuBG1; ?>;
		}
	form.styled div.formRow {
		margin-top: .5em;
		position: relative;
		clear: left;
		}
	form.styled label.format {
		display: block;
		width: 100px;
		float: left;
		text-align: right;
		}
	form.styled div.suggest { margin-left: 110px; }
	form.styled .input { 
		margin-left: 10px; 
		}
	
	form.styled .ohTheHumanity { display: none; }
	
	form.styled .submit { margin-top: 2em; }