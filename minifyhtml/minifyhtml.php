<?php
if (c::get('MinifyHTML') !== FALSE):
	require_once 'library/Minify_HTML.php';
	
	function minifyhtml($buffer)
	{
	    return Minify_HTML::minify($buffer);
	}
	
	ob_start('minifyhtml');
endif;