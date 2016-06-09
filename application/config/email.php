<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'localhost';
$config['smtp_user'] = 'form@saverimbarcazioni.com';
$config['smtp_pass'] = '0JK66gLJ';
$config['mailtype'] = 'html'; 
$config["multipart"]="related"; 

$config['contactdest'] = CONTACTDEST;
$config['contactsubject'] = CONTACTSUBJECT;

?>
