<?PHP
$url = $_GET["url"];
$data = $url.PHP_EOL;
$fp = fopen('db.txt', 'a');
fwrite($fp, $data);
?>