<?php

if (!c::get('MinifyHTML')) {
	require_once(__DIR__ . DS . 'library' . DS . 'Minify_HTML.php');

	function minifyhtml($buffer)
	{
	    return Minify_HTML::minify($buffer);
	}

	ob_start('minifyhtml');
}
