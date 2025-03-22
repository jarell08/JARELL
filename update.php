<?php
    include('connect.php');

    if(isset($_POST['edit'])){
        $EdID = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdAddress = $_POST['edAddress'];

    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $update = "UPDATE student SET name = '$name', age=$age, address='$address' WHERE id=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 4px solid #dc3545;
            width: 320px;
            text-align: center;
        }
        h2 {
            color: #dc3545;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 2px solid #dc3545;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #dc3545;
            color: white;
            cursor: pointer;
            margin-top: 15px;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #b02a37;
        }
        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #dc3545;
            font-weight: bold;
        }
        a:hover {
            color: #b02a37;
        }
    </style>
</head>
<body>
    
    <a href="index.php"><- Back</a>
    <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $EdName ?>"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age" value="<?= $EdAge ?>"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="<?= $EdAddress ?>"><br>

        <input type="hidden" name="id" id="id" value="<?= $EdID ?>">
        
        <input type="submit" name="submit" id="submit" value="Update"><br>
    </form>

</body>
</html>