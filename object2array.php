<?php
# object to array
public function object2array($o)
{
	$o = $o instanceof Traversable && version_compare( PHP_VERSION, '5.1.0', '>=' ) ? iterator_to_array($o) : $o; # iterator
	$o = is_object($o) ? get_object_vars($o) : $o; # object
	if( is_array($o) ) # array
	{
		foreach( $o as $k => $v )
		{
			$o[ $k ] = object2array($v);
		}
	}
	return $o;
}
?>