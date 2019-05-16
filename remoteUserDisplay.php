<?php
$ch = curl_init('https://laxmikantbhaskarpandhare.000webhostapp.com/remoteUsers.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$data = json_decode($result, true);


$htmlData = '<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container">
   
      <div style="background-color: #E2E6EA">  <h1>Laximkant pandhre Users</h1><table border="1">';

if (isset($data['error'])) {
	# code...
	echo '<html>
			<head>
   			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      
      <div style="background-color: #E2E6EA"><p>No results found</p></div>
   </div>
</body>
</html>';
} else {
	foreach ($data as $key => $value) {
		$htmlData = $htmlData . '<tr>
                  <td>
                    '. $value["first_name"] .'
                  </td>
                  <td>
                    '. $value["last_name"] .'
                  </td>
              </tr>
            ';
      	}		
	$htmlData = $htmlData.'</table></div>
   	</div>
	</body>
	</html>';
    echo $htmlData;
}
?>
