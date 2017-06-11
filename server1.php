<?php
/***
 * It's written by HUYNH DINH QUI
 * Multiaccount
 * Limits post
 * Custom Function
 * Clean all report or warning messenger
 * Updated: 16/05/2017
 * Version: Official 1.0
 ***/
//bot_main('EAAAAAYsX7TsBAENrusUsNEWWhtpYIstY5SebJ7hQPupODlJwnD2uFJ1BzZAmadnk8IbPr9MOGGE2GVyAJZAMxrjrHZBCvTYaELwbj2MEZCOBqZBqZBZBKUzlSDTSBI44KuefGMZBE0mDURAep1Dx6U4AFq46mMK9FqwhQyZBftVrE0gZDZD',2,'LOVE');

//DoQuyen
bot_main('EAAAAAYsX7TsBAK1zg3yUr3OZBXw1u9C8GXhH68ZCYIelzOFVKeXyPKfDEDeLOvGvGu98gILeNEbFZBlW2uWctMn9ZBRciEcXEqDU5mVnuxTw3YufNiivnZCS3GZAuGJ8qf2rZBBfKMBAalURmVmBabp3w8t3rQgXy0k3v2S6GaZBuOSMoRhQWNPt',3,'LOVE');

//TranVi
bot_main('EAAAAAYsX7TsBAKruHeRz6iAYfG1UjKB6O1DOWj3iZCigwkTJOWy0Vby4ynMRIRjJ8Ya0g0ZBJ9DZAtrNQd8MznltfhdqpZCKrZAHZAF4f9ZCywm8CCdWFZCCIsW43V5R8LeXWMzoQFoTMZAUaA2GyS6aT2JCRqIu35W4ZD',3,'LOVE');

//NhuHuynh
//bot_main('EAAAAAYsX7TsBACzvJOGAZAZBWI3N7TSZCsReI2ODZCsyQLIY97BxFovOpzuZBW7HSNyMRU053gy1i3UN5VBoHMMZAQdjtHI1nRX2RRlmw3vmCgsbx21vq3x1pEZA035nKZBf5AF68hGueSTOLBAZCJfYZCz8sKIXsOS6JVGw7U140oJlK6JyPbo5Ye',2,'LIKE');

//Huynh Nhu
bot_main('EAAAAAYsX7TsBAJqAtBFZB8FElhRlsfD5gLJhnhyNHeScq2s41xJNTZCn3uCxwqeofDh4qZAc28FsJrCgQwN1SaQZAHsXsNKIojjTBhF2NnyqCDoDYJbHQJUBnRfXb1Gzi8wLtDl5ZCiG9c7ZBIBbBg37CTCUno89wZD',3,'LOVE');

//Ngoc Han
bot_main('EAAAAAYsX7TsBAHRXG1FPpmCZBSKYdUnE9V7xyVz40SRa4ksJCdXNvkm0c02cn5cjle2Es1Udr7V56keE5elhfBuR1LRMSAwq2g1asY15pK6fLTump7b8ySqQjpaoIkoopCuFqq4f3pL2VleU8XOOQ0BtvI64ZD',3,'LOVE');

function bot_main($token,$limits,$func){
		$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limits.''),true);
    	for($i=1;$i<=count($puaru[data]);$i++){
		// Turn off all error reporting
        error_reporting(0);
		set_time_limit(0);
		$camxuc=$func;//ANGRY LIKE LOVE SAD WOW
		//$mess=$camxuc[rand(0,count($camxuc)-1)];
		echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$camxuc.'&method=post&access_token='.$token.'');
		}
}

function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}

?>