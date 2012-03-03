Here are some PHP snippets I wrote and use regularly. Feel free to use them any way you like.

**array_missing** ( $array, $mustHave )

_Find out which keys are missing in an array. $mustHave must be a string with comma seperated keys to check. Returns an array with missing keys or false when nothing is missing._

**extract_ean13** ( $str )

_Extract and parse EAN-13 and UPC-13 codes from a text. It returns only the valid codes as array._

```php
$str = 'SKU: 72851EU, EAN: 2550009262841, 5030917102578, T.net ID: 272977';
$ean = extract_ean13( $str );
print_r( $ean );
```

```
Array
(
    [2550009262841] => Array
        (
            [type] => ean13
            [gs1] => 255
            [company] => 0009
            [item] => 26284
            [check] => 1
        )

    [5030917102578] => Array
        (
            [type] => ean13
            [gs1] => 503
            [company] => 0917
            [item] => 10257
            [check] => 8
        )

)
```

**object2array** ( $var )

_Recursively convert an object to an array_

**pre** ( $var, $doTtags=true, $doPrint=false )

_Return any $var as dumped string, wrapped in pre-tags if $doTags is set. Set $doPrint to dump to browser directly. Useful for debugging._