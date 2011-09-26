<?php
# Find out which keys are missing in an array
function missing( &$arr, $mustHave )
{
	$mustHave = explode(',', $mustHave);
	$missing = array_diff_assoc( $mustHave, array_keys($arr) );
	return count($missing) >= 1 ? $missing : false;
}
?>