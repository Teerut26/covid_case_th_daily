<?php
    include('get_json.php');
    $text = $NewConfirmed;
    $lang = "th";
    $file  = md5($lang."?".urlencode($text));
    $file = "audio/" . $file .".mp3";
    
    if(!is_dir("audio/"))
        mkdir("audio/");
    else
        if(substr(sprintf('%o', fileperms('audio/')), -4)!="0777")
            chmod("audio/", 0777);


    if (!file_exists($file))
    {
        $mp3 = file_get_contents(
        'http://translate.google.com/translate_tts?ie=UTF-8&q='."คนป่วยโควิดวันนี้".urlencode($text)."คน".'&tl='. $lang .'&client=tw-ob');
        file_put_contents($file, $mp3);
        
    }
    ?>
    <audio controls="nodownload" autoplay="autoplay">
		<source src="<?php echo $file; ?>" type="audio/mp3" />
	</audio>