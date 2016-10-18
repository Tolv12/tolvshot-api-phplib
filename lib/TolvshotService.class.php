<?php

class TolvshotService {
  function TolvshotService(TolvshotAPI $apiObject) {
    $this->apiObject = $apiObject;
    if($this->apiObject == null) {
      TolvshotOutput::displayFatalError(3,"Objeto TolvshotAPI inválido ou nulo.");
    }
  }




  function addContato(TolvshotContato $contato) {

    $method = "POST";
    $path = "/contato";

    $response = $this->sendData($method,$path,$contato);

  }



  private function sendData($method,$path,$contato) {

  }

}
