<?php
function getUserLocation()
{
    // Dapatkan alamat IP pengguna
    $user_ip = "136.226.236.103";

    // Gunakan layanan geolocation dari ipinfo.io untuk mendapatkan detail lokasi
    $api_url = "http://ipinfo.io/{$user_ip}/json";

    // Ambil data JSON dari API
    $location_data = file_get_contents($api_url);

    // Decode data JSON
    $location_info = json_decode($location_data, true);

    return $location_info;
}

// Panggil fungsi untuk mendapatkan lokasi
$location = getUserLocation();

if ($location) {
    echo "IP Address: " . $location['ip'] . "<br>";
    echo "City: " . $location['city'] . "<br>";
    echo "Region: " . $location['region'] . "<br>";
    echo "Country: " . $location['country'] . "<br>";
    echo "Coordinates: " . $location['loc'] . "<br>";
} else {
    echo "Location not found.";
}
