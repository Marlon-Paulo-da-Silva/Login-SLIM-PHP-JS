<?php

namespace app\database;

class Connection {
  private static $connect = null;

  public static function getConnection()
  {
    if(!self::$connect) {
      self::$connect = new PDO("mysql:host=localhost;dbname=sistemadeeventos");
    }
  }
}