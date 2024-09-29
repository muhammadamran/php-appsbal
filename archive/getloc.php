<!DOCTYPE html>
<html>

<head>
    <title>Get User Location</title>
</head>

<body>

    <h1>Get User Location</h1>

    <button onclick="getLocation()">Get Location</button>

    <p id="location"></p>

    <script>
        // Function untuk mendapatkan lokasi
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        // Function untuk menampilkan lokasi
        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Tampilkan lokasi di halaman
            document.getElementById("location").innerHTML = "Latitude: " + latitude +
                "<br>Longitude: " + longitude;

            // Kirim data ke PHP untuk diproses
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "process_location.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("latitude=" + latitude + "&longitude=" + longitude);
        }

        // Function untuk menampilkan error jika gagal
        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    document.getElementById("location").innerHTML = "User denied the request for Geolocation.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    document.getElementById("location").innerHTML = "Location information is unavailable.";
                    break;
                case error.TIMEOUT:
                    document.getElementById("location").innerHTML = "The request to get user location timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    document.getElementById("location").innerHTML = "An unknown error occurred.";
                    break;
            }
        }
    </script>

</body>

</html>