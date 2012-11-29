<?php

namespace App\Controller;

use Absolute\Controller\Action,
    App\Service\Paginas as Pages;

class Home extends Action {

  protected function indexAction() {
    $pages = new Pages();
    $this->view->menu = $pages->buscaTodas();
    $this->render();
  }

}