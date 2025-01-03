<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <form action="test.php?action=login" method="POST">
        <label for="name">Masukkan nama anda</label>
        <br><input type="text" id="name" name="name" ><br>
        <label for="password">Masukkan password anda</label>
        <br><input type="password" id="password" name="password" ><br>
        <button type="submit">Masuk</button>
    </form>
</body>
</html>