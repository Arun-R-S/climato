<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- PAGE settings -->
        <link rel="stylesheet" type="text/css" href="loading-bar.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript" src="loading-bar.js"></script>
        <link rel="icon" href="https://blog.macsales.com/wp-content/uploads/2019/02/ios12-weather-app-icon-thumbnail_2x.png">
        <title>Climato | Get Your area climate</title>
        <meta name="description" content="Developed by Anderson.">
        <meta name="keywords" content="Team AR">
        <!-- CSS dependencies -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="neon.css">
        <!-- Script: Make my navbar transparent when the document is scrolled to top -->
        <script src="js/navbar-ontop.js"></script>
        <!-- Script: Animated entrance -->
        <script src="js/animate-in.js"></script>
    </head>
    <body>
       <!--  
  <?php 

date_default_timezone_set("Asia/Kolkata");
$apiKey="ff353a084edd0d76f8512b323ad50b94";
if($_POST['pincode']!=NULL)
{
  $zip=$_POST['pincode'];
  $country="in";
$googleApiUrl="http://api.openweathermap.org/data/2.5/weather?zip=".$zip.",".$country."&unit=metric&appid=".$apiKey;
$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response=curl_exec($ch);

curl_close($ch);
$data=json_decode($response);
$currentTime=time();
$place=$data->name;
$weather=$data->weather[0]->description;
$maxTemp=round(($data->main->feels_like-273.15)*9/5 + 32,2);
$minTemp=round(($data->main->temp_min-273.15)*9/5 + 32,2);
$humidity=$data->main->humidity;
$windSpeed=$data->wind->speed;


$lat=$data->coord->lat;
  $lon=$data->coord->lon;
$dly="https://api.openweathermap.org/data/2.5/onecall?lat=".$lat."&lon=".$lon."&exclude=hourly&appid=".$apiKey;
$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $dly);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response=curl_exec($ch);

curl_close($ch);
$dai=json_decode($response);
$upop=$dai->daily[0]->pop*100;


}
else
{
  $currentTime=time();
  $place="Location not found";
  $weather="---";
  $maxTemp="---";
  $minTemp="---";
  $humidity="---";
  $windSpeed="---";
} 


?> -->
        <!-- Navbar -->
        <!-- Cover -->
        <nav class="bg-dark fixed-top navbar navbar-dark navbar-expand-lg">
            <div class="container"> 
                <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar14">
                    <p class="navbar-brand mb-0 text-white"> <img src="https://blog.macsales.com/wp-content/uploads/2019/02/ios12-weather-app-icon-thumbnail_2x.png" width="40px">Climato </p>
                </button>
                <div class="collapse navbar-collapse" id="navbar14">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> 
                            <a class="nav-link" href="#" onclick="history.go(-1)">Home</a> 
                        </li>
                    </ul>
                    <p class="d-none d-md-block lead mb-0  text-white" contenteditable="true"><img src="https://blog.macsales.com/wp-content/uploads/2019/02/ios12-weather-app-icon-thumbnail_2x.png" width="40px">Climato</p>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-1"> 
                            <a class="nav-link" href="#"> <i class="fa fa-github fa-fw fa-lg"></i> </a> 
                        </li>
                        <li class="nav-item mx-1"> 
                            <a class="nav-link" href="#"> <i class="fa fa-gitlab fa-fw fa-lg"></i> </a> 
                        </li>
                        <li class="nav-item mx-1">Innovation Technologies Pvt Ltd
                            <a class="nav-link" href="#"> </a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pt-5 section-fade-out" style="background-image: url(https://ak.picdn.net/shutterstock/videos/1020933628/thumb/1.jpg); background-position: bottom;">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="align-self-center col-md-12 my-5 text-center text-lg-left">
                        <h1 class="display-2"><h1 class="center-align display-2 text-lg-center text-md-center text-xl-center">Climato</h1><h2><img src="https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-red-map-location-icon-map-png-0.png" height="30px" width="30px"><?php echo $place; ?></h2><p>(Your nearest location)</p></h1>
                        <p class="lead"> <div class="time">
                                <div>
                                    <?php echo "<b>Page Loaded: </b>".date("g:i:s a",$currentTime);?>
                                </div>
                                <div>
                                    <?php echo "<b>Today Date: </b>".date("j F , Y",$currentTime);?>
                                </div>
                                <div>
                                    <?php echo "<b>Today Climate: </b>".ucwords($weather);?>
                                </div>
                            </div> <div class="forcast">
                                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon;?>.png" class="weather-icon" alt='Error'/>
                                <br>
                                <b>Max-Temp:</b>
                                <?php echo " ".$maxTemp." ";?>&deg;F
                                <span class="min-temperature"><br><b>Min-temp:</b><?php echo " ".$minTemp." ";?>&deg;F</span>
                            </div> <div class="time">
                                <div>
                                    <b>Humidity: </b>
                                    <?php echo " ".$humidity;?> %
                                </div>
                                <div>
                                    <b>Wind: </b>
                                    <?php echo " ".$windSpeed;?> km/h
                                </div>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $upop;?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Article style section -->
        <!-- Features 
        <?php
          if($_POST['pincode']!=NULL)
{
  $zip=$_POST['pincode'];
  $country="in";
  $lat=$data->coord->lat;
  $lon=$data->coord->lon;
$dly="https://api.openweathermap.org/data/2.5/onecall?lat=".$lat."&lon=".$lon."&exclude=hourly&appid=".$apiKey;
$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $dly);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response=curl_exec($ch);

curl_close($ch);
$dai=json_decode($response);

#print_r($dai->daily[0]->weather[0]->icon);
$weathers=array();
$maxTemps=array();
$minTemps=array();
$humiditys=array();
$windSpeeds=array();
$day=array();
$date=array();
$icon=array();
$pop=array();
for($i=1;$i<7;$i++)
{
  $weathers[$i]=$dai->daily[$i]->weather[0]->description;
  $minTemps[$i]=round(($dai->daily[$i]->temp->min-273.15)*9/5 + 32,2);
  $maxTemps[$i]=round(($dai->daily[$i]->feels_like->morn-273.15)*9/5 + 32,2);
  $humiditys[$i]=$dai->daily[$i]->humidity;
  $windSpeeds[$i]=$dai->daily[$i]->wind_speed;
  
  $day[$i] = date('l', strtotime(' +'.$i.' day'));
  $date[$i]= date('d, M', strtotime(' +'.$i.' day'))."<br>";
  $icons[$i]= $dai->daily[$i]->weather[0]->icon;
$pop[$i]=$dai->daily[$i]->pop*100;

}

}
else{
  for($i=0;$i<7;$i++)
  {
    $weathers[$i]="---";
    $minTemps[$i]="---";
    $maxTemps[$i]="---";
    $humiditys[$i]="---";
    $windSpeeds[$i]="---";
    $day[$i] = date('l', strtotime(' +'.$i.' day'));
  $date[$i]= date('d, M', strtotime(' +'.$i.' day'))."<br>";
  $icons[$i]="---";
  }
}

        ?> -->
        <div class="container">
</div>
        <div class="container">
            <center>
                <h1>Weekly Forecast</h1>
            </center>
            <div class="container">
                <div class="row">
                    <div class="col-11 col-md-4 col-sm-6 mt-1 mw-100 w-50">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tomorrow</h5>
                                <?php echo $date[1];?>
                                <p><?php echo "Climate: ".ucwords($weathers[1]);?></p>
                                <?php echo "<img src='http://openweathermap.org/img/w/".$icons[1].".png'>";?>
                                <br>Max-Temp:
                                <?php echo " ".$maxTemps[1]." ";?> &deg;F
                                <br>
                                Min-Temp:
                                <?php echo " ".$minTemps[1];?> &deg;F
                                <br>
                                Humidity:
                                <?php echo " ".$humiditys[1];?> %
                                <br>
                                Wind: 
                                <?php echo $windSpeeds[1];?> km/h
                                <br>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $pop[1];?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 col-sm-6 mt-1 mw-100 w-50">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $day[2];?></h5>
                                <?php echo $date[2];?>
                                <p><?php echo "Climate: ".ucwords($weathers[2]);?></p>
                                <?php echo "<img src='http://openweathermap.org/img/w/".$icons[2].".png'>";?>
                                <br>Max-Temp:
                                <?php echo " ".$maxTemps[2]." ";?> &deg;F
                                <br>
                                Min-Temp:
                                <?php echo " ".$minTemps[2];?> &deg;F
                                <br>
                                Humidity:
                                <?php echo " ".$humiditys[2];?> %
                                <br>
                                Wind: 
                                <?php echo $windSpeeds[2];?> km/h
                                <br>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $pop[2];?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 col-sm-6 mt-1 mw-100 w-50">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $day[3];?></h5>
                                <?php echo $date[3];?>
                                <p><?php echo "Climate: ".ucwords($weathers[3]);?></p>
                                <?php echo "<img src='http://openweathermap.org/img/w/".$icons[3].".png'>";?>
                                <br>Max-Temp:
                                <?php echo " ".$maxTemps[3]." ";?> &deg;F
                                <br>
                                Min-Temp:
                                <?php echo " ".$minTemps[3];?> &deg;F
                                <br>
                                Humidity:
                                <?php echo " ".$humiditys[3];?> %
                                <br>
                                Wind: 
                                <?php echo $windSpeeds[3];?> km/h
                                <br>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $pop[3];?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 col-sm-6 mt-1 mw-100 w-50">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $day[4];?></h5>
                                <?php echo $date[4];?>
                                <p><?php echo "Climate: ".ucwords($weathers[4]);?></p>
                                <?php echo "<img src='http://openweathermap.org/img/w/".$icons[4].".png'>";?>
                                <br>Max-Temp:
                                <?php echo " ".$maxTemps[4]." ";?> &deg;F
                                <br>
                                Min-Temp:
                                <?php echo " ".$minTemps[4];?> &deg;F
                                <br>
                                Humidity:
                                <?php echo " ".$humiditys[4];?> %
                                <br>
                                Wind: 
                                <?php echo $windSpeeds[4];?> km/h
                                <br>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $pop[4];?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 col-sm-6 mt-1 mw-100 w-50">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $day[5];?></h5>
                                <?php echo $date[5];?>
                                <p><?php echo "Climate: ".ucwords($weathers[5]);?></p>
                                <?php echo "<img src='http://openweathermap.org/img/w/".$icons[5].".png'>";?>
                                <br>Max-Temp:
                                <?php echo " ".$maxTemps[5]." ";?> &deg;F
                                <br>
                                Min-Temp:
                                <?php echo " ".$minTemps[5];?> &deg;F
                                <br>
                                Humidity:
                                <?php echo " ".$humiditys[5];?> %
                                <br>
                                Wind: 
                                <?php echo $windSpeeds[5];?> km/h
                                <br>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $pop[5];?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4 col-sm-6 mt-1 mw-100 w-50">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $day[6];?></h5>
                                <?php echo $date[6];?>
                                <p><?php echo "Climate: ".ucwords($weathers[6]);?></p>
                                <?php echo "<img src='http://openweathermap.org/img/w/".$icons[6].".png'>";?>
                                <br>Max-Temp:
                                <?php echo " ".$maxTemps[6]." ";?> &deg;F
                                <br>
                                Min-Temp:
                                <?php echo " ".$minTemps[6];?> &deg;F
                                <br>
                                Humidity:
                                <?php echo " ".$humiditys[6];?> %
                                <br>
                                Wind: 
                                <?php echo $windSpeeds[6];?> km/h
                                <br>
                                <br>
                                Probability of rain: 
                                <div class="ldBar label-center" data-preset="bubble" data-value="<?php echo $pop[6];?>" data-preset-size="10" data-preset="circle" stroke-width="10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script> 
            
            <div class="bg-white black py-5 row">
                <div class="col-md-5 order-2 order-md-1 animate-in-left">
                    <img class="img-fluid d-block my-3 mx-auto" src="https://praedictix-archive.s3.amazonaws.com/sitemedia/wp-content/2018/12/03195758/Hourly-Forecast.png" width="900" height="600">
                </div>
                <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
                    <h1 class="black black-text text-black-50"><span><b>Upcoming Feature</b></span></h1>
                    <h2 class="text-black-50">Hourly Forecast</h2>
                    <p class="font-weight-bold my-4 text-black-50">Our team now work under this feature. We will update soon</p>
                </div>
            </div>
            <center>
                <h1 class="mt-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xl-5">Hourly Forecast</h1>
            </center>
            <div class="ml-2 ml-lg-2 ml-md-2 ml-sm-2 ml-xl-2 mr-2 mr-lg-2 mr-md-2 mr-sm-2 mr-xl-3 mt-3 py-5 row" style="border-radius: 16px;" cms-post="loop">
                <div class="card col-lg-12 col-xl-12 text-center">
                    <div class="w3-bar w3-black">
                        <button class="w3-bar-item w3-button" onclick="openCity('Day 1')">Today</button>
                        <button class="w3-bar-item w3-button" onclick="openCity('Day 2')">Tommorrow</button>
                        
                    </div>
                    <div id="Day 1" class="w3-container city" style="overflow: auto;">
                        <h2>Today</h2>
                        <p>Hourly Climate Details will upload soon for today. <br>Please be calm.</p>
                    </div>
                    <div id="Day 2" class="w3-container city" style="display:none">
                        <h2>Tommorrow</h2>
                        <p>Hourly Climate Details will upload soon for tommorrow. <br>Please be calm.</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="mt-3 py-5 text-center text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-md-12">
                        <h1 class="mb-3">Efforts by Team AR</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 p-0"></div>
                    <div class="col-lg-4 col-md-6 p-4"> 
                        <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="ceo.jpg" alt="Card image cap" width="200" style=" background-position: top left;  background-size: 100%;  background-repeat: repeat;">
                        <h4> <b>Arun Anderson<img src="tick.png" height='20px' width='20px' style='border-radius: 30px'></b></h4>
                        <p class="mb-0">Founder and CEO of</p>
                        <p class="mb-0">&copy;Innovation Technologies Pvt Ltd</p>
                        <div class="big-social border-light center-align float-none h5 row text-success" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr;grid-template-rows:30px;">
                            <div class="col-sm-2 col-sm-offset-3 social-item facebook">
                                <a href="https://www.facebook.com/profile.php?id=100009367277270" target="_blank"><i class="social-icon fa fa-2x fa-facebook"></i></a>
                            </div>
                            <div class="col-sm-2 social-item twitter">
                                <a href="https://twitter.com/ArunRS0966" target="_blank"><i class="social-icon fa fa-2x fa-twitter"></i></a>
                            </div>
                            <div class="col-sm-2 google social-item">
                                <a href="mailto:innnovationtechnologiespvtltd@gmail.com" target="_blank"><i class="social-icon fa fa-2x fa-google"></i></a>
                            </div>
                            <div class="col-sm-2 google social-item">
                                <a href="http://www.linkedin.com/in/arun-r-s-b4b4b61a0" target="_blank"><i class="social-icon fa fa-2x fa-linkedin"></i></a>
                            </div>
                            <div class="col-sm-2 google social-item">
                                <a href="https://www.youtube.com/channel/UCne4gL_bLIfw5zq1ufiThHQ?view_as=subscriber" target="_blank"><i class="social-icon fa fa-2x fa-youtube"></i></a>
                            </div>
                        </div>
                        <section class="bg-deepocean content-block-nopad footer-wrap-1-2">
                            <div class="container footer-1-2">
</div>
                            <!-- /.container  -->
                        </section>
                    </div>
                    <div class="col-lg-4 p-0"></div>
                </div>
            </div>
        </div>
        <!-- Features -->
        <!-- Carousel reviews -->
        <!-- Call to action -->
        <div class="py-5 bg-primary" id="download">
            <div class="container">
                <div class="row" style="">
                    <div class="col-md-6 animate-in-left">
                        <img class="img-fluid d-block my-4 animate-slide-in rounded" src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4qhJR?ver=333f&amp;q=90&amp;m=2&amp;h=768&amp;w=1024&amp;b=%23FFFFFFFF&amp;aim=true"> 
                    </div>
                    <div class="col-md-6 align-self-center text-center text-md-left">
                        <h1><b>Download Climato (Available Soon)</b></h1>
                        <p class="lead text-dark" style=""><b class="text-white">Beta version of mobile app is under development will release soon.</b></p>
                        <div class="row mt-5">
                            <div class="col-6 col-lg-4">
                                <a href="#"> <img class="center-block img-fluid d-block shadowed" src="assets/app/download_android.png"> </a>
                            </div>
                            <div class="col-6 col-lg-4">
                                <a href="#"> <img class="center-block img-fluid d-block shadowed" src="assets/app/download_ios.png"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="py-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 my-3 text-center">
                        <p class="text-white">&copy; Copyright 2020 - Innovation Technologies Pvt Ltd - All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript dependencies -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Script: Smooth scrolling between anchors in the same page -->
        <script src="js/smooth-scroll.js" style=""></script>
        <script>
    $(function() {
    $('[data-toggle="popover"]').popover();
})
</script>
    </body>
</html>