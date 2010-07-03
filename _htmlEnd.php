	
	</div>
	
	<div id="menu">
		<ul id="nav">
			<li class="right"><a href="resume_s_m_light.pdf">PDF Resume</a></li>
			<li class="right"><a href="resume_s_m_light.doc">DOC Resume</a></li>
			<?php for( $i = 0; $i < count( $siteMenu ); $i++ ) { ?>
			<li<?php if( $section[0] === $i ) { echo " class=\"active\""; } ?>><a href="<?php echo $siteMenu[$i]; ?>.php"><?php echo $siteMenu[$i]; ?></a></li>
			<?php } ?>
		</ul>
	</div>

	<div id="footer">
	</div>
	
	
</div>

</body>
</html>