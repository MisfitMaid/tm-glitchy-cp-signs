<?php

function genLoc(string $dir): void { // shame about season two
	foreach(glob($dir . "/*") as $file) {
		if (str_ends_with($file, ".loc")) continue;
		
		$path = "https://misfitmaid.github.io/tm-glitchy-cp-signs/$file";
		file_put_contents($file . ".loc", $path);
	}
}

genLoc("smpte");
