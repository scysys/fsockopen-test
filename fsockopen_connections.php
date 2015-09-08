<?php

// Test Connection on local or external Ports
$ip = "127.0.0.1"; // Enter an local or external IP-Adress to test Connection
$port = "80"; // Enter Port to test Connection

if(fsockopen($ip,$port)) {
print "Port: $port on $ip is open.";
} else {
print "Port: $port on $ip is not available.";
}

?>
