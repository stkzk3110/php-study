<!DOCTYPE html>
<html>
    <head>
        <title>基本的なPHPの書き方</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table border="1">
            <?php
                print '<thead>';
                    print '<tr>';
                        print '<th>';
                        print '</th>';
                        for ($i = 1; $i < 10; $i++) {
                            print '<th>';
                                echo $i;
                            print '</th>';
                        }
                    print '</tr>';
                print '</thead>';
                print '<tbody>';
                    for ($x = 1; $x < 10; $x++) {
                        print '<tr>';
                        print '<th class="th-parent">';
                            echo $x;
                        print '</th>';
                        for ($y = 1; $y < 10; $y++) {
                            print '<td class="td-child">';
                            $z = $x * $y;
                            echo $z;
                            print '</td>';
                        }
                        echo '<br>';
                        print '</tr>';
                    }
                print '</tbody>';
            ?>
        </table>
    </body>
</html>
