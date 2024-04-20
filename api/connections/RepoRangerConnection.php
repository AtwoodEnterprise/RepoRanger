<?php
class RepoRangerConnection {
    private $conn;

    function __construct() {
        $this->conn = new mysqli('localhost', 'username', 'password', 'database_name');

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function get_connection() {
        return $this->conn;
    }
}
?>