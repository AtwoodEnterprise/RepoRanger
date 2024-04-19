<?php // This is a login form index page within the login folder with navbar with line breaks.

?>
<html>
<head><title>Login Page</title></head>
<body>
<nav class="navbar"><a href="../index.php">Home</a><br><a href="index.php">Login</a><br><a href="../about/index.php">About</a></nav>
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