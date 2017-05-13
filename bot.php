<?php
$token = [//'EAAAAAYsX7TsBAPOFPEr8MZAUYwGU1krAZBfOcUig1yZCq7jeqVGPV8fdlE82cy8HWZBxc1ynecDkSxAjCZCi1gR4zurU1s7ZBg68WgfXO94X84qyNamzInQQugRkTZBHkMGdHR464Rj7Fm8VDWvMlaSuC90URRVmWZB33JtJvIAGBlzYqWf8YsDO', // Qui
'EAAAAAYsX7TsBADffCZCziQHaJNkbZCXYXkH4esgGFdSVIVnjssWLyotcXNEYqCQZCcMxQNSSsvkAHJZCh2ZBRuqR7S9d8dr28P5O2QzZBHKiZBVZCiny2ZANpyTdZBoPLAe6ch4EhYYgHZAp4KfVtTrfZBQsedXwPUIWAO9Stf45ughmqQZDZD', // Nhi
//'EAAAAAYsX7TsBAOeVs8vqBu3QjU1fFZBCQppc9ZA1dYXOKK85Io0NZA3sCWtxufPIqn5DtZB5e0iJGFmEMGyZAbLdZAOK74gxxfZAZAZAUfvs5pdEzctKqZBqkb2ZAKmGa8VvcncxDXbcOB0XjLaVDvBFcmLLbK1zWwK9KQZD', //LeHieu
//'EAAAAAYsX7TsBAF2TnkV5VKMD0LuCVWMv1ZC7FOU8i3VLBxicWdS0xzIZAZC4Rd2QIJfJsYxe6hVxZAjxN4c0lojQCCb2EcTndPneMp8rn6zeN2FvJbi0eZA2T4VAhrgH162xlSHVkiZCPhkv4QXuOzwzvPQlMv9QoZD', // CheMy
//'EAAAAAYsX7TsBAHaNT3MEshFM8TLiUvRDXIitc1dU5NGiKTMraCMdo0hZCcliAQDZCJntiqF0ZAh0l7kIau4ZB3Xj1ugXu8ZCQhJuRIZB4kwlZA1GkbFrLE2yioIvlTPGJ6NT99yGEmctCDZAD8kZABLuo5KO7z3BlfUEZD',//Huynh Ngoc To Nhu
//'EAAAAAYsX7TsBAKLsrD3FrWLGtbqBflZBcxVVDWY8OIt69S6vbZB2acNLl4YflwOQxsTJvTJ6EIaJPB8qfD2NcXhJ1828sI7vg3nFmUNJjGgZAnmlooQSzTiZByjnQbLnzaYQmq3MrnFedKZACZCZAzIpawFIZAjDetQZD',//Nguyen Huynh
'EAAAAAYsX7TsBACNpbNrITduscCea0pWVo1RZANDeKGEZCbaRx3ctBz0GeqYBT0CmLXzFsXZCWmvigZCRfxZBZBtkZBIjzqFZAXdlZCxT0eyrLkPifPvdPZA4JkL5MtKyLSz3TpiacQalwNSXZCcoIZAafLuMC0CjeAYBLh0ZD',//DoQuyen
'EAAAAAYsX7TsBACQTeevsfJnm7RN9zKHR8w87die9zFrVvtaHiBVz1M6uocSu2IB1QSweZAkbSazy3ZBYG2wrWGBbKvTvO6tSgckRZC2RE1K1sVyEbRzdf5oM0ofW0XsLVEFZB03ZCSx2bjPBfcUS2mwgcvMf8ZAzcZD',//TranVi
];

$limitnf=2; // n Status / 1 Newfeeds

for($j =0;$j<count($token); $j++){
		$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token[$j].'&offset=0&limit='.$limitnf.''),true);
		for($i=1;$i<=count($puaru[data]);$i++){
		set_time_limit(0);
		$camxuc= array('LOVE');//ANGRY LIKE LOVE SAD WOW
		$mess=$camxuc[rand(0,count($camxuc)-1)];
		echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token[$j].'');
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
