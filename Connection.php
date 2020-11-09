<?php

require 'Credentials.php';

class Connection extends Credentials {

    public function make_connection() {
        // print('<br>');
        // print($this->username);
        $servername = "localhost";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=reisol", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

$db = new Connection();
$db = $db->make_connection();
?>