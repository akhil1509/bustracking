<html>
    <head>
        <title>Bus Tracking System</title>
        <link rel="icon" href="images/fav.png" type="image/png" sizes="64x64">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/common.css">
    </head>
    <body>
        
        <nav class="navbar bus-topnavbar navbar-fixed-top bus-BDR0">
            <div class="container">
                <div class="navabr-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>         
                    </button>
                    <div class="navbar-brand bus-PD0 bus-MG0">
                        <a href="menu.html"><img src="images/logo.png" class="bus-logo"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="menu.html"><img src="images/home.png" class="bus-icons"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!--
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div style='overflow:hidden;height:440px;width:700px;'>
            <div id='google_map' style='height:440px;width:700px;'></div>
            <div>
                <small>
                    <a href="http://embedgooglemaps.com">									embed google maps							
                    </a>
                </small>
            </div>
            <div>
                <small>
                    <a href="http://www.proxysitereviews.com/">proxies</a>
                </small>
            </div>
            <style>#google_map img{max-width:none!important;background:none!important}</style>
        </div>
        <script type='text/javascript'>function init_map(){var myOptions = {zoom:4,center:new google.maps.LatLng(17.385044,78.486671),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('google_map'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.385044,78.486671)});infowindow = new google.maps.InfoWindow({content:'<strong>Bus</strong><br>Hyderabad, india<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        -->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
        <script language="javascript" type="text/javascript">

        var timeout = setInterval(reloadChat, 15000);    
        function reloadChat () {

             $('#links').load('get.php');
        }
        </script>
        
        <div id="links">
        
        </div>
        
        <nav class="navbar bus-bottomnavbar navbar-fixed-bottom bus-BDR0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-6">
                        <button class="btn bus-btn">Navigate</button>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-6">
                        <button class="btn bus-btn">Route Map</button>
                    </div>
                </div>
            </div>
        </nav>
    </body>
</html>