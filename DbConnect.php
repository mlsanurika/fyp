<?php

class DbConnect
{
    //private variable to store constant
    private $con;
    
    function connect()
    {
        //including the constant.php file to get database constant
        include_once dirname(__FILE__).'/constants.php';
        
        
        //syntax mysqli to connect to database 
        $this->con = new mysqli(DB_HOST,DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        
        //check if connection error
        if(mysqli_connect_errno()){
            echo "Failed to connnect to Mysql ".mysqli_connect_errno();
            return null;
        }
        
        
        //return the connection variable
        return $this->con;
    }
    
    
    
}


?>