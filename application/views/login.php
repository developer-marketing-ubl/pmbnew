<?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);
$waktu="";

if ($hour>=0 && $hour<=11)
{
$waktu = "pagi";
}
elseif ($hour >=12 && $hour<=14)
{
$waktu = "siang";
}
elseif ($hour >=15 && $hour<=17)
{
$waktu = "sore";
}
elseif ($hour >=17 && $hour<=18)
{
$waktu = "petang";
}
elseif ($hour >=19 && $hour<=23)
{
$waktu = "malam";
}

?>

<!DOCTYPE html>
<html class="login-page">

<head>
    <meta charset="UTF-8">
    <title>PMB Online</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/login.css">
    <script type="text/javascript" src="<?php base_url(); ?>assets/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>ssets/js/respond.min.js"></script>
    
<script language="JavaScript">

document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);

document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 85 )) {
            return false;
        }
};

</script>

<script>
    if (typeof document.onselectstart!="undefined") {
  document.onselectstart=new Function ("return false");
}
else{
  document.onmousedown=new Function ("return false");
  document.onmouseup=new Function ("return true");
}
</script>


<style>
@-webkit-keyframes 
badbounce {  0%, 100% {
 -webkit-transform: translateY(0px);
}
 10% {
 -webkit-transform: translateY(6px);
}
 30% {
 -webkit-transform: translateY(-4px);
}
 70% {
 -webkit-transform: translateY(3px);
}
 90% {
 -webkit-transform: translateY(-2px);
}
}
@-moz-keyframes 
badbounce {  0%, 100% {
 -moz-transform: translateY(0px);
}
 10% {
 -moz-transform: translateY(6px);
}
 30% {
 -moz-transform: translateY(-4px);
}
 70% {
 -moz-transform: translateY(3px);
}
 90% {
 -moz-transform: translateY(-2px);
}
}
@keyframes 
badbounce {  0%, 100% {
 -webkit-transform: translateY(0px);
 -moz-transform: translateY(0px);
 -ms-transform: translateY(0px);
 -o-transform: translateY(0px);
 transform: translateY(0px);
}
 10% {
 -webkit-transform: translateY(6px);
 -moz-transform: translateY(6px);
 -ms-transform: translateY(6px);
 -o-transform: translateY(6px);
 transform: translateY(6px);
}
 30% {
 -webkit-transform: translateY(-4px);
 -moz-transform: translateY(-4px);
 -ms-transform: translateY(-4px);
 -o-transform: translateY(-4px);
 transform: translateY(-4px);
}
 70% {
 -webkit-transform: translateY(3px);
 -moz-transform: translateY(3px);
 -ms-transform: translateY(3px);
 -o-transform: translateY(3px);
 transform: translateY(3px);
}
 90% {
 -webkit-transform: translateY(-2px);
 -moz-transform: translateY(-2px);
 -ms-transform: translateY(-2px);
 -o-transform: translateY(-2px);
 transform: translateY(-2px);
}
}

.ss_animate {
  -webkit-animation: badbounce 1s linear;
  -moz-animation: badbounce 1s linear;
  animation: badbounce 1s linear;
}


#ss_menu {
  bottom: 30px;
  width: 60px;
  height: 60px;
  color: #fff;
  position: fixed;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
  right: 30px;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

#ss_menu > .menu {
  display: block;
  position: absolute;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  text-align: center;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
  color: #fff;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
}

#ss_menu > .menu .share {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0px;
  top: 0px;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
}

#ss_menu > .menu .share .circle {
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
  position: absolute;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #fff;
  top: 50%;
  margin-top: -6px;
  left: 12px;
  opacity: 1;
}

#ss_menu > .menu .share .circle:after, #ss_menu > .menu .share .circle:before {
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
  content: '';
  opacity: 1;
  display: block;
  position: absolute;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #fff;
}

#ss_menu > .menu .share .circle:after {
  left: 20.78461px;
  top: 12.0px;
}

#ss_menu > .menu .share .circle:before {
  left: 20.78461px;
  top: -12.0px;
}

#ss_menu > .menu .share .bar {
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
  width: 24px;
  height: 3px;
  background: #fff;
  position: absolute;
  top: 50%;
  margin-top: -1.5px;
  left: 18px;
  -webkit-transform-origin: 0% 50%;
  -moz-transform-origin: 0% 50%;
  -ms-transform-origin: 0% 50%;
  -o-transform-origin: 0% 50%;
  transform-origin: 0% 50%;
  -webkit-transform: rotate(30deg);
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -o-transform: rotate(30deg);
  transform: rotate(30deg);
}

#ss_menu > .menu .share .bar:before {
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  transition: all 1s ease;
  content: '';
  width: 24px;
  height: 3px;
  background: #fff;
  position: absolute;
  left: 0px;
  -webkit-transform-origin: 0% 50%;
  -moz-transform-origin: 0% 50%;
  -ms-transform-origin: 0% 50%;
  -o-transform-origin: 0% 50%;
  transform-origin: 0% 50%;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}

#ss_menu > .menu .share.close .circle { opacity: 0; }

#ss_menu > .menu .share.close .bar {
  top: 50%;
  margin-top: -1.5px;
  left: 50%;
  margin-left: -12px;
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transform: rotate(405deg);
  -moz-transform: rotate(405deg);
  -ms-transform: rotate(405deg);
  -o-transform: rotate(405deg);
  transform: rotate(405deg);
}

#ss_menu > .menu .share.close .bar:before {
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transform: rotate(-450deg);
  -moz-transform: rotate(-450deg);
  -ms-transform: rotate(-450deg);
  -o-transform: rotate(-450deg);
  transform: rotate(-450deg);
}

#ss_menu > .menu.ss_active {
  background: #00796B;
  -webkit-transform: scale(0.7);
  -moz-transform: scale(0.7);
  -ms-transform: scale(0.7);
  -o-transform: scale(0.7);
  transform: scale(0.7);
}

#ss_menu > div {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position: absolute;
  width: 60px;
  height: 60px;
  font-size: 30px;
  text-align: center;
  background: #00796B;
  border-radius: 50%;
  display: table;
}

#ss_menu > div i {
  display: table-cell;
  vertical-align: middle;
}

#ss_menu > div:hover {
  background: #009688;
  cursor: pointer;
}

#ss_menu div:nth-child(1) {
  top: 0px;
  left: -160px;
}

#ss_menu div:nth-child(2) {
  top: -80.0px;
  left: -138.56406px;
}

#ss_menu div:nth-child(3) {
  top: -138.56406px;
  left: -80.0px;
}

#ss_menu div:nth-child(4) {
  top: -160px;
  left: 0.0px;
}
</style>

</head>

<body>
    <div id="preloader">
        <div class="text-center" style="margin-bottom:-10px;">
            <img src="https://upload.wikimedia.org/wikipedia/id/c/cc/Logo-ubl.png" height="180" id="preloader-content">
        </div>
    </div>
    <div class="container-fluid">
        <div id="main">
            <div class="col-md-12" id="pattern">
                <div class="text-center" id="main_left">

                    <div class="text-center" style="margin-bottom:-10px;">
                        <!-- Gambar -->
                    </div>
                    <div class="container">
                        <div class="col-md-8 col-md-push-2 logo-text text-center">
                            <img style="margin-left:60px" class="pull-left logo-sigap" src="https://upload.wikimedia.org/wikipedia/id/c/cc/Logo-ubl.png" height="60">
                            <h3 class="login-title pull-left">PMB (Pendaftaran Mahasiswa Baru)<br/> Universitas Bandar Lampung</h3>
                        </div>
                        <div class="clearfix"></div><br/>
                        <div class="col-md-8 col-md-push-2" id="form-intro">
                                                        <button type="button" class="btn-login text-shadow" id="btn-intro" style="position:relative;right:10px">Login</button>
                                                        <!--<input type="button" value="Tutorial PMB" class="btn-login text-shadow" id="btn_masuk_akun" data-toggle="modal" data-target="#myModal" />-->
                                                        <a href="reg_cama.php?page=pilihan"><input type="button" value="Register" class="btn-login text-shadow" id="btn_masuk_akun"  /></a>
                            <div style="display:inline;">
                               
                            </div>
                            <!--
                            <h4 class="text-shadow">Belum
 punya akun? Buat <a href="#" data-section="#form-intro" data-target="#form-daftar" class="disini">di sini</a></h4>
                            -->
                        </div>
                    </div>

                    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">Tutorial Aplikasi PMB Online Universitas Bandar Lampung
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tutorial Aplikasi PMB Online Universitas Bandar Lampung</h4>
      </div>
      <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Pru2_7Ad-Sc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                    
                    
                    <div id="form-login">
                        <form action="proses2.php" method="post" accept-charset="utf-8">
                        <div class="container">
                            <div class="col-md-8 col-md-push-2">
                                <div class="col-md-6">
                                    <h4><b>Email</b></h4>
                                    <input type="email" name="username" value="" class="form-control input-login" required autofocus />
                                </div>
                                <div class="col-md-6">
                                    <h4><b>Password *(NISN)</b></h4>
                                    <input type="password" name="password" value="" class="form-control input-login"  />
                                    <!--
                                    <p class="text-shadow pull-right"><a href="#" data-section="#form-login" data-target="#form-lupapass" class="disini">Lupa Kata Sandi?</a></p>
                                    -->
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                    <input type="submit" value="Login" class="btn-login text-shadow" id="btn_masuk_akun"  />
                                <br/>
                                <!--
                                <h4 class="text-shadow">Belum punya akun? Buat <a href="#" data-section="#form-login" data-target="#form-daftar" class="disini">di sini</a></h4>
                                -->
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
        
        <div id='ss_menu'>
  <div> <a href="tel:0721-773847"><img src="auricular-phone-symbol-in-a-circle (1).png"/> </a></div>
  <div> <a href="https://api.whatsapp.com/send?phone=6281377778034&text=Selamat <?php echo $waktu; ?> *Admin*, saya ingin menanyakan mengenai pendaftaran mahasiswa baru *Universitas Bandar Lampung*"><img src="whatsapp.png"/></a> </div>
  <div> <a href="http://ubl.ac.id" target="_blank"><img src="web.png"/></a> </div>
  <div> <a href="mailto:pmb@ubl.ac.id"><img src="mail.png"/></a> </div>
  <div class='menu'>
      <img src="cs_pmb2.png" id='ss_toggle' data-rot='180'/>
    <!--<div class='share' >
      <div class='circle'></div>
      <div class='bar'></div>
    </div>-->
  </div>
</div>
        

    </div>
    </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#main_left').css("padding-top", Math.max(0, (
                ($(window).height() - $('#main_left').outerHeight() - 125) / 2) + $(window).scrollTop()) + "px");
            $('#btn-intro').click(function() {
                $('#form-login').slideDown(400);
                $('#form-intro').hide();
            });
            $('.disini').click(function() {
                var section = $(this).data('section');
                var target = $(this).data('target');
                $(target).slideDown(400);
                $(section).hide();
                if(target != "#form-login"){
                    $('.logo-text').hide();
                } else {
                    $('.logo-text').show();
                }
            });
        });
        $.fn.center = function() {
            this.css("position", "absolute");
            this.css("top", Math.max(0, (
                    ($(window).height() - $(this).outerHeight()) / 2) +
                $(window).scrollTop()) + "px");
            this.css("left", Math.max(0, (
                    ($(window).width() - $(this).outerWidth()) / 2) +
                $(window).scrollLeft()) + "px");
            return this;
        }

        $("#preloader").show();
        $("#preloader-content").show().center();

        setTimeout(function() {
            $("#preloader").fadeOut(function() {
                $('#main_left').css("opacity", 1);
            });
        }, 1000);



        function goLupa() {
            alert("Fitur sedang dalam pengerjaan. Untuk sekarang coba ingat ingat password anda atau hubungi admin bila anda merasa tidak mampu :D");
        }
    </script>
    
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script>
$(document).ready(function(ev) {
  var toggle = $('#ss_toggle');
  var menu = $('#ss_menu');
  var rot;
  
  $('#ss_toggle').on('click', function(ev) {
    rot = parseInt($(this).data('rot')) - 180;
    menu.css('transform', 'rotate(' + rot + 'deg)');
    menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
    if ((rot / 180) % 2 == 0) {
      //Moving in
      toggle.parent().addClass('ss_active');
      toggle.addClass('close');
    } else {
      //Moving Out
      toggle.parent().removeClass('ss_active');
      toggle.removeClass('close');
    }
    $(this).data('rot', rot);
  });

  menu.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
    if ((rot / 180) % 2 == 0) {
      $('#ss_menu div i').addClass('ss_animate');
    } else {
      $('#ss_menu div i').removeClass('ss_animate');
    }
  });
  
});
</script>
    
</body>

</html>