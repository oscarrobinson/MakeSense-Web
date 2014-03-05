<?php  
$cfg['blowfish_secret'] = 'w)e{4lGIs6mi{xeGaR8%RPNFSAcijY4OCZyG3)qdSE-';  // use here a value of your choice  
$i = 0;  
/* First server */  
$i++;  
/* Authentication type */  
$cfg['Servers'][$i]['auth_type'] = 'cookie';  
/* Server parameters */  
$cfg['Servers'][$i]['host'] = 'eu-cdbr-azure-north-b.cloudapp.net';  // Replace with value from connection string  
$cfg['Servers'][$i]['connect_type'] = 'tcp';  
$cfg['Servers'][$i]['compress'] = false;  
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = true; 
$cfg['Servers'][$i]['User'] = 'b56834bde0c85e'; 
$cfg['Servers'][$i]['Password'] = '87a230d7'; 
?>
