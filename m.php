<?php echo "Your IP Infomation"; ?>

<?php echo  "Your IP: "; echo $_SERVER["HTTP_CF_CONNECTING_IP"]; ?>

<?php echo "Country: "; echo $_SERVER["HTTP_CF_IPCOUNTRY"]; ?>

<?php echo "User Agent: "; echo $_SERVER["HTTP_USER_AGENT"]; ?>