<?php
class ClassAttendDB {
    function construct($host,$user,$pass,$db){
	      $this->host = $host;
	      $this->user = $user;
	      $this->pass = $pass;
	      $this->db = $db;
	      $this->dsn = "mysql:dbname=$db;$host=$host";
        $this->insert = null;
        $this->update="update ClassAttendTable set Type=0 where ";
        $this->loginUpdate = "update ClassAttendTable set Type=? where UserId=?,Date=?,Time=?";
        $this->delete =
        $this->
	         }


function fetch()
	{
	try{
        $pdo = new PDO ($this->dsn, $this->user, $this->pass, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'"));
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        } catch(PDOException $ei) {
                echo 'Connection failed:'.$e->getMessage();
                exit();}
	}

function execute ($sql)
        {
        try{
        $pdo = new PDO ($this->dsn, $this->user, $this->pass, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'"));
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $pdo->lastInsertId();
        return $data;
	} catch(PDOException $ei) {
                     echo 'Connection failed:'.$e->getMessage();
                exit();}
	}

}
?>


?>
