<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require'input.php';

array_multisort($columns, SORT_ASC, $a);

ob_start();
foreach ($a as $level1)
{
    foreach ($level1 as $level2)
    {
        echo $level2 . " ";
    }
    echo "<br>";
}

file_put_contents('output.txt', ob_get_contents());
ob_end_clean();
