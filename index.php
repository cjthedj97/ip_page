<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Your IP Infomation</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="https://cjthedj97.me/fav.ico" type="image/x-icon" />
<style>
body {
  padding: 25px;
  background-color: #222831;
  color: #ececec;
  font-size: 25px;
}

.light-mode {
  background-color: white;
  color: black;
}
</style>
</head> 
<body>
<h2>Your IP Infomation</h2>

<?php echo  "Your IP: "; echo $_SERVER["REMOTE_ADDR"] ;echo "<br>"; ?>

<?php echo "Country: "; echo $_SERVER["HTTP_CF_IPCOUNTRY"]; echo "<br>"; ?>

<?php echo "User Agent: "; echo $_SERVER["HTTP_USER_AGENT"]; echo "<br>"; ?>

<h3> Cloudflare Data</h3>

<?php echo "HTTP Protocol: "; echo $_SERVER["SERVER_PROTOCOL"]; echo "<br>"; ?>

<?php echo "Encoding: "; echo $_SERVER["HTTP_ACCEPT_ENCODING"]; echo "<br>"; ?>

<?php echo "Protocol Used to Connect to Cloudflare: ";  echo $_SERVER["HTTP_X_FORWARDED_PROTO"]; echo "<br>"; ?>

<?php echo "Port Connecting to Orgin Server: "; echo $_SERVER["SERVER_PORT"]; echo "<br>"; ?>

<?php #echo "Cloudflare Ray ID: "; #echo $_SERVER["HTTP_CF_RAY"]; #echo "<br>"; ?>
</body>
<footer>
<p></p>
<p></p>
<h6>Toggle Dark/Light Mode</h6>
<p>Click the button to toggle between dark and light mode for this page.</p>

<button onclick="myFunction()">Toggle light mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("light-mode");
}
</script>
<h6>For a minimal ip page go to <a href=/m/">ip.cjthedj97.me/m</a></h6>
</body>
</html>