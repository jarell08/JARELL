<?php
    include('connect.php');

    $select = "SELECT * FROM student";
    $sqlselect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Project</title>
    <style>
        a{
            font-size: 50px;
            background-color: rgba(122, 5, 5, 0.9);
            color: #eee;
            text-decoration: none;
        }
        table{
            border: 2px solid black;
            font-size: 50px;
            background-color: rgba(245, 238, 238, 0.9);
            border-radius: 10px;
            border-collapse: separate;
            text-align: center;
            border-spacing: 5;
        }
        th{
            border: 1px solid black;
            font-size: 50px;
            background-color: rgba(145, 12, 12, 0.9);
            padding: 15px;
            
        }
        td{
            border: 1px solid black;
            font-size: 50px;
            background-color: 0000;
            
        }
        button{
            font-size: 30px;
            cursor: pointer;
        }
        .btn{
            border: none;
            font-size: 30px;
            cursor: pointer;
        }
        .edit{
            font-size: 50px;
            color: black;
            background-color: rgb(0, 141, 7);
        }
        .delete{
            font-size: 50px;
            color: black;
            background-color: rgba(238, 4, 4, 0.9);
        }
    </style>
</head>
<body>
    <a type="button" id="add" href="add.php">Add+</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach($sqlselect as $result => $value) {  ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['NAME'] ?></td>
                <td><?php echo $value['age'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['NAME'] ?>">
                        <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                        <input type="hidden" name="edAddress" value="<?= $value['address'] ?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>