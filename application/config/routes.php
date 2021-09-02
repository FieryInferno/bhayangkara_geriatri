<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'Login';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
$route['login']                 = 'Login';
$route['dashboard']             = 'Admin';
$route['emergency/(:any)']      = 'Emergency/index/$1';
$route['homecare/(:any)']       = 'Homecare/index/$1';
$route['logout']                = 'Logout';
$route['ubah_password']         = 'Admin/ubahPassword';
$route['notifikasi']            = 'Admin/notifikasi';
$route['get_notifikasi']        = 'Admin/getNotifikasi';

$route['pasien']          = 'Pasien';
$route['periksa_pasien']  = 'Pasien/periksa';

$route['post']              = 'Post';
$route['post/tambah']       = 'Post/tambah';
$route['post/edit/(:any)']  = 'Post/edit/$1';
$route['post/hapus/(:any)'] = 'Post/hapus/$1';

$route['dokter']              = 'Dokter';
$route['dokter/tambah']       = 'Dokter/tambah';
$route['dokter/edit/(:any)']  = 'Dokter/edit/$1';
$route['dokter/hapus/(:any)'] = 'Dokter/hapus/$1';