<?php
class RedirecTopath{
    
    function RedirecTo($url, $permanent = false)
    {
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
    }
}
$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
$new = new RedirecTopath();
echo "http://" . $host . $url;
$new->RedirecTo($url.'public');
