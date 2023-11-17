<?php
// Database connection configuration
$connection = mysqli_connect('localhost', 'root', '', 'db_softeng1');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL Server" .
    mysqli_connect_errno();
}else{
    echo "Nikko Magtuloy!";
}
?>