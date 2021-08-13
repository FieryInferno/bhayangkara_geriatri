<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'Login';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
$route['login']                 = 'Login';
$route['dashboard']             = 'Admin';
$route['emergency']             = 'Emergency';
$route['pasien']                = 'Pasien';

$route['post']        = 'Post';
$route['post/tambah'] = 'Post/tambah';

$route['dokter']              = 'Dokter';
$route['dokter/tambah']       = 'Dokter/tambah';
$route['dokter/edit/(:any)']  = 'Dokter/edit/$1';
$route['dokter/hapus/(:any)'] = 'Dokter/hapus/$1';