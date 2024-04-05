<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'form_validation', 'session');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'form','date','file','html');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('User_model','Record_model','Multiplerecord_model','Addusers_model', 'Dashboard_model','Standarduser_model','Logs_model');
