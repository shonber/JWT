<?php
require_once 'BeforeValidException.php';
require_once 'ExpiredException.php';
require_once 'SignatureInvalidException.php';
require_once 'JWT.php';
use \Firebase\JWT\JWT;

$public_key = file_get_contents('keys/private.pem');

echo JWT::encode(array(
	# Issuer
	"iss" => "https://www.example.com",
	
	# Issued at
	"iat" => time(),
	
	# Expire
	"exp" => time() + 120,
	
	"data" => [
		"name" => "admin"
	]
), $public_key, 'RS256');
