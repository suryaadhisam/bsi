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

$route['admin/booking'] = 'admin/booking/getAllBooking';
$route['admin/booking/(:num)'] = 'admin/booking/getAllBooking/$1';

$route['admin/package'] = 'admin/package/getPackages';
$route['admin/package/(:num)'] = 'admin/package/getPackages/$1';

$route['admin/services'] = 'admin/service/getServices';
$route['admin/services/(:num)'] = 'admin/service/getServices/$1';

$route['admin/carousel'] = 'admin/carousel/getCarousels';
$route['admin/carousel/(:num)'] = 'admin/carousel/getCarousels/$1';

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
$route['admin/socmed/change-state'] = 'admin/socmed/changeStateSocmed';
$route['admin/socmed/update'] = 'admin/socmed/updateSocmed';
$route['admin/socmed/get'] = 'admin/socmed/getSocmed';

$route['admin/carousel/add'] = 'admin/carousel/addCarousel';
$route['admin/carousel/delete'] = 'admin/carousel/deleteCarousel';
$route['admin/carousel/update'] = 'admin/carousel/updateCarousel';
$route['admin/carousel/get'] = 'admin/carousel/getCarousel';
$route['admin/carousel/change-state'] = 'admin/carousel/changeStateCarousel';

$route['admin/package/add'] = 'admin/package/addPackage';
$route['admin/package/soft-delete'] = 'admin/package/softDeletePackage';
$route['admin/package/update'] = 'admin/package/updatePackage';
$route['admin/package/get'] = 'admin/package/getPackage';

$route['admin/schedule/add'] = 'admin/schedule/addSchedule';
$route['admin/schedule/soft-delete'] = 'admin/schedule/softDeleteSchedule';
$route['admin/schedule/update'] = 'admin/schedule/updateSchedule';
$route['admin/schedule/get'] = 'admin/schedule/getSchedule';

$route['admin/about/index'] = 'admin/about/index';
$route['admin/about/add'] = 'admin/about/store';

$route['admin/about'] = 'admin/about/index';
$route['admin/about/create'] = "admin/about/create";
$route['admin/about/store'] = "admin/about/store";
$route['admin/schedule/destroy'] = 'admin/schedule/destroy';
$route['admin/about/(:num)/edit'] = "admin/about/edit/$1";
$route['admin/about/(:num)/update'] = "admin/about/update/$1";

$route['admin/dashboard'] = "admin/dashboard/dashboard";

$route['admin/contact-us'] = 'admin/contactUs';
$route['admin/contact-us/(:num)/edit'] = "admin/contactUs/edit/$1";
$route['admin/contact-us/(:num)/update'] = "admin/contactUs/update/$1";

$route['admin/facility'] = 'admin/facility';
$route['admin/facility/create'] = "admin/facility/create";
$route['admin/facility/store'] = "admin/facility/store";
$route['admin/facility/destroy'] = 'admin/facility/destroy';
$route['admin/facility/(:num)/edit'] = "admin/facility/edit/$1";
$route['admin/facility/(:num)/update'] = "admin/facility/update/$1";
$route['admin/facility/upload-images'] = "admin/facility/uploadImages";

$route['admin/faq'] = 'admin/faq';
$route['admin/faq/create'] = "admin/faq/create";
$route['admin/faq/store'] = "admin/faq/store";
$route['admin/faq/destroy'] = 'admin/faq/destroy';
$route['admin/faq/(:num)/edit'] = "admin/faq/edit/$1";
$route['admin/faq/(:num)/update'] = "admin/faq/update/$1";

$route['admin/gallery'] = 'admin/gallery';
$route['admin/gallery/create'] = "admin/gallery/create";
$route['admin/gallery/store'] = "admin/gallery/store";
$route['admin/gallery/destroy'] = 'admin/gallery/destroy';
$route['admin/gallery/(:num)/edit'] = "admin/gallery/edit/$1";
$route['admin/gallery/(:num)/update'] = "admin/gallery/update/$1";

$route['admin/logo'] = 'admin/logo';
$route['admin/logo/(:num)/edit'] = "admin/logo/edit/$1";
$route['admin/logo/(:num)/update'] = "admin/logo/update/$1";

$route['admin/flyer'] = 'admin/flyer';
$route['admin/flyer/create'] = "admin/flyer/create";
$route['admin/flyer/store'] = "admin/flyer/store";
$route['admin/flyer/destroy'] = 'admin/flyer/destroy';
$route['admin/flyer/(:num)/edit'] = "admin/flyer/edit/$1";
$route['admin/flyer/(:num)/update'] = "admin/flyer/update/$1";

$route['admin/info'] = 'admin/info';
$route['admin/info/(:num)/edit'] = "admin/info/edit/$1";
$route['admin/info/(:num)/update'] = "admin/info/update/$1";

$route['admin/testimoni'] = 'admin/testimoni';
$route['admin/testimoni/changeState'] = "admin/testimoni/changeState";