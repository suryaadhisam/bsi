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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//untuk admin
$route['admin/auth'] = 'admin/auth';
$route['admin'] = 'admin/dashboard';
$route['admin/booking'] = 'admin/dashboard/booking';

$route['admin/package'] = 'admin/package/getPackages';
$route['admin/package/(:num)'] = 'admin/package/getPackages/$1';

$route['admin/services'] = 'admin/service/getServices';
$route['admin/services/(:num)'] = 'admin/service/getServices/$1';

$route['admin/carousel'] = 'admin/carousel/getCarousels';
$route['admin/carousel/(:num)'] = 'admin/carousel/getCarousels/$1';

$route['admin/contact-us'] = 'admin/dashboard/contactus';

$route['admin/social-media'] = 'admin/socmed/getSocmeds';
$route['admin/social-media/(:num)'] = 'admin/socmed/getSocmeds/$1';

$route['admin/schedule'] = 'admin/schedule/getSchedules';
$route['admin/schedule/(:num)'] = 'admin/schedule/getSchedules/$1';


$route['admin/profile'] = 'admin/dashboard/profile';

//API
$route['admin/auth-check-login'] = 'admin/auth/aksiLogin';
$route['admin/logout'] = 'admin/auth/logout';

$route['admin/service/add'] = 'admin/service/addService';
$route['admin/service/soft-delete'] = 'admin/service/softDeleteService';
$route['admin/service/update'] = 'admin/service/updateService';
$route['admin/service/get'] = 'admin/service/getService';

$route['admin/socmed/add'] = 'admin/socmed/addSocmed';
$route['admin/socmed/soft-delete'] = 'admin/socmed/softDeleteSocmed';
$route['admin/socmed/update'] = 'admin/socmed/updateSocmed';
$route['admin/socmed/get'] = 'admin/socmed/getSocmed';

$route['admin/carousel/add'] = 'admin/carousel/addCarousel';
$route['admin/carousel/soft-delete'] = 'admin/carousel/softDeleteCarousel';
$route['admin/carousel/update'] = 'admin/carousel/updateCarousel';
$route['admin/carousel/get'] = 'admin/carousel/getCarousel';

$route['admin/package/add'] = 'admin/package/addPackage';
$route['admin/package/soft-delete'] = 'admin/package/softDeletePackage';
$route['admin/package/update'] = 'admin/package/updatePackage';
$route['admin/package/get'] = 'admin/package/getPackage';

$route['admin/schedule/add'] = 'admin/schedule/addSchedule';
$route['admin/schedule/soft-delete'] = 'admin/schedule/softDeleteSchedule';
$route['admin/schedule/update'] = 'admin/schedule/updateSchedule';
$route['admin/schedule/get'] = 'admin/schedule/getSchedule';