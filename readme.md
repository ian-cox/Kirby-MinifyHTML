# Kirby Minify HTML Plugin

To install, simply drop the **minifyhtml** folder into the plugins directory: ``site/plugins``.


No additional set up is required.

If you prefer to minify based on the current enviornment, you can add the option in your config file.
``c::set('MinifyHTML', FALSE);``

``c::set('MinifyHTML', TRUE);``


**Disclaimer:** *While the plugin is working without issue for me, further testing is still needed as there may be conflicts with Kirby’s internal output buffer method.*

This is a temporary fix until a hook can be used in the plugin.
More info about that [here](https://github.com/getkirby/kirby/issues/120).


Many thanks to Stephen Clay for his excellent [HTML minifier class](https://code.google.com/p/minify/source/browse/min/lib/Minify/HTML.php).
