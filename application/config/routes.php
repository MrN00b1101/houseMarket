<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['user/login'] = 'user/login';
$route['user/register'] = 'user/register';

$route['house/add'] = 'house/add'; 
$route['house/list'] = 'house/index'; 
$route['house/update'] = 'house/update'; 
$route['house/(:any)'] = 'house/view/$1';
$route['house'] = 'house/index';

$route['default_controller'] = 'house';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
