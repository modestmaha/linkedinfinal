<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * CSS Link
 *
 * Generating the link tag for a css file from the assets directory
 *
 * @access	public
 * @param		string
 * @param		string
 * @return	string
 */
if ( ! function_exists('link_css'))
{
	function link_css($filename,$media = null)
	{
		$filename = $filename.'.css';
		if(isset($media))
			$media = 'media="'.$media.'"';
		
		$string = '<link rel="stylesheet" type="text/css" '.$media.' href="assets/css/'.$filename.'" />';
		return $string;
	}
}

/**
 * JS Link
 *
 * Generating the link tag for a local JavaScript File
 *
 * @access	public
 * @param		string
 * @return	string
 */
if ( ! function_exists('link_js'))
{	
	function link_js($filename)
	{
		$filename = $filename.'.js';
		$string = '<script type="text/javascript" src="assets/js/'.$filename.'"></script>';
		return $string;
	}
}


/**
 * Link a Library Hosted on cdnjs.com
 *
 * Generating the scripttag linked to a hosted library on cdnjs.com
 * For a full list visit http://cdnjs.com/
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('link_lib'))
{	
	function link_lib($filename)
	{
		// Define the Baseurl for all the Librarys hosted
		$base = '//cdnjs.cloudflare.com/ajax/libs/';
		
		// Define the available keys anf match them with the latest library link
		$libs = array(
		'jquery' => 'jquery/1.8.0/jquery-1.8.0.min.js',
		'jquery-easing' => 'jquery-easing/1.3/jquery.easing.min.js',
		'jquery-timeago' => 'jquery-timeago/0.9.3/jquery.timeago.js'
		);
		
		$target = $base . $libs[$filename];
		
		$string = '<script type="text/javascript" src="'.$target.'"></script>';
		return $string;
	}
}

