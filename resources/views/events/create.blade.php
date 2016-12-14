@extends('app')

@section('title')
  Buat acara baru
@endsection

@section('content')


  {!! Form::open(['action'=>'EventController@store']) !!}
  <table>
  <tr>
    <td>
      {!! Form::label('title', 'Nama Kegiatan') !!}
    </td>
    <td>
      {!! Form::text('title') !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('Deskripsi') !!}
    </td>
    <td>
      {!! Form::textarea('description') !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('Waktu') !!}
    </td>
    <td>
      {{-- {!! Form::date('tgl', \Carbon\Carbon::now()) !!} --}}
      {{-- <div class="container">
          <div class="row">
              <div class='col-sm-6'>
                  <div class="form-group"> --}}
                      <div class='input-group date' id='datetimepicker1'>
                          <input type='text' class="form-control" name="datetime" id="datetime"/>
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  {{-- </div>
              </div> --}}
              <script type="text/javascript">
                  $(function () {
                      $('#datetimepicker1').datetimepicker({
                        format: 'MM/DD/YYYY HH:mm',
                      });
                  });
              </script>
          {{-- </div>
      </div> --}}
    </td>
  </tr>
  <tr>
    <td>
      {!!Form::label('Lokasi')!!}
    </td>
    <td>
      {!! Form::text('location') !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::hidden('latitude','',array('id'=>'latitude')) !!}
    </td>
    <td>
      {!! Form::hidden('longitude','',array('id'=>'longitude')) !!}
    </td>
  </tr>
  <tr>
    <td>
      {!!Form::label('Pilih Lokasi')!!}
    </td>
    <td>
      <div id="map" style="width: 100%; height: 300px">

      </div>
    </td>
  </tr>
  <tr>
    <td>
      {!!Form::label('Biaya')!!}
    </td>
    <td>
      {!! Form::text('fee') !!}
    </td>
  </tr>
  <tr>
    <td>
      {!!Form::label('Keterangan biaya')!!}
    </td>
    <td>
      {!! Form::text('fee_desc') !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('Link acara') !!}
    </td>
    <td>
      {!! Form::text('link') !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('Publikasikan') !!}
    </td>
    <td>
      {!! Form::checkbox('active', 1) !!}
    </td>
  </tr>
  <tr>
    <td>

    </td>
    <td>
      {!! Form::submit('Simpan') !!}
    </td>
  </tr>


  </table>
  {!! Form::close() !!}



  <script type="text/javascript">
  //Set up some of our variables.
var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker?

//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {

  //The center location of our map.
  var centerOfMap = new google.maps.LatLng(-6.982847, 110.407144);

  //Map options.
  var options = {
    center: centerOfMap, //Set center.
    zoom: 15 //The zoom value.
  };

  //Create the map object.
  map = new google.maps.Map(document.getElementById('map'), options);

  //Listen for any clicks on the map.
  google.maps.event.addListener(map, 'click', function(event) {
      //Get the location that the user clicked.
      var clickedLocation = event.latLng;
      //If the marker hasn't been added.
      if(marker === false){
          //Create the marker.
          marker = new google.maps.Marker({
              position: clickedLocation,
              map: map,
              draggable: true //make it draggable
          });
          //Listen for drag events!
          google.maps.event.addListener(marker, 'dragend', function(event){
              markerLocation();
          });
      } else{
          //Marker has already been added, so just change its location.
          marker.setPosition(clickedLocation);
      }
      //Get the marker's location.
      markerLocation();
  });
}

function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    document.getElementById('latitude').value = currentLocation.lat(); //latitude
    document.getElementById('longitude').value = currentLocation.lng(); //longitude
}


//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);
  </script>

  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTFX8_D6iq5FiuqUejKrNgKvODASc6f1M&callback=initMap">
  </script>
@endsection
