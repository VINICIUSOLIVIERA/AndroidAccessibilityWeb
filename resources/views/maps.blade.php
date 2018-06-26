@extends('layouts.layout')
@push('link-add')
  
  <style type="text/css">
    
    #map{
      width: 100%;
    }

  </style>

@endpush
@section('content')
  <!-- AIzaSyCdwy3fq23_xXCsj9tPObfhUUVmNY4e0R0 -->
  <div class="row box">
    <div class="col-md-12 box">
      <div id="map"></div>
    </div>
  </div>
@endsection

@push('script-add')
<script>
    var map;
    var latlng = {lat: -7.115, lng: -34.86306};
    var urlbase = window.location.protocol + "//" + window.location.hostname + ":" + window.location.port + "/";

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: latlng,
          zoom: 10
        });

        getMarker();

    }

    function getMarker(){
        $.ajax({
            type : "GET",
            url : urlbase + "map/marker",
            success : function(response){
              console.log(response);
                var topic;
                var position;
                response.forEach(function(value){
                    topic = value.topic;
                    position = {lat: parseFloat(value.lat), lng: parseFloat(value.lng)};
                    addMarker(value, position);
                });
            }
        });
    }

    function addMarker(value, position){
        var marker = new google.maps.Marker({
          position: position,
          map: map,
          title: value.topic
        });


        marker.addListener('click', function(){
            var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h1 id="firstHeading" class="firstHeading">' + value.topic + '</h1>'+
              '<div id="bodyContent">'+
              '<p>' + value.description + '</p>'+
              '<p><a href="' + $("#url_pattern").data("value") + '/map/seek/' + value.id + '" target="_blank">'+'Responder</a></p>'+
              '<p>' + value.name + ", " + value.created_at + '.</p>'+
              '</div>'+
              '</div>';
            var infoWindow = new google.maps.InfoWindow({
                content: contentString
            });
            infoWindow.open(map, marker);
        });

        marker.setMap(map);
    }

    $(document).ready(function(){
        $("#map").height($(window).height());
    });

</script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0KgS3uOVCtwX1IM1zCODg_i-w5m_s26g&callback=initMap"></script>
@endpush