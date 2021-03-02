<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'curl') !== FALSE)
   echo 'curl';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
   echo 'Mozilla Firefox';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
   echo 'Google Chrome';
 else
   echo 'Something else';
?>