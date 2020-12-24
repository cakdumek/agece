<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)'] = 'welcome/single/$1';
$route['p/contact'] = 'welcome/contact';
$route['p/dmca'] = 'welcome/dmca';
$route['p/disclaimer'] = 'welcome/disclaimer';
$route['p/privacy'] = 'welcome/privacy';
$route['p/sitemap.xml'] = 'welcome/sitemap';
$route['p/robots.txt'] = 'welcome/robots';
$route['p/sitemaps.html'] = 'welcome/sitemaps';