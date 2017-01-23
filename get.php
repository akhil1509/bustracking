<?php
    require_once 'db_config.php';
    $query = $conn->query("SELECT * FROM Track");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['LAT'];
        $data2[]= $row['LON'];
    }
?>
<html>
    <head>
    
    </head>
    <body>
        
        
        <!--<div style="width:600px;max-width:100%;overflow:hidden;height:500px;color:red;">
            <div id="gmap_canvas" style="height:100%; width:100%;max-width:100%;">
                <iframe id="google_map" style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Hyderabad,+Telangana,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
            </div>
            <a class="google-map-code-enabler" rel="nofollow" href="https://www.interserver-coupons.com" id="get-data-for-embed-map">InterserverCoupons</a>
            <style>#gmap_canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
        </div>
        <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=f66ab6c8-4f0a-fb79-4067-84eb8b521590&c=google-map-code-enabler&u=1460280584" defer="defer" async="async"></script>-->
        
        <div style="" class="map-map">
            <div id="gmap_canvas" style="height:100%; width:100%;max-width:100%;">
                <iframe id="google_map" style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo end($data)?>, <?php echo end($data2)?>&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU&zoom=16"></iframe>
            </div>
            <a class="google-map-code-enabler" rel="nofollow" href="https://www.interserver-coupons.com" id="get-data-for-embed-map">InterserverCoupons</a>
            <style>#gmap_canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
        </div>
        <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=f66ab6c8-4f0a-fb79-4067-84eb8b521590&c=google-map-code-enabler&u=1460280584" defer="defer" async="async"></script>
        
        <script>
            var c = function(pos) {
                var lat     = pos.coords.latitude,
                    long    = pos.coords.longitude,
                    coords  = lat + ', ' + long,
                    cod     = <?php echo end($data)?> + ', ' + <?php echo end($data2)?>;
                    
                document.getElementById('google_map').setAttribute('src', 'https://www.google.com/maps/embed/v1/place?q=' + cod + '&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU')
                
            }
            
            document.getElementById('get_location').onclick = function(){
                navigator.geolocation.getCurrentPosition(c);
                return false;
            }
        </script>
        
    </body>
</html>