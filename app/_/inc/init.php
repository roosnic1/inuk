<?php
	set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

	require("_/inc/functions.php");

	//Constants
	define("FROM_EMAIL", "www.inuk-kollektiv.ch <mail@inuk-kollektiv.ch>");

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
		case '0.0.0.0':
			define("CONTACT_EMAIL", "");
			define("ANALYTICS_ID", "");
			break;

		case 'www.inuk-kollektiv.ch':
			define("CONTACT_EMAIL", "mail@inuk-kollektiv.ch");
			define("ANALYTICS_ID", "UA-56991711-1");
			break;
	}

	//Set Timezone
	date_default_timezone_set("Europe/Zurich")

?>