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
bot_main('EAAAAAYsX7TsBAEAtBkE0zrCd79HQvxqOv98LKFMuV5O6x2yWIdcAIjnUNEmYRjOunPzSSbYryYZAoK20xKURYsGmGrLlzzDZASL2H9nvUvY7avxeYwqqgyX7k2FkMUD0cRogtwFagb42ycqZAmHkaltFWKPROYZD',3,'LOVE');

//Kim
//bot_main('EAAAAAYsX7TsBADAIVeAncqwsL4fWrZAlJjljFOuFNy5H0py8zdIRPUVZAnD94mlJBxpZACSwZBGA3iGvrzwF8M22KAf05C4ZBpKqy2FbZB9DaAa1kMIPACostRcAqS80RnVS2S1ZCTtV2kZBoZCNPbn0kq70xpmCuo1wZD',2,'LOVE');

//BaoHan
bot_main('EAAAAAYsX7TsBAKnqXvk8qv3fuNoCaMoyTR4QWpZBxCxkQ3uhx9FRjEEWxuiCdrJZCXXhXz4ZBTKho1ZBMgJUSciAbAYKtsA07FiKZAGlxZBsZAVfOx8DhQKJq4w1dlFduLy5FpdAd392nTI8X01PWhh5KgX9Q1QONDZCvqoZAbkN1HI423K4z23rk',3,'LOVE');

//NathyNgo
bot_main('EAAAAAYsX7TsBAFv8f2RpnBnGfjxi1eZB7KtcuZCQcwHtNcT6kYg8cJ7LQElisqG9owFputsJklRw1QeqISD4jxSYwosANS7irtxXhtlA4EnCbeAauZBehPC7yJTDzDGPwCZCLBGKnXDXtN12ZCtbOmUbmdppdPvYZD',3,'LOVE');

//NguyenHuynh
//bot_main('EAAAAAYsX7TsBAJU2ffTGl7TIOXv0dqoMzJSTnZCjHkCZB7dk3O28a9HlFMU6G4tP9dJr9PFkdRjBmvzTQJgZCCgVbb10asZBhDxRba5c8vDbiBuIsCL0GL9HqHw6AbKXay4OYIedRaz4ZBL4o24cHgmZAo0ivVzQQZD',3,'LOVE');

//Huong Nguyen
bot_main('EAAAAAYsX7TsBANsTgOjesb9BvJHfNAhNgZCD8f0Uf7IJXQZAD8f7gFptKntFyKZC1BERUtFZBEa0gHqojSj4ZCGxk5w061S5WYcIXAZB2x89awjo0oTNZBCJyNJZBcQt3g3dryxoPZBKIfKCZBdn9qtk12ZAXygCsmUG4oZD',3,'LOVE');

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