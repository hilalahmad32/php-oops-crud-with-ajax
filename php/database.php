<?php
// create class
class Database
{

    // take private variables

    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "php_oops_crud";

    private $conn = false;
    private $result = array();
    private $mysqli = "";

    // make a constructor to call automatically if the o
    // object is created;
    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->localhost, $this->username, $this->password, $this->database);
            $this->conn = true;
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }

    public function insert($table, $params = array())
    {
        // is table or not to make a function check this .
        if ($this->tableExists($table)) {
            $table_column = implode(', ', array_keys($params));
            $table_values = implode("', '", array_values($params));

            $sql = "INSERT INTO $table ($table_column) VALUES ('$table_values')";
            if ($this->mysqli->query($sql)) {
                array_push($this->result, true);
            } else {
                array_push($this->result, $this->mysqli->error);
            }
        }else{  
            return false;
        }
    }

    // get data from database
    public function select($table,$row="*",$order=null)
    {
        if($this->tableExists($table)){  
            $sql="SELECT $row FROM $table";
            if($order !=null){  
                $sql .=" ORDER BY $order"; 
            }
            $query=$this->mysqli->query($sql);
            if($query){
                $this->result=$query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{  
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }else{  
            return false;
        }
    }

    // delete data
    public function delete($table,$where=null)
    {
        if($this->tableExists($table)){  
            $sql="DELETE FROM $table";
            if($where != null){  
                $sql .= " WHERE $where";
            }
            if($this->mysqli->query($sql)){
                array_push($this->result,true);
                return true;
            }else{  
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }else{  
            return false;
        }
    }
    // check if table exist or not
    public function tableExists($table)
    {
        $sql = "SHOW TABLES FROM $this->database LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table . " not exist");
                return false;
            }
        } else {
            return false;
        }
    }

    // get result

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }


    // to make a distructure to destory the connection object
    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn=false;
                return true;
            }
        } else {
            return false;
        }
    }
}
