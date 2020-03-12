<?php
/**
 * Database connection must be done first...
 *
 * But for the sake of this example, we will only
 * demonstate a simple API
 */

// Setting up the headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// This is the method used, e.g: GET, POST, PUT, etc.
$method = $_SERVER['REQUEST_METHOD'];

// This would be the additional endpoints, in case needed
// e.g. localhost:8000/letters.php/test
// /test is the endpoint requested
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

// This is the request's body data
$data = json_decode(file_get_contents("php://input"));

// Received json array, convert to string
$receivedAlphabet = implode($data->strings);
// Default Alphabet letters
$alphabet = 'abcdefghijklmnopqrstuvwxyz';
// Compare the two strings
$alphaResult = strcmp($alphabet, $receivedAlphabet);

// Determine the method used in the request
switch ($method) {
    case 'PUT':
        // If all goes well
        if ($alphaResult === 0) {
            http_response_code(200);
            echo json_encode(array("message" => "Nice!"));
        } else {
            http_response_code(420);
            echo json_encode(array("message" => "Oops!"));
        }
        break;
    case 'GET':
    case 'POST':
        http_response_code(420);
        echo json_encode(array("message" => "Not available as of this moment"));
        break;
    default:
        http_response_code(420);
        echo json_encode(array("message" => "Something is not right."));
        break;
}
