<?php
if (auth::isloggedin()) {
	$PROJECT_URL = PROJECT_URL;
	$links = array("{$PROJECT_URL}/index" => 'Home',
	"{$PROJECT_URL}/contacts/add" => 'Add Contact',
	"{$PROJECT_URL}/contacts/import" => 'Import Contacts');
	if (auth::isadmin()) {
		$links[PROJECT_URL.'/users'] = 'User Admin';
	}
	$links[PROJECT_URL.'/logout'] = 'Log Out';
	echo ' <ul> ';
	foreach ($links as $link => $title) {
		echo ' <li> <a href="' . $link . '" > ' . $title . ' </a> </li> ';
	}
	echo ' </ul> ';
}