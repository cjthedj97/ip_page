<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'curl') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'WindowsPowerShell') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
   echo 'Google Chrome';
 else
   echo 'Something else';
?>