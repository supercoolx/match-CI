<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//smtp 
$config['protocol'] = 'smtp';

/* SMTPサーバー 設定*/
#########################################################################################################


$config['smtp_host'] = 'sv12720.xserver.jp';
$config['smtp_user'] = 'info@scopecorp.co.jp';
$config['smtp_pass'] = 'ywwz9zu8';
$config['smtp_port'] = '587';//25 587 465

#########################################################################################################
$config['smtp_timeout'] = '30';  //timeout 10s
//$config['smtp_crypto'] = 'tls';

$config['mailtype'] = 'html';
$config['wrapchars'] = 152;
$config['validate'] = true;
$config['priority'] = 3;
$config['crlf']  = "\n";
$config['newline'] = "\n";

$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;