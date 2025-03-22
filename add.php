<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            width: 60%;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            background-color: #ffffff;
            color: black;
            border: 4px solid #ff5722;
        }
        form {
            border: 2px solid #ff5722;
            padding: 25px;
            border-radius: 10px;
            background-color: #ffccbc;
            width: 40%;
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input {
            margin: 5px 0 15px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #e64a19;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            padding: 12px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            border: 2px solid #ff5722;
            border-radius: 5px;
            width: fit-content;
            text-align: center;
            background-color: #ff5722;
        }
        .back-link:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
<form action = "add.php" method = "get">
    <label> Enter your ID: </label>
    <input type = "number" id="id" name= "id"> </br>
    <label> Enter your Name: </label>
    <input type = "text" id="name" name= "name"> </br>
    <label for = "age"> Enter your Age: </label>
    <input type = "number" id= "age" name = "age"></br>
    <label for = "address"> Enter your Address:
    <input type = "text" id= "address" name="address"> </br>
    <input name = "submit" value = "submit" type= "submit">
    </form>
</body>
</html>

<?php
include('connect.php');

if(isset($_GET['submit'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    $Add = "INSERT INTO student VALUES( '$id', '$name', $age, '$address')";

    $sqlAdd = mysqli_query ($connect, $Add);
    echo "<script>alert ('New data Added!') </script>";
    echo "<script>window.location.href ='index.php'</script>";
}