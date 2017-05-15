<?php

require 'vendor/autoload.php';
//----------TEST URL
// define('SITE_URL', 'http://localhost/InfoBosnia/html');
define('SITE_URL', 'http://infobosniatours.com/');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AXsCeP4YKN_dS-qQilvjYRhiUIa00P5i35xDrB21_TP8RkI6lxmfscqlVPhCQbZGY2gt_mIkO8Zco820',
        'EMvw0OMkBow0o3YdlC2b_sM7Kcdgf0J_Wr01ITtaGw-pnyoMk2L-3CLLD5-mwd4JChuAi_5662qS7zpD'
    )
);

$paypal->setConfig(
  array(
  	'mode' => live,
    'log.LogEnabled' => true,
    'log.FileName' => 'PayPal.log',
    'log.LogLevel' => 'INFO'
  )
);

//---------TEST CREDENTIALS//
/*
		$paypal = new \PayPal\Rest\ApiContext(
		    new \PayPal\Auth\OAuthTokenCredential(
		        'ARs88QEyothIlSMtv8F-exj8tDLWOBmK8yMICpLSGtHx1qScHQ9aGFinbrNTMA0CxNh_EjOucMUU99RQ',
		        'EGuBqY6R_MBxBY_9fZNWjq93OSxGlH57QBMnYDVM3mWei20Hxnpx24amf0saV_BKhKP9shbR_N27LMoi'
		    )
		);
*/
