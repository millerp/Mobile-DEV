<?php

namespace App\Controller;

use Absolute\Controller\Action,
    App\Service\Paginas as Pages;

class Page extends Action {

  protected function indexAction() {

    $pagina = $this->getParam(0);
    $page = new Pages();
    //$page->insere(array("nome" => "123", "status" => "1", "url" => "/pagina/123/", "conteudo" => base64_encode("zsçodfgnaçflg</br> niqaç ogknaçlgnq akgban lkfjg nadlçf </br>gnsalfg naçlg naçsl dgna lksdgnaçlsd fnlaksjdfnlak sjdnflasn dlasdnf lasnd flasndlf</br> jasd nflaksdnf"), "titulo" => "TESTE"));
    $cursor = $page->busca($pagina);
    //$cursor1 = $page->buscaTodas();
    if($cursor->count() < 1){
      $this->view->paginaError = "<h1>Página não encontrada.</h1>";
      $this->view->pagina = null;
    }else{
      $this->view->pagina = $page->busca($pagina);
    }
    $this->render();
  }

  protected function addAction() {
    if (isset($_POST['submit'])) {
      $page = new Pages();
      unset($_POST['submit']);
      $page->insere(array("nome" => $_POST['nome'], "status" => $_POST['status'], "url" => $_POST['url'], "conteudo" => base64_encode($_POST['conteudo']), "titulo" => $_POST['titulo']));
    }

    $this->render();
  }

}