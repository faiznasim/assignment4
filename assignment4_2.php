<?php
$n = 20;
$odd_count = -1;
$RemainingHash = $n;
$RemaingSpace = $n;
$even_count = 0;
$sec_half_odd_hash = 0;
$sec_half_even_space = 0;
$sec_half_odd_hash_2 = 2;
$sec_half_even_space_2 = 0;

// 1st half
for ($i = 1; $i <= $n/2; $i++)
{
    // Odd lines
    if ($i % 2 == 1)
    {
        $odd_count++;
        for ($k = 1; $k <= $odd_count; $k++)
        {
            echo "#&nbsp&nbsp"; // Odd line left side # and space
        }
        if ($i == 3)
            $RemainingHash = $RemainingHash - 2;
        if ($i > 3)
            $RemainingHash = $RemainingHash - 4;

        for ($m = 1; $m <= $RemainingHash; $m++)
        {
                echo "#"; // Odd line middle #
        }

        for ($p = $odd_count; $p > 1; $p--)
        {
            echo "&nbsp&nbsp#"; // Odd line right side space and #
        }
        
    }
    //Even lines
    if ($i % 2 == 0)
    {
        for ($l = 1; $l <= $i/2; $l++)
        {
            echo "#&nbsp&nbsp"; // Even line left side # and space
        }
        if ($i >= 4)
        {
            $RemaingSpace = $RemaingSpace - 4;
            for ($p = 1; $p <= $RemaingSpace - 2; $p++)
            {
                echo "&nbsp&nbsp"; //Even line middle spaces
            }
            $even_count++;
            for ($q = 1; $q <= $even_count; $q++)
            {
                echo "&nbsp&nbsp#"; // Even line right side space and #
            }
        }
    }
    echo "<br/>";
      
}

// 2nd Half
$g = $i/2;
$h = (int)$g;
$x = $i/2;
$y = (int)$g;
$m = $i / 2;
$e = (int)$m;
$f = $m - 1;
$c = 0;
$r = $i / 2;
$s = (int)$r;
$g = $s - 1;
$cc = 0;

for ($i = $n/2 + 1; $i <= $n+1; $i++)
{
    // For input like 12, 16, 20, 24......
    // 2nd Half Odd lines for input like 12, 16, 20, 24....
    if ($i % 2 == 1 && ($n/2)%2 == 0)
    {
        for ($j = 1; $j <= $h; $j++)
        {
            echo "#&nbsp&nbsp";     //2nd Half Odd lines for input like 12, 16, 20, 24.... for left side # and space
        }

        if ($i > $n/2 + 1)         //2nd Half Odd lines for input like 12, 16, 20, 24.... for middle #
        {
            $sec_half_odd_hash = $sec_half_odd_hash + 4;
            for ($k = 1; $k <= $sec_half_odd_hash; $k++)
            {
                echo "#";
            }
        }

        for ($j = 1; $j <= $h; $j++)
        {
            echo "&nbsp&nbsp#";   ////2nd Half Odd lines for input like 12, 16, 20, 24.... for right side space and #
        }
        $h--;

    }

    // 2nd Half Even lines for input like 12, 16, 20, 24....
    if ($i % 2 == 0 && ($n/2)%2 == 0)
    {
        for ($j = 1; $j <= $y; $j++)
        {
            echo "#&nbsp&nbsp";     //2nd Half Even lines for input like 12, 16, 20, 24.... for left side # and space
        }

        if ($i > $n/2 + 2)          //2nd Half Even lines for input like 12, 16, 20, 24.... for middle space
        {
            $sec_half_even_space = $sec_half_even_space + 4;
            for ($k = 1; $k <= $sec_half_even_space; $k++)
            {
                echo "&nbsp&nbsp";
            }
        }

        for ($j = 1; $j <= $y; $j++)   //2nd Half Even lines for input like 12, 16, 20, 24.... for right side space and #
        {
            echo "&nbsp&nbsp#";
        }
        $y--;
    }

    // For input like 14, 18, 22, 26......
    // 2nd Half Odd lines for input like 14, 18, 22, 26....
    if ($i % 2 == 1 && ($n/2)%2 == 1)
    {
        for ($k = 1; $k <= $e; $k++)
        {
            echo "#&nbsp&nbsp";     // 2nd Half Odd lines for input like 14, 18, 22, 26.... for left side # and space
        }
        $c++;
        if ($c == 1)
            $e-=2;
        else
            $e--;
        if ($i > $n/2 + 2)      // 2nd Half Odd lines for input like 14, 18, 22, 26.... for middle #
        {
            $sec_half_odd_hash_2 = $sec_half_odd_hash_2 + 4;
            for ($k = 1; $k <= $sec_half_odd_hash_2; $k++)
            {
                echo "#";
            }
        }
        for ($b = 1; $b <= $f; $b++)
        {
            echo "&nbsp&nbsp#";     // 2nd Half Odd lines for input like 14, 18, 22, 26.... for right side space and #
        }
        $f--; 
    }

    // 2nd Half Even lines for input like 14, 18, 22, 26....
    if ($i % 2 == 0 && ($n/2)%2 == 1)       
    {
        for ($k = 1; $k <= $s; $k++)
        {
            echo "#&nbsp&nbsp";     // 2nd Half Even lines for input like 14, 18, 22, 26.... for left side # and space
        }
        $s--;
        if ($i > $n/2 + 1)
        {
            $sec_half_even_space_2 = $sec_half_even_space_2 + 4;
            for ($k = 1; $k <= $sec_half_even_space_2-2; $k++)
            {
                echo "&nbsp&nbsp";  // 2nd Half Even lines for input like 14, 18, 22, 26.... for middle space
            }
        }
        for ($b = 1; $b <= $g; $b++)
        {
            echo "&nbsp&nbsp#";     // 2nd Half Even lines for input like 14, 18, 22, 26.... for right side space and #
        }
        $cc++;
        if ($cc > 1)
            $g--;
    }
    echo "<br/>";
    
}