<?php
# object to array
public function object2array($o)
{
	# $o is iterator
	if( $o instanceof Traversable )
	{
		$o = iterator_to_array($o);
	}
	
	# $o is object
	if( is_object($o) )
	{
		$o = get_object_vars($o);
	}
	
	# $o is array
	if( is_array($o) )
	{
		# recurse elements
		foreach( $o as $k => $v )
		{
			$o[ $k ] = object2array($v);
		}
	}
	
	# $o is normal
	return $o;
}
?>