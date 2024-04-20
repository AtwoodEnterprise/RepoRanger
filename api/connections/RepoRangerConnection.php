<?php
// This file contains the MySQL connection code for RepoRanger.
class RepoRangerConnection {
    private $dboK = null;
    public function __construct() {
        $this->dbo = new MYSQL('localhost', 'username', 'password', 'reporanger');
        if(!$this->dbo) {
            die('Error connecting to database.');
        }
    }
}
?>
