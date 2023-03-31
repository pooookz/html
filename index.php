<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <?php
    $table = array();
    for ($i = 0; $i < 8; $i++) {
        $table[$i] = array();
        for ($j = 0; $j < 8; $j++) {
            $table[$i][$j] = "Box " . ($i * 8 + $j + 1);
        }
    }
    ?>
    <table>
        <?php foreach ($table as $row): ?>
        <tr>
            <?php foreach ($row as $cell): ?>
            <td id="<?= str_replace(' ', '-', $cell) ?>">
                <?= $cell ?>
            </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
    <img id="png-image" src="avatar.png" style="position: absolute; left: -9999px; top: -9999px; width: 100px; height: 100px;" />
    <script src="script.js"></script>
</body>
</html>