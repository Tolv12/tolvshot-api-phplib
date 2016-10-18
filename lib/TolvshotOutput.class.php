<?php
class TolvshotOutput {
  const NAME = "Tolvshot API - PHP Lib";

  public static function displayFatalError($errorCode,$errorMessage) {
    echo "<h1>".static::NAME." Error</h1>";
    echo "<p>".$errorCode." - ".$errorMessage."</p>";
  }

}
