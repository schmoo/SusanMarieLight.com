<?php require "_header.php"; ?>


div.resElement {
	margin-left: 190px;
	clear: both;
	}

	div.resElement h3 {
		margin-top: 1em;
		text-align: center;
		}
		div.resElement h3 span {
			font-weight: normal;
			display: block;
			}

	div.resElement div.positionHeader p {
		border-bottom: 1px dotted <?php echo $menuBG1; ?>;
		}
	div.resElement p {
		text-align: right;
		}
		div.resElement p b,
		div.resElement span.left {
			float: left;
			text-align: left;
			}
	div.resElement p.indent {
		padding: 0px 1em;
		text-align: left;
		}
	div.resElement p.plain {
		text-align: left;
		}

	div.resElement ul { margin-left: 3em; }
	
	div.resElement div.dates {
		float: right;
		position: relative;
		<?php if( $isIE ) { echo "top: 1em;"; } ?>
		}


table td {
	padding: 0px 5px 5px;
	vertical-align: top;
	}