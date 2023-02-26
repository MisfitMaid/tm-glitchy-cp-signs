<?php

function signDirTpl(string $dir): string {
	$ret = "";
	foreach(glob($dir . "/*") as $file) {
		if (str_ends_with($file, ".loc")) continue;
		
		$ret .= sprintf("![%s](%s)\n\n", $file, $file);
		
	}
	return $ret;
}

?><!-- DO NOT EDIT THIS FILE DIRECTLY. To make changes, run generateSite.php > index.md -->

## SMPTE color bars (kind of)

<?php echo signDirTpl("smpte"); ?>
