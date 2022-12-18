<?php
$method = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER['REQUEST_URI'];

switch ($method | $uri) {
    case $method == "GET" && $uri == '/about':
        require "about.html";
        break;
    case $method == "GET" && $uri == '/contact':
        require "contact.html";
        break;
    case $method == "POST":
        echo $_POST['full_name'];
        break;
    default:
        http_response_code(404);
        // You can include your error page here
        echo "<h2>The page you are requesting does not exist</h2>";
}