# Kirby Minify HTML Plugin

To install you have three options:

- Using the `kirby-cli`. Run `kirby plugin:install ian-cox/Kirby-MinifyHTML`.
- Using a `git submodule`. Run `git submodule add <REPOSITORY_URL> site/plugins/minifyhtml`.
- The old school way. Simply create a folder called **minifyhtml** into the plugins directory: ``site/plugins`` and drop the files on it.

No additional set up is required.

If you prefer to minify based on the current enviornment, you can add the option in your config file.
``c::set('MinifyHTML', FALSE);``

``c::set('MinifyHTML', TRUE);``

I recommend this option:

``if (kirby()->site()->user()) c::set('MinifyHTML', false);``


**Disclaimer:** *While the plugin is working without issue for me, further testing is still needed as there may be conflicts with Kirby’s internal output buffer method.*

This is a temporary fix until a hook can be used in the plugin.
More info about that [here](https://github.com/getkirby/kirby/issues/120).

## Known Issues
Plugin causes `f::download()` and `$file->download()` to break.
The files themselves are getting minified before download which is leading to corrupt files.


### Credits
Many thanks to Stephen Clay for his excellent [HTML minifier class](https://code.google.com/p/minify/source/browse/min/lib/Minify/HTML.php).

Also thanks to @lukasbestle @iksi and @shoesforindustry
