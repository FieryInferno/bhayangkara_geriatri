<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages']   = array();
$autoload['libraries']  = array('form_validation', 'session', 'database');
$autoload['drivers']    = array();
$autoload['helper']     = array('url', 'bhayangkara_helper');
$autoload['config']     = array();
$autoload['language']   = array();
$autoload['model']      = array('ModelUser', 'ModelDokter', 'ModelEmergency', 'ModelPost', 'ModelPasien', 'ModelHomecare');
