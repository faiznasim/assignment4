<?php

$n = 11;

$a = $n/2;
$space = (int)$a;
$line = $space;

for ($j = 1; $j <= $line + 1; $j++)
{
    for ($i = 0; $i < $space; $i++)
    {
        echo "&nbsp&nbsp";
    }
    $space--;

    for ($k = 1; $k <= 2*$j-1; $k++)
    {
        echo "*";
    }
    echo "<br/>";
}

$space++;

    for ($j = $line; $j > 0; $j--)
    {
        for ($i = 0; $i<$space + 1; $i++)
        {
            echo "&nbsp&nbsp";
        }
        $space++;

        for($k = 1; $k <= 2*$j-1; $k++)
        {
            echo "*";
        }
        echo "<br/>";
    }