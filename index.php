<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'curl') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'WindowsPowerShell') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Go-http-client') !== FALSE)
  echo $_SERVER["REMOTE_ADDR"] , "\n"; 
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Wget') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n"; 
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Lunx') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n"; 
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'libwww-perl') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'libcurl-agent') !== FALSE)
  echo $_SERVER["REMOTE_ADDR"] , "\n"; 
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Java') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n"; 
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n"; 
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'PECL::HTTP') !== FALSE)
   echo $_SERVER["REMOTE_ADDR"] , "\n";

else
   include 'desktop_main.php';
?>