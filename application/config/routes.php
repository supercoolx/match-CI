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
$route['default_controller'] = 'index/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact'] = 'index/contact';
$route['confirm'] = 'index/confirm';
$route['thanks'] = 'index/thanks';
$route['policy'] = 'index/policy';
$route['recruit_contact'] = 'index/recruit_contact';
$route['recruit_confirm'] = 'index/recruit_confirm';
$route['engineer_unexperienced'] = 'index/engineer_unexperienced';
$route['project_manager'] = 'index/project_manager';
$route['application_engineer'] = 'index/application_engineer';
$route['network_engineer_design_construction'] = 'index/network_engineer_design_construction';
$route['network_engineer_operation_maintenance'] = 'index/network_engineer_operation_maintenance';
$route['server_engineer_design_construction'] = 'index/server_engineer_design_construction';
$route['server_engineer_operational_monitoring'] = 'index/server_engineer_operational_monitoring';
$route['cloud_engineer'] = 'index/cloud_engineer';
$route['game_engineer'] = 'index/game_engineer';
$route['front_end_engineer'] = 'index/front_end_engineer';
$route['server_side_engineer'] = 'index/server_side_engineer';
$route['ui_designer'] = 'index/ui_designer';
$route['planner'] = 'index/planner';
$route['corporate_sales'] = 'index/corporate_sales';
$route['ses_sales_agency'] = 'index/ses_sales_agency';
