<?php
	set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

	require("_/inc/functions.php");

	//Constants
	define("FROM_EMAIL", "www.test.com <webform@www.test.com>");

	//Setup Variable for tracking VirtualPageViews in analytics.
	$VirtualPageView = "";

	//Variables to store Site/URL information
	$ServerName = $_SERVER['SERVER_NAME'];
	$SiteSection = "";
	$SubSection = "";

	$RequestMethod = $_SERVER['REQUEST_METHOD'];
	$FormErrors = array();

	setSectionInfo();

	//SET SERVER SPECIFIC VARIABLES AND CONSTANTS
	switch ($ServerName) {
		case 'www.test.com/dev':
			define("CONTACT_EMAIL", "");
			define("ANALYTICS_ID", "");
			break;

		case 'www.test.com':
			define("CONTACT_EMAIL", "");
			define("ANALYTICS_ID", "");
			break;
	}

	//Set Timezone
	date_default_timezone_set("Europe/Zurich")

?>