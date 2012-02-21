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
			
			# parse
			$e['type'] = substr( $ean, 0, 1 ) == 0 ? 'upc' : 'ean13';
			
			switch( $e['type'] ) {
				case 'ean13': $e['gs1'] = substr( $ean, 0, 3 ); break;
				case 'upc': $e['gs1'] = substr( $ean, 1, 2 ); break;
			}
			
			switch( $e['gs1'] ) {
				case 977: $e['subtype'] = 'issn'; break;
				case 978: $e['subtype'] = 'isbn'; break;
				case 979: $e['subtype'] = 'isbn'; break;
			}
			
			$e['company'] = (string) substr( $ean, 3, 4 );
			$e['item'] = (string) substr( $ean, -6, 5 );
			$e['check'] = substr( $ean, -1, 1 );
			
			# validate
			$even = 0;
			$odd = 0;
			for( $i=0; $i<12; $i++ )
			{
				$odd += ($i % 2 == 0) ? $ean[$i] : 0;
				$even += ($i % 2 > 0) ? $ean[$i] : 0;
			}
			
			$sum = $odd + ($even *3);
			$calc = 10 - ($sum % 10);
			
			# ok?
			if( $calc == $e['check'] )
			{
				$eans[ $ean ] = $e;
			}
		}
	}
	
	# done
	return $eans;
}
?>