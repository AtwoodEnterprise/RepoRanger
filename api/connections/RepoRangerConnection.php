<?php
require once ('../config.php'); // Include config file which is gitignored
class RepoRangerConnection {
    private $conn;

    function __construct() {
        $this->conn = new mysqli($host, $username, $password, $db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function get_connection() {
        return $this->conn;
    }
}
?>