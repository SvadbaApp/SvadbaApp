<?php

class Db {
  private static $instance;

  public static function getDbConnection() {
    if (self::$instance == null) {
      self::$instance = new PDO('mysql:host=localhost;dbname=svadba_app', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    return self::$instance;
  }
}
?>