<?php
class Database
{
    protected $connection = null;
 
    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DATABASE_NAME, DB_USERNAME, DB_PASSWORD);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $this->connection=$conn;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }           
    }
 
    public function select($query = "" , $params = [])
    {
        try {
            $stmt = $this->executeStatement( $query , $params );
            $result = $stmt->fetchAll();               
            return $result;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }


    public function insert($query = "" , $params = array() )
    {
        try {
            $stmt = $this->executeStatement( $query , $params );
            return $stmt;
        } catch(Exception $e) {
            echo $e->getMessage() ;
        }
        return false;
    }
 
    private function executeStatement($query = "" , $params = [])
    {
        try {
            $stmt = $this->connection->prepare( $query );
 
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
 
            if( $params ) {
                $stmt->execute($params);
            }else{
                $stmt->execute();
            }
 
            
 
            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }   
    }
}