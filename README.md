jQuery plugins
==============

getCookie( name )
-----------------

Get one specific cookie

**name** _(optional)_
The name of the cookie you're looking for. Leave out to return all cookies.

	// foo = bar
	var foo = getCookie('foo');


getCookie()
-----------

Get all cookies

	var cookies = getCookie();
	$.each( cookies, function( c ) {
		// c.name
		// c.value
		// c.expires
		// c.unixtime
	});


setCookie( name, value [, expires] )
------------------------------------

Set one cookie

**name** _(required)_
The name of the cookie

**value** _(required)_
The value of the cookie

**expires** _(optional)_
The number of seconds till cookie expires, _defaults to one week_

	var foo = setCookie( 'foo', '


setCookie( object )
-------------------

Set multiple cookies

**object** _(required)_
The object with cookies:

	var cookies = [
		{name: 'foo', value: 'bar'},
		{name: 'hello', value: 'world', 86400}
	];
	setCookie( cookies );
