<?php


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://edamam-recipe-search.p.rapidapi.com/search?q=chicken",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: edamam-recipe-search.p.rapidapi.com",
		"x-rapidapi-key: f8cbcb031fmsh979210ec5d6e31ep1ffebajsn419b34dc4aac"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}