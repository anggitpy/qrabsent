<?php

if (!function_exists('active'))
{
    function active($n, $link)
    {
        $ci =& get_instance(); 
		$current = $ci->uri->segment($n);
		if($current == $link)
		{
			return TRUE;
		}		
    }
}