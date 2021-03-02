<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'curl') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'WindowsPowerShell') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Go-http-client') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "n"; 
else
   include 'desktop_main.php';
?>