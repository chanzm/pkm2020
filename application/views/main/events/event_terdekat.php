<!DOCTYPE html>
<html>
<head>
    <title>Event Terdekat</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="container">
  <div class="row">
            <!-- <div class="col-xs-2 one">ONE</div> -->
         <!--    <div class="col-lg-8"> -->
                    <div class="three" id="dvMap" style="width: 750px; height: 550px"></div>
        <!--     </div> -->
   </div>

            <!-- <div class="col-lg-4"> -->
    <div class="row">
                <h3 style="color: #595959"> <strong>Event Terdekat </strong></h3><br>
                <div class="row">
                     <div class="col-xs-12 two">
                                <div class="three">
                                    <div class="info-box">
                                            <div><span class="info-box-icon">
                                                <img  src="<?php echo base_url(); ?>assets/img/logo_et.jpeg">
                                            </span> </div>

                                           <!--  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span> -->

                                            <div class="info-box-content" >
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <span><strong>BURSA KARIER ITS</strong></span>
                                                    <i style="position:relative;float:right;overflow:hidden" class="far fa-star"></i>
                                                </span>
                                                 <span>
                                                    <i class="fa fa-calendar"></i>
                                                    <span style="color: #595959;font-family: Open Sans">06 Februari 2019</span>
                                                </span>
                                                <br>
                                                <span>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span style="color: #595959;font-family: Open Sans">Graha ITS, Surabaya</span>
                                                 <!--    <i class="fa fa-map-marker"></i>
                                                    <span>Event Terdekat</span> -->
                                                </span>
                                                                                             
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><h6>oleh <strong>Physics Photography</strong></h6></span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><h6>1.1 km dari sini</h6></span>
                                         
                                            </div>
              <!-- /.info-box-content -->
                                    </div>
                                </div>

                                 <div class="four">
                                    <div class="info-box">
                                            <div><span class="info-box-icon">
                                                <img  src="<?php echo base_url(); ?>assets/img/logo_et.jpeg">
                                            </span> </div>

                                           <!--  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span> -->

                                            <div class="info-box-content" >
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <span><strong>BURSA KARIER ITS</strong></span>
                                                    <i style="position:relative;float:right;overflow:hidden" class="far fa-star"></i>
                                                </span>
                                                 <span>
                                                    <i class="fa fa-calendar"></i>
                                                    <span style="color: #595959;font-family: Open Sans">06 Februari 2019</span>
                                                </span>
                                                <br>
                                                <span>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span style="color: #595959;font-family: Open Sans">Graha ITS, Surabaya</span>
                                                 <!--    <i class="fa fa-map-marker"></i>
                                                    <span>Event Terdekat</span> -->
                                                </span>
                                                                                             
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><h6>oleh <strong>Physics Photography</strong></h6></span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><h6>1.1 km dari sini</h6></span>
                                         
                                            </div>
              <!-- /.info-box-content -->
                                    </div>
                                </div>


<!--                                 tutup col 12 -->
                               
                <!-- tutupe row -->
                </div>
            </div>
    
  </div>
   
</div>

</body>


<?php
    ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3GbbV_4d6pv1Mg6A4wCho1Y2tuSOiKfY" async defer></script>
      <script type="text/javascript">
        var markers = [
        <?php
        $sql = mysqli_query($db, "SELECT * FROM lokasi");
        while(($data =  mysqli_fetch_assoc($sql))) {
        ?>
        {
                     "lat": '<?php echo $data['lat']; ?>',
             "long": '<?php echo $data['long']; ?>',
             "alamat": '<?php echo $data['alamat']; ?>'
        },
        <?php
        }
        ?>
        ];
        </script>
        <script type="text/javascript">
            window.onload = function () {
                var mapOptions = {
                center: new google.maps.LatLng(-2.2459632,116.2409634),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }; 
                var infoWindow = new google.maps.InfoWindow();
                var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                for (i = 0; i < markers.length; i++) {
                    var data = markers[i];
            var latnya = data.lat;
            var longnya = data.long;
            
            var myLatlng = new google.maps.LatLng(latnya, longnya);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: data.alamat
                    });
                    (function (marker, data) {
                        google.maps.event.addListener(marker, "click", function (e) {
                            infoWindow.setContent('<b>Lokasi</b> :' + data.alamat + '<br>');
                            infoWindow.open(map, marker);
                        });
                    })(marker, data);
                }
            }
        </script>
</html>
