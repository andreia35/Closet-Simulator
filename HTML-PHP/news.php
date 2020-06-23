<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Closet Simulator </title>
<link rel="stylesheet" type="text/css" href="../CSS/closetSimulator.css">

</head>
<body style="overflow-y: auto">
<img src="../Imagens/logofinal.png" class="center" align="left" style="width:9%" >


<?php
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://chicmi.p.rapidapi.com/calendar_in_city/?days=5&max_results=3&city=london",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: chicmi.p.rapidapi.com",
		"x-rapidapi-key: c9cb69ad49mshe0c30075cf2c38dp18426ejsnb974406cfad1"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;

}
?>
</body>
</html>

