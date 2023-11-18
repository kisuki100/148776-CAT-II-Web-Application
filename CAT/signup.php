<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Page</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <h2>Signup</h2>
    <form action="signup_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <br>
        
        <input type="submit" value="Signup">
    </form>
</body>
</html>
