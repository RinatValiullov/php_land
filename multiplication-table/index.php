<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication Table</title>
</head>
<body>

    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #8cd;
            cursor: pointer;
            padding: 10px;
            text-align: center;
            transition: background-color 0.8s;
        }
        td:hover {
            background-color: #ccc;
        }
    </style>

    <h1>Multiplication Table</h1>

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
    
    ?>

</body>
</html>
