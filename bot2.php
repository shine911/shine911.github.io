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
		//CamThuy
		"1" => array(
						"token" => 'EAAAAAYsX7TsBAEJXgaF6vwZAPT7DscZCRQZB0jlVH0YH25Ca3g92jOeujdIiPcWyY3QCmiOW0sw4ZAv5M5gj4ZCRTXACCjGnA7QjsEnMGhUu5GVdU1WljjQ1GeHbCN1eikpDxUyFd3yxeuDqJWJ89ZBbi8VlLGVvEZD',
						"limits" => 1,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//HongTuyen
		"2" => array(
						"token" => 'EAAAAAYsX7TsBAIG3E56PZA1LlmpRIhmMGeGLeKoBvlZBRhUOaeZCnCRvG0zbxQIfWVkipq56WA8ZA1ltYUiIZC9bdL4CEYNLa1UZAqRIYnsrUCkrZCzhIqI8pGbBP0QyLqOZBPPZB8NOrSIOH5AIUaHuaJHBcR6nYMPQZD',
						"limits" => 2,
						"func" => 'LOVE',
						//"expdays" => '0/0/0',
					),
		//Kim
		"3" => array(
						"token" => 'EAAAAAYsX7TsBADAIVeAncqwsL4fWrZAlJjljFOuFNy5H0py8zdIRPUVZAnD94mlJBxpZACSwZBGA3iGvrzwF8M22KAf05C4ZBpKqy2FbZB9DaAa1kMIPACostRcAqS80RnVS2S1ZCTtV2kZBoZCNPbn0kq70xpmCuo1wZD',
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
unset($Account);//Optimized

function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}

?>