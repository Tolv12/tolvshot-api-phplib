<?php

class TolvshotAPI {

  var $key;
  var $token;

  var $api = "https://www.tolvshot.com/api/v1";

  function TolvshotAPI($key,$token) {
    $this->key = $key;
    $this->token = $token;

    if(!$this->isKeyValid()){
      TolvshotOutput::displayFatalError(1,"Parâmetro key inválido. (deve ter 64 caracteres)");
      die();
    }

    if(!$this->isTokenValid()){
      TolvshotOutput::displayFatalError(2,"Parâmetro token inválido. (deve ter 32 caracteres)");
      die();
    }

  }



  private function isKeyValid() {
    return !!preg_match('/^[A-Za-z0-9]{64}$/iD',$this->key));
  }

  private function isTokenValid() {
    return !!preg_match('/^[A-Za-z0-9]{32}$/iD',$this->token));
  }

}
