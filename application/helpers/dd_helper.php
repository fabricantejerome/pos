<?php

/**
 * Helper inspecting variable values
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('dd'))
{
	function dd($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		die;
	}
}