<?php
class Db{

  private static $servername = "localhost"; // 127.0.0.1
  private static $username = "root";
  private static $password = "";
  private static $database = "svadbaapp";
  private static $pdoInstance = NULL;

  //Singleton, we only need to open connection to DB once
  public static function getDbConnection() {
      //echo "<br><br>";
      if (self::$pdoInstance == null) { //$pdoInstance will be null if we didn't create the connection yet
        self::$pdoInstance = new PDO("mysql:dbname=".self::$database.";host=".self::$servername, self::$username, self::$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      }
      return self::$pdoInstance;
    }
}
?>