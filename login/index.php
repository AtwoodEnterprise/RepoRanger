<?php // This is a login form index page within the login folder.

?>
<html>
<head><title>Login Page</title></head>
<body>
<h2>Login Form</h2>
<form action="login_process.php" method="post">
<label>Username:</label>
<input type="text" name="username" placeholder="Username" required><br>
<label>Password:</label>
<input type="password" name="password" placeholder="Password" required><br>
<input type="submit" value="Login">
</form>
</body>
</html>