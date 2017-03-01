$(document).ready(function() {

    "use strict";

    var cityName = $("#cityname");
    var mapHolder = $("#forecast");
    var submitLocation = $("#submitLocation");
    var city = "San Antonio, TX";
    var geocoder = new google.maps.Geocoder();

    var mapOptions = {
        zoom: 5,
        center: {lat: 29.4267904, lng: -98.4917651}
    };
    console.log(mapOptions);
    // Render the map
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var marker = new google.maps.Marker({
        position: mapOptions.center,
        map: map,
        draggable: true
    });


    function geocodeAddress() {
        geocoder.geocode({"address": city}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
            } else {
                alert("Geocoding not successful - STATUS: " + status);
            }

            marker.setPosition(results[0].geometry.location);

            google.maps.event.addListener(marker, "dragend", function (event) {
                loadWeather(event.latLng);
            });
            loadWeather(results[0].geometry.location);
        })
    }


    function loadWeather(latLng) {
        var info = {
            APPID: "182211a7d1f823432fb730b8267d0ce8",
            lat: latLng.lat(),
            lon: latLng.lng(),
            units: 'imperial',
            cnt: 3
        };

        $.get("http://api.openweathermap.org/data/2.5/forecast/daily", info).done(function(weather) {
            cityName.html(" " + weather.city.name);
            weatherBoxForecast(weather);
        })
    }


    function weatherBoxForecast(weather) {
        console.log(mapHolder.length);
        mapHolder.html("");
        var daysArray = weather.list;
        daysArray.forEach(function (day, i) {
            var description = day.weather[0].description;
            var highTemp = day.temp.max.toFixed(0);
            var lowTemp = day.temp.min.toFixed(0);
            var humidity = day.humidity;
            var main = day.weather[0].main;
            var wind = day.speed.toFixed(0);
            var icon = day.weather[0].icon;
            var timestamp;

            if (i == 0) {
                timestamp = moment().format("dddd");
            } else if (i == 1) {
                timestamp = moment().add(1, "days").format("dddd");
            } else {
                timestamp = moment().add(2, "days").format("dddd");
            }


            var data = "<div class=\"dayDiv col-md-4\" id=\"boxes\">" + timestamp + 
                            "<h3>" + highTemp + "&deg;/" + lowTemp + "&deg;</h3>" + 
                            "<p><img alt=\"weather icon\" src=\"http://openweathermap.org/img/w/" + icon + ".png\"></p>\
                            <p><span class=\"heading\">" + main + ":</span> " + description + "</p>\
                            <p><span class=\"heading\">Humidity:</span> " + humidity + "&#37;</p>\
                            <p><span class=\"heading\">Wind:</span> " + wind + " mph</p>\
                        </div>";
            mapHolder.append(data);
        })
    }

    submitLocation.on("click", function () {
        city = $("#location").val();
        geocodeAddress();
        map.setZoom(9);
    });

    geocodeAddress();

});

