<!DOCTYPE html>
<html lang="en">
<head>
     <title>Lab 5a q3</title>
</head>
<body>
<?php
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'No' => $i,
                'Multiplier' => $multiplier,
                'Answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    $multiplier = 2; 
    $tableData = multiplication($multiplier);
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php foreach($tableData as $table): ?>
    <tr>     
        <td><?php echo $table["No"]; ?></td>
        <td><?php echo $table["Multiplier"]; ?></td>
        <td><?php echo $table["Answer"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
