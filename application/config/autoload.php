<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session', 'form_validation', 'parser', 'image_crud');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'string', 'inflector', 'text', 'form');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('crud_model');
