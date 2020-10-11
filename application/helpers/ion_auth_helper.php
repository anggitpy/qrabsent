<?php defined('BASEPATH') or exit('not allowed');

if(!function_exists('logged_in'))
{
    function logged_in()
    {
        $ci =& get_instance();
        $logged_in = $ci->ion_auth->logged_in();
        if(!$logged_in)
        {
            redirect('auth/login');
        }
    }
}


if(!function_exists('in_group'))
{
    function in_group($args)
    {
        $ci =& get_instance();
        $in_group = $ci->ion_auth->in_group($args);
        if(!$in_group)
        {
            redirect('auth/login');
        }
    }
}