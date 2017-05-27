<?php
/***
 * It's written by HUYNH DINH QUI
 * Multiaccount
 * Limits post
 * Custom Function
 * Clean all report or warning messenger
 * Updated: 16/05/2017
 * Version: beta-0.3
 ***/
echo('bot starting');
//bot_main('EAAAAAYsX7TsBAENrusUsNEWWhtpYIstY5SebJ7hQPupODlJwnD2uFJ1BzZAmadnk8IbPr9MOGGE2GVyAJZAMxrjrHZBCvTYaELwbj2MEZCOBqZBqZBZBKUzlSDTSBI44KuefGMZBE0mDURAep1Dx6U4AFq46mMK9FqwhQyZBftVrE0gZDZD',2,'LOVE');
//ThienNhi
bot_main('EAAAAAYsX7TsBAIAyBwMJWQ1D7XiEZBGZC6CZAu2dZC6V4IBOhVMPJ2rXFdPmGA2TDobu3DScNpNJvdmG1vti1IFrfI9zx6SMaKFSzYT0q7UywccH3xXZC8kYnEmnGRYZAReeuK98bbyXUsRgPRjqWiYVsawKxGDIL68XrWxXlMzwZDZD',4,'LOVE');

//DoQuyen
bot_main('EAAAAAYsX7TsBACNpbNrITduscCea0pWVo1RZANDeKGEZCbaRx3ctBz0GeqYBT0CmLXzFsXZCWmvigZCRfxZBZBtkZBIjzqFZAXdlZCxT0eyrLkPifPvdPZA4JkL5MtKyLSz3TpiacQalwNSXZCcoIZAafLuMC0CjeAYBLh0ZD',2,'LOVE');

//TranVi
bot_main('EAAAAAYsX7TsBAOkikdqaIwufy4bgPS5YGk9KqHqJZBRwKTAtWheJ5pdkfp7qlHmmBO0VYSqYJxIXjXsco7rIO7e2iqVvo4nTnqhFNuV3obSRBLu9W9aoGdIDeg1jvTOxB37aHDqjsZA1QMS7ZAwcBb3QucCZBWIZD',2,'LOVE');

//NhuHuynh
bot_main('EAAAAAYsX7TsBACzvJOGAZAZBWI3N7TSZCsReI2ODZCsyQLIY97BxFovOpzuZBW7HSNyMRU053gy1i3UN5VBoHMMZAQdjtHI1nRX2RRlmw3vmCgsbx21vq3x1pEZA035nKZBf5AF68hGueSTOLBAZCJfYZCz8sKIXsOS6JVGw7U140oJlK6JyPbo5Ye',2,'LIKE');

//Huynh Nhu
bot_main('EAAAAAYsX7TsBAJqAtBFZB8FElhRlsfD5gLJhnhyNHeScq2s41xJNTZCn3uCxwqeofDh4qZAc28FsJrCgQwN1SaQZAHsXsNKIojjTBhF2NnyqCDoDYJbHQJUBnRfXb1Gzi8wLtDl5ZCiG9c7ZBIBbBg37CTCUno89wZD',2,'LOVE');

//Ngoc Han
bot_main('EAAAAAYsX7TsBAIzK7ZAN2MRNRzAxrF8qLm7bYXZCZCjC99vN7tZCSGDHz5fb3cLauFaFkmrvbCktSSKZCuqpZCbK7za0r1tKU7TIlcly92H9XdSJis6WEFytsZCrY2Vpl0trnnbmibASKgi2wVV4ZBl0clssa7ZCr04UZD',2,'LOVE');

//CamThuy
bot_main('EAAAAAYsX7TsBAEJXgaF6vwZAPT7DscZCRQZB0jlVH0YH25Ca3g92jOeujdIiPcWyY3QCmiOW0sw4ZAv5M5gj4ZCRTXACCjGnA7QjsEnMGhUu5GVdU1WljjQ1GeHbCN1eikpDxUyFd3yxeuDqJWJ89ZBbi8VlLGVvEZD',1,'LOVE');

//HongTuyen
bot_main('EAAAAAYsX7TsBAIG3E56PZA1LlmpRIhmMGeGLeKoBvlZBRhUOaeZCnCRvG0zbxQIfWVkipq56WA8ZA1ltYUiIZC9bdL4CEYNLa1UZAqRIYnsrUCkrZCzhIqI8pGbBP0QyLqOZBPPZB8NOrSIOH5AIUaHuaJHBcR6nYMPQZD',2,'LOVE');

//Kim
bot_main('EAAAAAYsX7TsBADAIVeAncqwsL4fWrZAlJjljFOuFNy5H0py8zdIRPUVZAnD94mlJBxpZACSwZBGA3iGvrzwF8M22KAf05C4ZBpKqy2FbZB9DaAa1kMIPACostRcAqS80RnVS2S1ZCTtV2kZBoZCNPbn0kq70xpmCuo1wZD',2,'LOVE');

//BaoHan
bot_main('EAAAAAYsX7TsBAOZAuJWJNG78Vlq1T6ctiEHjQ0PsXI6Y4PccMT5Pqs5UH6JhKpw9tijPjJDL1jK7WQ2XFH3dasrG2bmgpnIOmA8At8YpzZBRU3i24Yk0GMkaZAalMRmy6fTRCnN8S6V5ues9YTsfVzCpYM5FTUCaLZBjm3U0QCgmNJOrhTpX',2,'LOVE');

//NathyNgo
bot_main('EAAAAAYsX7TsBAMXK5jKnrWe688VIjXVzSnNNbMt4yTJD4NSjL66sWOPhQeVNnnRe56p0LEhH629EVUxpJZCrAoueAHyzu0qa54PLTtfrAYKcbCZCtXAOouwXSvEwsduPkckNh9WXBLDhNaOZAOxNQuRKEtGT1wZD',2,'LOVE');

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