<?php
# object to array
public function object2array($o)
{
	$o = is_object($o) ? get_object_vars($o) : $o;
	
	if( is_array($o) )
	{
		foreach( $o as $k => $v )
		{
			$o[ $k ] = object2array($v) );
		}
	}
	
	return $o;
}
?>