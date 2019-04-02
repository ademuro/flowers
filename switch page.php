<?php
//phpinfo();
//session_set_cookie_params(21600);
//session_start();
//ob_start();

	include('header.php');
	if (! isset($_REQUEST['do']) ) { $do = 'home'; } else { $do = $_REQUEST['do']; }
	$authenticated = true;
	
	switch ($do) {
		case 'home';
			include('home.php');
			break;
		default;
			include('home.php');
	}
	//include('includes/footer_authenticated.php');

?>