<?php

class DbManager
{
    //DEFAULT VALUES
    const host = 'localhost';
    const user = 'root';
    const password = '';
    const db = 'popcorn';

    public $host;
    public $user;
    public $password;
    public $db;
    public $connection;

    function __construct($params = [])
    {
        /*
        PARAMS EXAMPLE
        $params = array(
             'host' => 'host://asdasd',
             'user' => 'admin',
             'password' => 'asdfgh',
             'db' => 'db_123'
         );*/
        if (!$params) {
            $params = array();
        }
        $this->host = (isset($params['host'])) ? $params['host'] : self::host;
        $this->user = (isset($params['user'])) ? $params['user'] : self::user;
        $this->password = (isset($params['password'])) ? $params['password'] : self::password;
        $this->db = (isset($params['db'])) ? $params['db'] : self::db;

        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
    }

    public function select($campi = [], $tabella, $condizione = ''){
        $sql = 'SELECT ';
        if(!$campi){
            $sql.='* ';
        } else {
            if(is_array($campi)){
                $i = 0;
                $length = count($campi);
                foreach ($campi as $value) {
                    if($i == $length-1){
                        $sql.= $value . ' ';
                    } else {
                        $sql.= $value . ',';
                    }
                    $i++;
                }
            }
        }

        $sql.='FROM ' . $tabella . ' ';

        if($condizione){
            $sql.='WHERE ' . $condizione;
        }
        return $this->connection->query($sql);
    }

    public function insert ($tabella, $campi = [], $valori = []){
        $sql = 'INSERT INTO '. $tabella . '(';

        if(!$campi){
            //ERRORE
        } else {
            if(is_array($campi)){
                $i = 0;
                $length = count($campi);
                foreach ($campi as $value) {
                    if($i == $length-1){
                        $sql.= $value . ') ';
                    } else {
                        $sql.= $value . ',';
                    }
                    $i++;
                }
            }
        }

        $sql.= 'VALUES (';
        if(!$valori){
            //ERRORE
        } else {
            if(is_array($valori)){
                $i = 0;
                $length = count($valori);

                foreach ($valori as $value) {
                    if($i == $length-1){
                        $sql.= "'$value')";
                    } else {
                        $sql.= "'$value',";
                    }
                    $i++;
                }
            }
        }

        return $this->connection->query($sql);
    }

    public function update ($tabella, $valori = '', $condizione = ''){
        $sql = 'UPDATE '. $tabella . ' SET ';

        $sql.= $valori;

        $sql.='WHERE ' . $condizione;

        return $this->connection->query($sql);
    }



    public function queryString($query = ''){
        return $this->connection->query($query);
    }


}