<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'curl') !== FALSE)
   echo 'curl';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'WindowsPowerShell') !== FALSE)
   echo 'Powershell';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
   echo 'Google Chrome';
 else
   echo 'Something else';
?>