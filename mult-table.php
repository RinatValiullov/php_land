<?php

    $rows = 10;
    $cols = 10;

    $num_r = 1;
    echo "<table>\n";
    while ($num_r <= $rows) {
        echo "\t\t<tr>\n";
        $num_c = 1;
        while ($num_c <= $cols) {
            echo "\t\t\t<td>" . ($num_r * $num_c) . "</td>\n";
            $num_c++;
        }
        echo "\t\t</tr>\n";
        $num_r++;
    }
    echo "</table>";
    
