<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

    <a href="practice4.html">Back</a>

    <?php
    if (isset($_POST["size"])) {
        $num = $_POST["size"];

        echo "<h2>Multiplication Table</h2>";
        echo "<table border='1'>";


        echo "<tr>";
        echo "<th>&times;</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<th>" . $col . "</th>";
        }
        echo "</tr>";


        for ($row = 1; $row <= $num; $row++) {
            echo "<tr>";
            echo "<th>" . $row . "</th>";

            for ($col = 1; $col <= $num; $col++) {
                $product = $row * $col;
                echo "<td>" . $product . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>