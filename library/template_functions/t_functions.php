<?php

function Template($file, $array = array() ) {
    if (file_exists($file)) {
        $output = file_get_contents($file);
		while (list($key, $val) = each($array)) {
		    $replace = '<!--['.$key.']-->';
			$output = str_replace($replace, $val, $output);
		}
		return $output;
    }
}
?>
