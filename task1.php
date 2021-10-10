<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$s = file_get_contents('input.txt');
$i2 = 0;
$j = 0;
$a = [];
$v = '';
for ($i = 0; $i < strlen($s); $i++)
{
    if ($s[$i] === '_')
    {
        $a[$i2][$j] = intval($v);
        $v = '';
        $j++;
    } else if ($s[$i] === 'X')
    {
        $a[$i2][$j] = intval($v);
        $v = '';
        $i2++;
        $j = 0;
    } else
    {
        $v .= $s[$i];
    }
}
$n = sizeof($a);
$m = sizeof($a[0]);

for ($j = 0; $j < $m; $j++)
{
    for ($i = 0; $i < $n; $i++)
    {
        $sv = strval($a[$i][$j]);
        for ($o = 0; $o < strlen($sv); $o++)
        {
            if (isset($norma[$j]))
            {
                $norma[$j] += intval($sv[$o]);
            } else
            {
                $norma[$j] = 0 + intval($sv[$o]);
            }
        }
    }
}

for ($y = 1; $y < $m; $y++)
{
    for ($j = 1; $j < $m; $j++)
    {
        if ($norma[$j] < $norma[$j - 1])
        {
            for ($i = 0; $i < $n; $i++)
            {
                $t = $a[$i][$j];
                $a[$i][$j] = $a[$i][$j - 1];
                $a[$i][$j - 1] = $t;
            }
            $t = $norma[$j];
            $norma[$j] = $norma[$j - 1];
            $norma[$j - 1] = $t;
        }
    }
}

ob_start();
foreach ($a as $i => $line)
{
    foreach ($line as $j => $el)
    {
        echo "$el ";
    }
    echo "\r";
}
file_put_contents('output.txt', ob_get_contents());
ob_end_clean();
