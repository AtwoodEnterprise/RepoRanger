<?php // This is a login form index page with navbar with line breaks.

?>
<html>
<head><title>Login Page</title><link rel="stylesheet" type="text/css" href="../style.css"></head>
<body>
<nav class="navbar"><a href="../index.php">Home</a> | <a href="login/index.php">Login </a> | <a href="../about/index.php">About</a></nav>
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