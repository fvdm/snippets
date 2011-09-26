<?php
// Return any var as string wrapped in <pre> tags
function pre( $var, $tags=true, $doPrint=false )
{
	$str = $tags ? '<pre>' : '';
	ob_start();
	if( is_object($var) || is_array($var) )
	{
		print_r($var);
	}
	else
	{
		echo $var;
	}
	$str .= ob_get_contents();
	ob_end_clean();
	$str .= $tags ? '<pre>' : '';
	
	if( $doPrint )
	{
		echo $str;
	}
	
	return $str;
}
?>