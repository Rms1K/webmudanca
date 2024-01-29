<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 * 
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('sobre', 'Home::Sobre');
$routes->get('recuperacaosenha', 'Home::recuperacaoSenha');
$routes->get('imovel/(:num)', 'Home::imovel/$1');


$routes->post('dadoslogin', 'AuthController::dadosLogin');
$routes->get('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');


$routes->get('painelusuario', 'PainelSistema::painelUsuario'); 
$routes->get('meusimoveis', 'PainelSistema::meusImoveis');

$routes->get('editarmeusdados', 'EditarDados::editarMeusDados');
$routes->post('enviaremail', 'EditarDados::enviarEmail');
$routes->get('editarsenha', 'EditarDados::viewNovaSenha');
$routes->post('senhaeditar', 'EditarDados::senhaEditar');
$routes->post('dadosparaeditar', 'EditarDados::dadosparaEditar');
$routes->post('excluirconta', 'EditarDados::excluirConta');
$routes->post('excluirimovel', 'EditarDados::excluirImovel');

$routes->post('dadoseditarimovel', 'EditarDados::dadosEditarImovel'); 
$routes->get('editarimovel/(:num)', 'EditarDados::editarImovel/$1'); 

$routes->get('cadastrousuario', 'Cadastros::cadastroUsuario');
$routes->get('cadastraimovel', 'Cadastros::cadastraimovel');
$routes->get('cadastraImoveis', 'Cadastros::cadastraImoveis');
$routes->post('cadastraImoveis', 'Cadastros::cadastraImoveis');
$routes->post('dadosimoveis', 'Cadastros::DadosImoveis'); 
$routes->get('dadosimoveis', 'Cadastros::DadosImoveis'); 
$routes->post('dadoscadastro', 'Cadastros::dadosCadastro');


$routes->post('dadospesquisa', 'BarraPesquisa::dadosPesquisa');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
