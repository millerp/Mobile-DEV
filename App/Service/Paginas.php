<?php

namespace App\Service;

use Absolute\Registry;

class Paginas {

  private function getCollection() {
    return Registry::get('mongo')->mobile_dev->paginas;
  }

  public function insere($dados) {
    $this->getCollection()->insert($dados);
    return $dados;
  }

  public function busca($page) {
    return $this->getCollection()->find(array("nome" => $page, "status" => "1"));
  }

  public function buscaTodas() {
    return $this->getCollection()->find();
  }

}