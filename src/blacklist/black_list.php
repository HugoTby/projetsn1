<?php

$blacklist = array(
    // IP addresses refused by default
    "127.0.0.1" => "Localhost",
    "192.168.0.1" => "Default Gateway",
    "10.0.0.1" => "Private Network",
    "8.8.8.8" => "Google Public DNS server",
    "192.168.65.3" => "hugo.tabary#6548",
    
    // here you can add the addresses you want to block, and the reason or the origin
    // " IP " => " Reason or origin",
);


?>