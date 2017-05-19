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
$totalid=9;//TOTAL ID OF ACCOUNT MUST BE WRITE HERE

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
		"1" => array(
						"token" => 'EAAAAAYsX7TsBAEM2AfliKITRmdJbLMm3Uw2qBt4qeYQIfShTpFrashaLuqZAIQt7dwNizQHGZBTZCoeLRv1dsc2UzqJiTeaa7BKNpUsYOvsX8zfJOVhXRZBtISAHQOP5oSsR1jHzv61iQc8AdCZBZAmSisSIbsXYRkIDVGYXyJFIWS4DswaZCAq',
						"limits" => 5,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//DoQuyen
		"2" => array(
						"token" => 'EAAAAAYsX7TsBACNpbNrITduscCea0pWVo1RZANDeKGEZCbaRx3ctBz0GeqYBT0CmLXzFsXZCWmvigZCRfxZBZBtkZBIjzqFZAXdlZCxT0eyrLkPifPvdPZA4JkL5MtKyLSz3TpiacQalwNSXZCcoIZAafLuMC0CjeAYBLh0ZD',
						"limits" => 4,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//TranVi
		"3" => array(
						"token" => 'EAAAAAYsX7TsBAMzMcgEcVKrbz9sh7WhWlKXKeS4NerlV4aUB2Iqpi3ZCII3ehFoaitK1yYfcmwX9BOhBmubVA7nxdUkwMQDdeoGBV0FUkDYX4b8c2TWwV2RtupeRZBfxaCqbWHbAgU6XyMy0SD1ZA6uS3BgRT8YPxedOI4YuAZDZD',
						"limits" => 4,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//CamThuy
		"4" => array(
						"token" => 'EAAAAAYsX7TsBAEJXgaF6vwZAPT7DscZCRQZB0jlVH0YH25Ca3g92jOeujdIiPcWyY3QCmiOW0sw4ZAv5M5gj4ZCRTXACCjGnA7QjsEnMGhUu5GVdU1WljjQ1GeHbCN1eikpDxUyFd3yxeuDqJWJ89ZBbi8VlLGVvEZD',
						"limits" => 2,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//HongTuyen
		"5" => array(
						"token" => 'EAAAAAYsX7TsBAIG3E56PZA1LlmpRIhmMGeGLeKoBvlZBRhUOaeZCnCRvG0zbxQIfWVkipq56WA8ZA1ltYUiIZC9bdL4CEYNLa1UZAqRIYnsrUCkrZCzhIqI8pGbBP0QyLqOZBPPZB8NOrSIOH5AIUaHuaJHBcR6nYMPQZD',
						"limits" => 4,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//Kim
		"6" => array(
						"token" => 'EAAAAAYsX7TsBADAIVeAncqwsL4fWrZAlJjljFOuFNy5H0py8zdIRPUVZAnD94mlJBxpZACSwZBGA3iGvrzwF8M22KAf05C4ZBpKqy2FbZB9DaAa1kMIPACostRcAqS80RnVS2S1ZCTtV2kZBoZCNPbn0kq70xpmCuo1wZD',
						"limits" => 4,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//Nhu Huynh
		"7" => array(
						"token" => 'EAAAAAYsX7TsBACzvJOGAZAZBWI3N7TSZCsReI2ODZCsyQLIY97BxFovOpzuZBW7HSNyMRU053gy1i3UN5VBoHMMZAQdjtHI1nRX2RRlmw3vmCgsbx21vq3x1pEZA035nKZBf5AF68hGueSTOLBAZCJfYZCz8sKIXsOS6JVGw7U140oJlK6JyPbo5Ye',
						"limits" => 4,
						"func" => 'LIKE',
						//"expdays" => '0/0/0',
					),
		//Huynh Nhu
		"8" => array(
						"token" => 'EAAAAAYsX7TsBABGKdbUbjLtZChQQT8ZAvrDqm7LbBAW00KSOKHJopihPr6fGWSvEEWZAY1GQTF4RbDGkNvahZCEE1rdkdRqgtjZA1j9mezywaQrfQZBdITNfi4ZCDOGiXH9kEaWlLkDhsFvpPS9p5Qhcil5iRzTVfgZD',
						"limits" => 4,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//Ngoc Han
		"9" => array(
						"token" => 'EAAAAAYsX7TsBAFRQAcIBdUL3cB8QdeYGyc6LDs9LbzlyeVsRES0QowK1ZCYW1pAkTHXuB5TSkPHWvOHoD7ds26dWZB8tiXYpakoJpLu7NZABSVaAnBxSTmDOB8qlARKz25JISvkvmla5PcvZBwtCANwIuJt34YoZD',
						"limits" => 4,
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