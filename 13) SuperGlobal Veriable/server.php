<?php
echo "<h2>Server Related Info ($_SERVER)</h2><hr>";

echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "<br>";
echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "HTTP_REFERER: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A') . "<br>";
echo "REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "<br>";
echo "REMOTE_ADDR (User IP): " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "REMOTE_PORT: " . $_SERVER['REMOTE_PORT'] . "<br>";
echo "SERVER_PORT: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "HTTPS: " . (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'off') . "<br>";
echo "SERVER_PROTOCOL: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "GATEWAY_INTERFACE: " . $_SERVER['GATEWAY_INTERFACE'] . "<br>";
?>
