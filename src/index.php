<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php
$url = $_SERVER['REQUEST_URI'];

$parsed_url = parse_url($url);
parse_str($parsed_url['query'], $parameters);

echo 'Hello '.$parameters['name'].'!<br>';
echo $parameters['message'].'!';
?>

<p>By Ziviy</p>
</body>
</html>