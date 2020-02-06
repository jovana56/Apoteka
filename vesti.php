
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>

<title>Vesti</title>
</head>
<body>
<?php
$url = 'https://newsapi.org/v2/top-headlines?country=rs&category=health&apiKey=8f2efa272a8044f7922a46b3a5d42698';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$parsiran_json = json_decode ($curl_odgovor);


foreach ($parsiran_json->articles as $clanak){?>

<article>
  <h1 style="color:black; font: Verdana;"><?php echo $clanak->title;?></h1>
  <p><a href="<?php echo $clanak->url;?>" style="color:black; font: Verdana;"> <?php echo $clanak->url;?></a></p>
 
</article>

<?php

}
?>
</body>
</html>
 
