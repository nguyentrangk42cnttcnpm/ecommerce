<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(!isset($_POST['name']) || !isset($_POST['desc'])){
        echo 'spam';
        die();
    }
?>
<?php
    $nameBrands = $_POST['name'];
    $descBrands = $_POST['desc'];
?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="text">
        </div>
        <div class="form-group">
            <label for="desc">Desc:</label>
            <input type="number" class="form-control" id="desc">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>
</html>