<?php
/**
 * Gets the value of an environment variable
 */
if( ! function_exists('getenv') )
{
	function getenv($varname)
	{
		return isset($_SERVER[$varname]) ? $_SERVER[$varname] : FALSE;
	}
}

/**
 * Gets the value from Superglobal $_POST
 */
if( ! function_exists('get_post') )
{
	function get_post($varname)
	{
		return isset($_POST[$varname]) ? $_POST[$varname] : FALSE;
	}
}

/**
 * Get the client ip address
 */
if( ! function_exists('get_client_ip') )
{
	function get_client_ip()
	{
		$ip_address = NULL;
		if ( getenv('HTTP_CLIENT_IP') )
			$ip_address = getenv('HTTP_CLIENT_IP');
		else if( getenv('HTTP_X_FORWARDED_FOR') )
			$ip_address = getenv('HTTP_X_FORWARDED_FOR');
		else if( getenv('HTTP_X_FORWARDED') )
			$ip_address = getenv('HTTP_X_FORWARDED');
		else if( getenv('HTTP_FORWARDED_FOR') )
			$ip_address = getenv('HTTP_FORWARDED_FOR');
		else if( getenv('HTTP_FORWARDED') )
			$ip_address = getenv('HTTP_FORWARDED');
		else if( getenv('REMOTE_ADDR') )
			$ip_address = getenv('REMOTE_ADDR');
		else
			$ip_address = '127.0.0.2';
		
		return $ip_address;
	}
}