<?php
include('get_json.php');
include('get_json_date.php');
$text = $NewConfirmed;
$lang = "th";
$file  = md5($lang . "?" . urlencode($text));
$file = "audio/" . $file . ".mp3";

if (!is_dir("audio/"))
    mkdir("audio/");
else
        if (substr(sprintf('%o', fileperms('audio/')), -4) != "0777")
    chmod("audio/", 0777);


if (!file_exists($file)) {
    $mp3 = file_get_contents(
        'http://translate.google.com/translate_tts?ie=UTF-8&q=' . "คนป่วยโควิดวันนี้" . urlencode($text) . "คน" . '&tl=' . $lang . '&client=tw-ob'
    );
    file_put_contents($file, $mp3);
}
?>
<html>
<header>
	<meta charset="UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Audio
    </title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</header>

<body>
	<center>
	<div class="card">
		<div class="card-body">
    <audio controls autoplay>
        <source src="<?php echo $file; ?>" type="audio/mp3" />
    </audio>
			<br>
			<br>
			<div class="card">
			<div class="card-body">
    <h5></h5>
				<div class="alert alert-success" role="alert">อัพเดท : <strong><?php echo $UpdateDate; ?></strong></div>
				<div class="alert alert-primary" role="alert">ที่มา : <a href="http://covid19.th-stat.com/" class="alert-link">covid19.th-stat.com</a></div>
				<br>
				<img src="COVID28026333.jpg" class="img-fluid" alt="Responsive image">
				</div>
				</div>
	</div>
		</div>
		</center>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>