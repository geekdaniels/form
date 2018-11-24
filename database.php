<?php

 class Database {
  public $dbserver = "";
  public $username = "";
  public $password = "";
  public $database = "";
  public $db = "";

  public function __construct(){
   $this->dbserver = 'localhost';
   $this->username = 'root';
   $this->password = '';
   $this->database = 'lotus';
   $this->db = new PDO('mysql:host='.$this->dbserver.';dbname='.$this->database, $this->username, $this->password );
  }

  public function dbselect($table, $select, $where=NULL){

  }

  public function dbadd($table, $insert, $where=NULL){

  }


  public function dbupdate($table, $insert, $where=NULL){

  }

 }


 ?>
