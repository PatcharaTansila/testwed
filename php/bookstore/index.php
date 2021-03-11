<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'bookstore');
      $mysql
    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM book ";
    $result = $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <h1>ตาราง book</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">BookID</td>
                    <td width="5%">BookName</td>
                    <td width="5%">TypeID</td>
                    <td width="5%">StatusID</td>
                    <td width="5%">Publish</td>
                    <td width="5%">UnitPrice</td>
                    <td width="5%">UnitRent</td>
                    <td width="5%">DayAmount</td>
                    <td width="5%">Picture</td>
                    <td width="5%">BookDate</td>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['BookID']; ?></td>
                        <td><?php echo $row['BookName'];?></td>
                        <td><?php echo $row['TypeID']; ?></td>
                        <td><?php echo $row['StatusID']; ?></td>
                        <td><?php echo $row['Publish'];?></td>
                        <td><?php echo $row['UnitPrice']; ?></td>
                        <td><?php echo $row['UnitRent']; ?></td>
                        <td><?php echo $row['DayAmount'];?></td>
                        <td><?php echo $row['Picture']; ?></td>
                        <td><?php echo $row['BookDate']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>

    </div>
</body>
</html>