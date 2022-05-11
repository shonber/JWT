<?php
require_once 'BeforeValidException.php';
require_once 'ExpiredException.php';
require_once 'SignatureInvalidException.php';
require_once 'JWT.php';
use \Firebase\JWT\JWT;

$private_key = file_get_contents('keys/private.pem');

echo JWT::encode(array(
	# Issuer
	"iss" => "https://www.example.com",
	
	# Issued at
	"iat" => time(),
	
	# Expire
	"exp" => time() + 120,
	
	# Data
	"data" => [
		"name" => "admin"
	]
), $private_key, 'RS256');
