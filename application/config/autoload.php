<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session', 'form_validation', 'parser');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'string', 'inflector', 'text');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('crud_model');
