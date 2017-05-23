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
		//Qui
		/***
		"0" => array(
						"token" => 'EAAAAAYsX7TsBAENrusUsNEWWhtpYIstY5SebJ7hQPupODlJwnD2uFJ1BzZAmadnk8IbPr9MOGGE2GVyAJZAMxrjrHZBCvTYaELwbj2MEZCOBqZBqZBZBKUzlSDTSBI44KuefGMZBE0mDURAep1Dx6U4AFq46mMK9FqwhQyZBftVrE0gZDZD',
						"limits" => 3,
						"func" => 'THANKFUL',
						//"expdays" => '0/0/0',
					),
		***/
		//Nhi
//		"1" => array(
//						"token" => 'EAAAAAYsX7TsBAEM2AfliKITRmdJbLMm3Uw2qBt4qeYQIfShTpFrashaLuqZAIQt7dwNizQHGZBTZCoeLRv1dsc2UzqJiTeaa7BKNpUsYOvsX8zfJOVhXRZBtISAHQOP5oSsR1jHzv61iQc8AdCZBZAmSisSIbsXYRkIDVGYXyJFIWS4DswaZCAq',
//						"limits" => 4,
//						"func" => 'LOVE',
//						//"expdays" => '0/0/0',
//					),
		//DoQuyen
		"1" => array(
						"token" => 'EAAAAAYsX7TsBACNpbNrITduscCea0pWVo1RZANDeKGEZCbaRx3ctBz0GeqYBT0CmLXzFsXZCWmvigZCRfxZBZBtkZBIjzqFZAXdlZCxT0eyrLkPifPvdPZA4JkL5MtKyLSz3TpiacQalwNSXZCcoIZAafLuMC0CjeAYBLh0ZD',
						"limits" => 2,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//TranVi
		"2" => array(
						"token" => 'EAAAAAYsX7TsBAMzMcgEcVKrbz9sh7WhWlKXKeS4NerlV4aUB2Iqpi3ZCII3ehFoaitK1yYfcmwX9BOhBmubVA7nxdUkwMQDdeoGBV0FUkDYX4b8c2TWwV2RtupeRZBfxaCqbWHbAgU6XyMy0SD1ZA6uS3BgRT8YPxedOI4YuAZDZD',
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
	unset($Account);
}
//Optimized

function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}

?>