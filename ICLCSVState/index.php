<?php
require __DIR__ . "/includes/functions.php";

$csvPath = __DIR__ . "/games/games.csv";
$rows = read_csv_rows($csvPath);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
<h1>Games</h1>

<?php if (empty($rows)): ?>
    <p>No data</p>
<?php else: ?>
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Console</th>
            <th>Price</th>
        </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= esc_html($row[0]) ?></td>
                <td><?= esc_html($row[1]) ?></td>
                <td>$<?= esc_html(number_format((float)$row[2], 2)) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>
