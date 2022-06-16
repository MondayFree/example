<?php
    if(isset($_POST['submit'])) {
        input($_POST['name']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
    <input type="text" id="search">

    <h2>mahasiswa</h2>
    <ul>
        <li>ubed</li>
        <li>samsul</li>
        <li>udin</li>
    </ul>
    
    <br><br><br>
    
    <h2>upload data</h2>
    <form action="" method="post">
        <input type="text" name="name">
        <button type="submit" name="submit">upload</button>
    </form>
</body>
</html>