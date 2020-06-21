<html lang="en">
        <head>
                <title>Your IP Infomation</title>
                <meta charset="utf-8" />
                <link rel="shortcut icon" href="https://cjthedj97.me/fav.ico" type="image/x-icon" />
        </head>
<body>
<body bgcolor="Silver">
<basefont color="white">

<?php echo "<h2>Your IP Infomation</h2>"; ?>

<?php echo  "Your IP: "; echo $_SERVER["HTTP_CF_CONNECTING_IP"]; echo "<br>"; ?>

<?php echo "Country: "; echo $_SERVER["HTTP_CF_IPCOUNTRY"]; echo "<br>"; ?>

<?php echo "User Agent: "; echo $_SERVER["HTTP_USER_AGENT"]; echo "<br>"; ?>

<?php echo "<h3> Cloudflare Data</h3>"; ?>

<?php echo "Cloudflare server IP: "; echo $_SERVER["REMOTE_ADDR"]; echo "<br>"; ?>

<?php echo "HTTP Protocol: "; echo $_SERVER["SERVER_PROTOCOL"]; echo "<br>"; ?>

<?php echo "Encoding: "; echo $_SERVER["HTTP_ACCEPT_ENCODING"]; echo "<br>"; ?>

<?php echo "Protocol Used to Connect to Cloudflare: ";  echo $_SERVER["HTTP_X_FORWARDED_PROTO"]; echo "<br>"; ?>

<?php echo "Port Connecting to Orgin Server: "; echo $_SERVER["SERVER_PORT"]; echo "<br>"; ?>

<?php #echo "Cloudflare Ray ID: "; #echo $_SERVER["HTTP_CF_RAY"]; #echo "<br>"; ?>
</basefont>
</body>
</html>
