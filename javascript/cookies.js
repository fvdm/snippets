// Get cookie by name or all of them
function getCookie( name )
{
	var cookiestr = document.cookie.split('; ');
	var cookies = new Object;
	for(i=0; i<cookiestr.length; i++)
	{
		var pos = cookiestr[i].search('=');
		var cname = cookiestr[i].substr(0, pos);
		var cvalue = cookiestr[i].substr(pos +1);
		cookies[ cname ] = cvalue;
	}
	
	return name ? cookies[name] : cookies;
}

// Set & return cookie(s)
// For multiple: give object with name, value and expires in seconds
function setCookie( name, value, addSeconds )
{
	var jsDate = new Date();
	
	// default expire seconds (1 week)
	var defaultSeconds = 3600*24*7;
	
	// multiple cookies given?
	if( typeof(name) == 'object' )
	{
		// yes, walk through
		for( var c in name )
		{
			name[c]['unixtime'] = jsDate.getUTCDate();
			name[c]['unixtime'] += isNaN(name[c].expires) ? defaultSeconds : name[c].expires;
			
			var theDate = jsDate.setUTCDate( name[c].unixtime );
			name[c]['expires'] = jsDate.toUTCString();
			
			document.cookie = name[c].name +'='+ name[c].value +';expires='+ name[c].expires;
		});
		
		return name;
	}
	else
	{
		// nope, just one
		var c = {
			name: name,
			value: value,
			unixtime: isNaN(addSeconds) ? defaultSeconds : addSeconds
		};
		
		var theDate = jsDate.setUTCDate( c.unixtime );
		c['expires'] = jsDate.toUTCString();
		
		document.cookie = c.name +'='+ c.value +';expires='+ c.expires;
		return c;
	}
}