<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
</head>
<body>
    <h1>Daftar</h1>
    <form action="proses-register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Daftar">
    </form>
</body>
</html>