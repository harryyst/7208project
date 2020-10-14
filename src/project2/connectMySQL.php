<?php
class MySQLDatabase {

    private $link = null;
    private $dbhost = '34.123.190.119:3306';
    private $dbuser = 'root';
    private $dbpassword = 'root';
    private $db = 'project';

    function connect() {
        $this->link = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword);
        if(!$this->link) {
            die('Not connected : ' . mysqli_connect_error());
        }
        $database = mysqli_select_db($this->link, $this->db);
        if(!$database){
            die ('Cannot use : ' . $this->db);
        }
    }

    function query($query) {
        $result = mysqli_query($this->link, $query);
        if($result) {
            return $result;
        }
        else {
            die(mysqli_error($this->link)); // useful for debugging
        }
        return null;
    }

    function disconnect() {
        mysqli_close($this->link);
    }
}
?>
