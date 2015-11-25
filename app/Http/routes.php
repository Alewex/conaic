<?php

$app->get('/', [
	'as' => 'home',
	function () {
		return view('home');
	}
]);

$app->get('/nosotros', [
	'as' => 'about',
	function() {
		return view('nosotros');
	}
]);