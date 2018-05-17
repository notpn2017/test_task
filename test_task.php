<?php 
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

function downloadFile($url) {
	try {
        $client = new GuzzleHttp\Client();

        $resource = fopen('download/get.php', 'w');

        $response = $client->get($url, [
            'sink' => $resource,
        ]);
        echo mime_content_type('download/get.php');
        echo "ok";
    } catch (Exception $e) {
        echo "error";
    }
}

$url = 'http://jacek.test.nordiceasy.com/test/Not/get.php';

downloadFile($url);


?>