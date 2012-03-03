<?php
// Return any var as string wrapped in <pre> tags
function pre( $var, $doTags=true, $doEcho=false ) {
	ob_start();
	if( is_object($var) || is_array($var) ) {
		print_r($var);
	} else {
		echo $var;
	}
	$str = ob_get_contents();
	ob_end_clean();
	$str = $toTags ? '<pre>'. $str .'</pre>' : $str;
	
	if( $doEcho ) {
		echo $str;
	}
	
	return $str;
}
?>