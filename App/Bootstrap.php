<?php

namespace App;

use Absolute\View\Layout,
    Absolute\Router\Route,
    Absolute\Application\Bootstrap AS AbsBootstrap,
    Absolute\Registry;

class Bootstrap extends AbsBootstrap {

  protected function initMongo() {
    $mongo = new \Mongo();

    Registry::set('mongo', $mongo);
  }

  protected function initRouter() {
    /*
     *
     * Routes
      Home - /
      Cadastro /cadastro
      →Termos de Uso - Contem os termos para uso do sistema.
      →Contato - Contem dados para contato com o desenvolvedor do sistema.
      →Login - Efetua o login para ter acesso ao painel de usuario ou de administrador do sistema.
      →Painel de Usuário /painel
      →Conta - /
      → Imagens → Exibe as imagens enviadas pelo usuario.
      →Alterar dados – Altera os dados da conta.
     */

    $this->getRouter()
            ->addRoute(new Route('home page', 'home', 'index', '#^$#i'))
            ->addRoute(new Route('home', 'home'))
            //->addRoute(new Route('pagina', 'home'))
            ->addRoute(new Route('add', 'page', 'add'))
            ->addRoute(new Route('pagina', 'page', 'index', '/^pagina\/(.*)/'))
            ->addRoute(new Route('contato', 'contato'))
            ->addRoute(new Route('Deletar Imagem', 'painel', 'deletar', '/^deletar\/(.*)/'))
            ->addRoute(new Route('Perfil do usuario', 'user', 'perfil', '/^perfil\/(.*)/'))
            ->addRoute(new Route('Tratamento de erros', 'error', 'index', '/(.*)/'))
    ;
  }

  protected function initLayout() {
    Layout::getInstance()
            ->getHeaderStyle()
            ->append('/css/jquery.mobile.css')
            ->append('/css/jqm-docs.css')
    ;

    Layout::getInstance()
            ->getHeaderScript()
            ->append('/js/jquery.js')
            ->append('/js/jqm-docs.js')
            ->append('/js/js.js')
            ->append('/js/default.js')
    ;
  }

}