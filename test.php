<?php

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'curl')) echo 'curl';
    elseif (strpos($user_agent, 'Chrome')) echo 'Chrome';
 Explorer';
   
    echo 'Other';
}

// Usage:

echo get_browser_name($_SERVER['HTTP_USER_AGENT']);

?>