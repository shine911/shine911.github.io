<?php
/***
 * It's written by HUYNH DINH QUI
 * Multiaccount
 * Limits post
 * Custom Function
 * Clean all report or warning messenger
 * Updated: 16/05/2017
 * Version: beta-0.2
 ***/
$totalid=3;//TOTAL ID OF ACCOUNT MUST BE WRITE HERE

$Account=array(
		//Nhu Huynh
		"1" => array(
						"token" => 'EAAAAAYsX7TsBACzvJOGAZAZBWI3N7TSZCsReI2ODZCsyQLIY97BxFovOpzuZBW7HSNyMRU053gy1i3UN5VBoHMMZAQdjtHI1nRX2RRlmw3vmCgsbx21vq3x1pEZA035nKZBf5AF68hGueSTOLBAZCJfYZCz8sKIXsOS6JVGw7U140oJlK6JyPbo5Ye',
						"limits" => 2,
						"func" => 'LIKE',
						//"expdays" => '0/0/0',
					),
		//Huynh Nhu
		"2" => array(
						"token" => 'EAAAAAYsX7TsBABGKdbUbjLtZChQQT8ZAvrDqm7LbBAW00KSOKHJopihPr6fGWSvEEWZAY1GQTF4RbDGkNvahZCEE1rdkdRqgtjZA1j9mezywaQrfQZBdITNfi4ZCDOGiXH9kEaWlLkDhsFvpPS9p5Qhcil5iRzTVfgZD',
						"limits" => 2,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//Ngoc Han
		"3" => array(
						"token" => 'EAAAAAYsX7TsBAFRQAcIBdUL3cB8QdeYGyc6LDs9LbzlyeVsRES0QowK1ZCYW1pAkTHXuB5TSkPHWvOHoD7ds26dWZB8tiXYpakoJpLu7NZABSVaAnBxSTmDOB8qlARKz25JISvkvmla5PcvZBwtCANwIuJt34YoZD',
						"limits" => 2,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),

		/***
		"7" => array(
						"token" => '',
						"limits" => 3,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		***/
				);

for($j =0;$j<=$totalid; $j++){
    $id=(string)$j;
		$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$Account[$id]['token'].'&offset=0&limit='.$Account[$id]['limits'].''),true);
    	for($i=1;$i<=count($puaru[data]);$i++){
		// Turn off all error reporting
        error_reporting(0);
		set_time_limit(0);
		$camxuc=$Account[$id]['func'];//ANGRY LIKE LOVE SAD WOW
		//$mess=$camxuc[rand(0,count($camxuc)-1)];
		echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$camxuc.'&method=post&access_token='.$Account[$id]['token'].'');
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