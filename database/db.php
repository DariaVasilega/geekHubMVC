<?php
class DB{
    protected $connection;

    public function __construct($host = 'localhost', $user = 'dasha', $password = '12345678', $db_name = 'test')
    {

        $this->connection = new mysqli($host, $user, $password, $db_name);

        try {
            $this->query("SET NAMES utf8mb4");
        } catch (Exception $e) {
        }

        if( !$this->connection )
        {
            throw new Exception('Could not connect to DB ');
        }
    }

    public function query($sql)
    {
        if ( !$this->connection ){
            return false;
        }

        $result = $this->connection->query($sql);

        if ( mysqli_error($this->connection) ){
            throw new Exception(mysqli_error($this->connection));
        }

        if ( is_bool($result) ){
            return $result;
        }

        $data = array();

        while( $row = mysqli_fetch_assoc($result) ){
            $data[] = $row;
        }

        mysqli_free_result($result);

        return $data;
    }
}
