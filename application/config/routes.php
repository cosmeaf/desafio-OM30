<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';



$route['login'] 	= 'auth/login';
$route['register'] 	= 'auth/register';
$route['recovery'] 	= 'auth/recovery';
$route['logout'] 	= 'auth/logout';


// CONTROLLER DASHBOARD
$route['dashboard']  = 'cpanel/dashboard';


// PATIENTS MANAGEMENT
$route['dashboard/patients']  = 'cpanel/patients';
$route['dashboard/patients/register']  = 'cpanel/patients/register';
$route['dashboard/patients/edit/(:any)']  = 'cpanel/patients/edit/$1';
$route['dashboard/patients/update/(:any)']  = 'cpanel/patients/update/$1';
$route['dashboard/patients/delete/(:any)']  = 'cpanel/patients/delete/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
