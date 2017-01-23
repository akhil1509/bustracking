<?php
    include 'db_config.php';
        $bus_lat = $_GET['lat'];
        $bus_lon = $_GET['lon'];
        $sql = "INSERT INTO Track(LAT,LON) VALUES('$bus_lat', '$bus_lon')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Inserted')</script>";
            return '1';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return '0';
        }
?>