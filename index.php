<body>
<u><b>Geolookup</b></u> <br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/c1380180f9d70963/geolookup/q/Balikpapan.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'country_name'};
  $location1 = $parsed_json->{'location'}->{'city'};
  $lat = $parsed_json->{'location'}->{'lat'};
  $lon = $parsed_json->{'location'}->{'lon'};

  echo "Country is ${location} \n </br>";
  echo "City is ${location1}\n </br>";
  echo "Latitude is : ${lat} and Longitude is: ${lon}\n </br>";
?>
================================================= </p>
</body>
<body>
<u><b>Forecast</b></u> <br>
<?php
$json_data1=file_get_contents("http://api.wunderground.com/api/c1380180f9d70963/forecast/q/Balikpapan.json");
$obj = json_decode($json_data1);
$loc = $obj->{'forecast'}->{'txt_forecast'}->{'date'};
$day = $obj->forecast->txt_forecast->forecastday[0]->title;
$image = $obj->forecast->txt_forecast->forecastday[0]->icon_url;
$info = $obj->forecast->txt_forecast->forecastday[0]->fcttext_metric;
$info1 = $obj->forecast->simpleforecast->forecastday[0]->{'date'}->pretty;

echo "Forecast Day : ${day} \n </br>";
echo "${info1} \n </br>";
echo "${info} ";
echo '<img src="'.$image.'"></br>';
?>
</body>
================================================= </p>
</body>
<body>
<u><b>astronomy</b></u> <br>
<?php
$json_data2=file_get_contents("http://api.wunderground.com/api/c1380180f9d70963/astronomy/q/Balikpapan.json");
$obj1 = json_decode($json_data2);
$moon = $obj1->{'moon_phase'}->{'ageOfMoon'};
$hemis = $obj1->{'moon_phase'}->{'hemisphere'}; 
$time = $obj1->{'moon_phase'}->{'current_time'}->{'hour'};
$time1 = $obj1->{'moon_phase'}->{'current_time'}->{'minute'};
echo "Age Of Moon is ${moon} \n </br>";
echo "Hemisphere is ${hemis} \n </br>";
echo "Current Time is ${time}Hour, ${time1}Minutes  \n </br>";
//echo '<img src="http://myimglink.com/img.png" border=0>'; 
?>
</body>