<?php

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'curl')) return 'curl';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
 Explorer';
   
    return 'Other';
}

// Usage:

echo get_browser_name($_SERVER['HTTP_USER_AGENT']);

?>