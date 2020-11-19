<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';

$route['imagem'] 				= 'welcome/imagem';
$route['imagem/do_upload'] 		= 'welcome/do_upload';
$route['imagem/edit/(:num)'] 	= 'welcome/edit/$1';
$route['imagem/update'] 		= 'welcome/update';
$route['imagem/delete/(:num)'] 	= 'welcome/delete/$1';

$route['validaCns'] 				= 'welcome/validaCns';



// CONTROLLER AUTHENTICATION
$route['login'] 		= 'auth/login';
$route['register'] 		= 'auth/register';
$route['recovery'] 		= 'auth/recovery';
$route['logout'] 		= 'auth/logout';


// CONTROLLER DASHBOARD
$route['dashboard']  	= 'cpanel/dashboard';
$route['dashboard/version']  	= 'cpanel/dashboard/version';


// CONTROLLER USERS
$route['dashboard/users']  	= 'cpanel/users';
$route['dashboard/users/register']  = 'cpanel/users/register';
$route['dashboard/users/edit/(:num)']  = 'cpanel/users/edit/$1';
$route['dashboard/users/update']  = 'cpanel/users/update';
$route['dashboard/users/delete/(:any)']  = 'cpanel/users/delete/$1';

// PATIENTS MANAGEMENT
$route['dashboard/patients']  = 'cpanel/patients';
$route['dashboard/patients/register']  = 'cpanel/patients/register';
$route['dashboard/patients/edit/(:num)']  = 'cpanel/patients/edit/$1';
$route['dashboard/patients/update']  = 'cpanel/patients/update';
$route['dashboard/patients/delete/(:any)']  = 'cpanel/patients/delete/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
