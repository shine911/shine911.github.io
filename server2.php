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

//HongTuyen
bot_main('EAAAAAYsX7TsBANhNLaEWDl4JbG2CRE5lr6ZAutYHyqjGKLAqgYTBgQenIWTpXSB5iufBXjwZBKHDpiWc21juZCdH2zTOUQntHSFnTJBEoUkKAiHsVhDyMAQx3pFqYlspRXgnPmi9kHLTsvjUuk8tUzqCyR4UtYZD',3,'LOVE');

//Kim
//bot_main('EAAAAAYsX7TsBADAIVeAncqwsL4fWrZAlJjljFOuFNy5H0py8zdIRPUVZAnD94mlJBxpZACSwZBGA3iGvrzwF8M22KAf05C4ZBpKqy2FbZB9DaAa1kMIPACostRcAqS80RnVS2S1ZCTtV2kZBoZCNPbn0kq70xpmCuo1wZD',2,'LOVE');

//BaoHan
bot_main('EAAAAAYsX7TsBAKnqXvk8qv3fuNoCaMoyTR4QWpZBxCxkQ3uhx9FRjEEWxuiCdrJZCXXhXz4ZBTKho1ZBMgJUSciAbAYKtsA07FiKZAGlxZBsZAVfOx8DhQKJq4w1dlFduLy5FpdAd392nTI8X01PWhh5KgX9Q1QONDZCvqoZAbkN1HI423K4z23rk',3,'LOVE');

//NathyNgo
bot_main('EAAAAAYsX7TsBAFhjntoZB6XTsF9Yd4rMyZB9n47L4hHe6HafznZBaQje1wjZCeDgoolZBDnjW7ToaFQ41Jdj0mbjtZAiZBNDPu4hOCrQzJMrHrBnAnh5VcMpJqXXV9z7myRSbd9EAayS4N1bkglykRFwuB61NVNjG4ZD',3,'LOVE');

//NguyenHuynh
bot_main('EAAAAAYsX7TsBAJU2ffTGl7TIOXv0dqoMzJSTnZCjHkCZB7dk3O28a9HlFMU6G4tP9dJr9PFkdRjBmvzTQJgZCCgVbb10asZBhDxRba5c8vDbiBuIsCL0GL9HqHw6AbKXay4OYIedRaz4ZBL4o24cHgmZAo0ivVzQQZD',3,'LOVE');

//Huong Nguyen
bot_main('EAAAAAYsX7TsBALXdjNyMewUbq6cxEpZAPKpEQ8KH8I5fmHTowuvFYmIPQ8kSVQZBFC0TPSBEip4N9GK52ZAFzsJjpeh9plKzOorbS7MBKI6ZAmFAfZCu7h7hrwFsXUSj0K5EZAgTX3lXDVWQUdbKnYyfBlddRIgQ4ZD',3,'LOVE');

//ThienNhi
bot_main('EAAAAAYsX7TsBAIAyBwMJWQ1D7XiEZBGZC6CZAu2dZC6V4IBOhVMPJ2rXFdPmGA2TDobu3DScNpNJvdmG1vti1IFrfI9zx6SMaKFSzYT0q7UywccH3xXZC8kYnEmnGRYZAReeuK98bbyXUsRgPRjqWiYVsawKxGDIL68XrWxXlMzwZDZD',4,'LOVE');

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