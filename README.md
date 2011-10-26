Here are some PHP snippets I wrote and use regularly. Feel free to use them any way you like.

**array_missing** ( $array, $mustHave )

_Find out which keys are missing in an array. $mustHave must be a string with comma seperated keys to check. Returns an array with missing keys or false when nothing is missing._

**object2array** ( $var )

_Recursively convert an object to an array_

**pre** ( $var, $doTtags=true, $doPrint=false )

_Return any $var as dumped string, wrapped in _pre_ tags if $doTags is set. Set $doPrint to dump to browser directly. Useful for debugging._