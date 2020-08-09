<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['users/create']='users/create';
$route['users/update']='users/update';
$route['users/(:any)']='users/view/$1';
$route['categories/create']='categories/create';
$route['categories/update']='categories/update';
$route['categories/(:any)']='categories/view/$1';
$route['books/create']='books/create';
$route['books/update']='books/update';
$route['books/(:any)']='books/view/$1';
$route['books']='books/index';
$route['users']='users/index';
$route['categories']='categories/index';
$route['(:any)']='pages/view/$1';//evita poner el pages/view/ en la url y el $1 es para permitir poner cualquier url
$route['default_controller'] = 'pages/view';//se redirecciona a home porque es la pagina por default en la funcion cuando no pasamos la pagina
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



