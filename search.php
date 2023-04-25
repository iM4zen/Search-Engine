<?php
$searchthis = $_GET['search'];
$matches = array();

$handle = @fopen("db.txt", "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer, $searchthis) !== FALSE)
            $matches[] = $buffer;
    }
    fclose($handle);
}

//show results:
echo "<center>";
print_r($matches);
echo "</center>"
?>