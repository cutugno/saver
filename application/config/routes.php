<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['cookie'] = 'home/cookie';

// paginazione blog
$route['notizie/(:num)'] = 'blog/index/1/$1';
$route['rassegna-stampa/(:num)'] = 'blog/index/2/$1';
// articoli blog singoli
$route['notizie/(:any)/(:num)'] = 'blog/single/1/$2/$1';
$route['rassegna-stampa/(:any)/(:num)'] = 'blog/single/2/$2/$1';
// pagine blog
$route['notizie'] = 'blog/index/1';
$route['rassegna-stampa'] = 'blog/index/2';

$route['rete-vendita'] = 'rete';
$route['prodotti/(:any)/(:any)/(:num)'] = 'prodotti/single/$3';
// categorie prodotti
$route['prodotti/linea-open'] = 'prodotti/index/1';
$route['prodotti/linea-walk-around'] = 'prodotti/index/2';
$route['prodotti/linea-fisher'] = 'prodotti/index/3';
$route['prodotti/linea-cabin'] = 'prodotti/index/4';
$route['prodotti/linea-gommoni-mg'] = 'prodotti/index/5';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
