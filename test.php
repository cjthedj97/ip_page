<?php

function get_user_browser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
    if(strlen(strstr($u_agent,"curl")) > 0 ){ 

      $ub = 'curl';

    }
    else {
      $ub = 'other';
    }

    return $ub;
} 

if (isset($_GET['print']) && $_GET['print'] != "" 
                          && get_user_browser() == 'curl') 
{
    $pg = $_GET['print'];
    if (!file_exists('1')) 
    {
        echo $_SERVER["REMOTE_ADDR"];
    }
}
else 
{
    echo 'Other code goes here';
}