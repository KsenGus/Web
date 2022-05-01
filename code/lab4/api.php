<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP Quickstart');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = '16dxG2jIKd5TFpmQfwx1spG0aycZBJNwDVZ1Yv-pcFDM';
$range = 'Class Data!A2:E';
$values = [$_POST['category'], $_POST['heading'], $_POST['email'], $_POST['text']];
$body = new Google_Service_Sheets_ValueRange(["values" => $values]);
$params = ['valueInputOption' => 'USER_ENTERED'];
$insert = ["insertDataOption" => "INSERT_ROWS"];
$service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
header("Location: advert.php");