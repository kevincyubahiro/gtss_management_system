<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">add new </a>
    <table border="1">
<tr>
    <th>id</th>
    <th>firstname</th>
    <th>secondname</th>
    <th>address</th>
    <th>password</th>
    <th colspan="2">oparation</th>
</tr>
<?php
include("conn.php");
$select=mysqli_query($conn,"SELECT * FROM trainer");
while($row=mysqli_fetch_array($select)){


?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['firstname']?></td>
    <td><?php echo $row['secondname']?></td>
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['password']?></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
    <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>
</tr>
<?php
}?>
    </table>
</body>
</html>