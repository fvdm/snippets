<?php
# EAN-13 codes
function extract_ean13( $str )
{
	$eans = array();
	
	# find numbers
	if( preg_match_all( '/\b([0-9]{13})\b/', $str, $m ) )
	{
		foreach( $m[1] as $ean )
		{
			$ean = (string) $ean;
		}
	}
	
	# done
	return $eans;
}
?>