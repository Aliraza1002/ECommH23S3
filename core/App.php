<?php

class App {

	function __construct() {
		//this is where we want to route the request to the approriate classes/methods

		echo $_GET['url'] ?? 'No URL provided';

		var_dump($request);
	}
	function parseURL($url) {
		return explode("/", $url);
	}
}