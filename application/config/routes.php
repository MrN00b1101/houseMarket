<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['user/login'] = 'user/login';
$route['user/register'] = 'user/register';
$route['user/profile/(:any)'] = 'user/profile/$1';

$route['message/list'] = 'message/list';
$route['message/read/(:any)'] = 'message/read/$1';
$route['message/write/(:any)'] = 'message/write/$1';


$route['house/add'] = 'house/add'; 
$route['house/list'] = 'house/index'; 
$route['house/edit/(:any)'] = 'house/edit/$1'; 
$route['house/update/(:any)'] = 'house/update/$1'; 
$route['house/(:any)'] = 'house/view/$1';
$route['house'] = 'house/index';

$route['default_controller'] = 'house';
$route['download/(:any)'] = "/filecontroller/download/$1";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
