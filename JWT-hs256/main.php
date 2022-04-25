<?php
require_once 'BeforeValidException.php';
require_once 'ExpiredException.php';
require_once 'SignatureInvalidException.php';
require_once 'JWT.php';
use \Firebase\JWT\JWT;

$key = 'secret';

echo JWT::encode(array(
	# Issuer
	"iss" => "https://www.itsafe.co.il",
	
	# Issued at
	"iat" => time(),
	
	# Expire
	"exp" => time() + 120,
	
	"data" => [
		"name" => "admin"
	]
), $key, 'HS256');