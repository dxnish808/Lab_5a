<!DOCTYPE html>
<html lang="en">
<head>
     <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Danish Aqil Bin Mahadi";
        $matricNo = "AI220250";
        $course = "BIP";
        $yearOfStudy = "Third";
        $address = "Batu Pahat,Johor";
    ?>
 <table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matricNo"; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo "$yearOfStudy"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
 </table>

</body>
</html>