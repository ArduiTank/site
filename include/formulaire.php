<?php
	if(isset($_POST["name"] || isset($_POST["email"] || isset($_POST["message"]) == '') {
		?>
			alert("Missing information !");
		<?php	
		die();
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	if(isset($_POST["subject"]) == '') {
		$subject = $_POST['subject'];
	}
	$message = $_POST['message'];

	$webhookurl = "URL here";
	$timestamp = date("c", strtotime("now"));
	$json_data = json_encode([                
		// Username
		"username" => "ArduiTank - Site - Formulaire",

		// Text-to-speech
		"tts" => false,
		// Embeds Array
		"embeds" => [
			[
				"title" => "Nouveau formulaire",
	
				"type" => "rich",
				"timestamp" => $subject,
				"color" => hexdec( "3e66ff" ),
	
				// Footer
				"footer" => [
					"text" => "This is the end :p",
				],

					"author" => [
					"name" => "Formulaire de : $name",
					"url" => ""
				],
	
				"fields" => [
					[
						"name" => "Email",
						"value" => "||$email||",
						"inline" => true
					],
					[
						"name" => "Message",
						"value" => "$message",
						"inline" => true
					]
				]
			]
		]
	
	], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init( $webhookurl );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
	
	$response = curl_exec( $ch );
	// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
	// echo $response;
	curl_close( $ch );
?>
<script type="text/javascript">
	alert("Succes !");
</script>
