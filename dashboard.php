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
                    <div class="navbar-brand bus-PD0 bus-MG0">
                        <a href="menu.html"><img src="images/logo.png" class="bus-logo"></a>
                    </div>
                    <div class="navbar-brand" style="float:right">
                        <a href="menu.html"><img src="images/home.png" class="bus-icons"></a>
                    </div>
                </div>
            </div>
        </nav><br><br><br>
        <div class="container"> 
            <center>
                <form method="post" action="track.php">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="[ form-group ]">
                                <input type="checkbox" name="fancy-checkbox-primary" id="fancy-checkbox-primary" autocomplete="off" checked/>
                                <div class="[ btn-group ]">
                                    <label for="fancy-checkbox-primary" class="[ btn btn-primary ]">
                                        <span class="[ glyphicon glyphicon-ok ]" style="padding-bottom:6.5px;"></span>
                                        <span>.</span>
                                    </label>
                                    <label for="fancy-checkbox-primary" class="[ btn btn-default active ]">
                                        Notify when speed limit exceeded.
                                    </label>
                                </div>
                            </div><br><br>
                            <select class="form-control bus-select">
                                <option value="">---Select Route Bus---</option>
                                <option>ECIL</option>
                                <option>LB NAGAR</option>
                                <option>Mehdipatnam</option>
                                <option>MMTS</option>
                                <option>Uppal</option>
                            </select>
                            <br><br>
                            <span class="bus-color878787">(or)</span><br><br><br>
                            <select class="form-control bus-select">
                                <option value="">---Select Bus Number---</option>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select><br><br>
                            <button class="btn bus-subbtn btn-lg">Let's Track</button>
                            
                        </div>
                    </div>
                </form>
            </center>
        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
     </body>
</html>