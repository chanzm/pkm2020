<!DOCTYPE html>
<html>
<head>
    <title>Event And Recomendation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
          
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>main/fullcalendar/load",
            // selectable:true,
            // selectHelper:true
                    })
                }
          
        );
             
    </script>
</head>
    <body>
        <div class="container">
          <div class="row">
            <!-- <div class="col-xs-2 one">ONE</div> -->
           <!--  <div class="col-xs-8 eight"> -->
              <div class="three" id="calendar"></div>
          <!--   </div> -->
          </div>
            <!-- <div class="col-xs-4 four"> -->
                <div class="row">
                <h3 style="color: #595959"> <strong>Rekomendasi </strong></h3><br>
                    <div class="row">
                        <div class="col-xs-12 two">
                                <div class="three"><!-- 
                                    <p style="color: #595959"><strong>Februari 2019</strong></p> -->
                                   <?php foreach ($events as $e): ?>
                                    <div class="info-box">
                                            <div><span class="info-box-icon">
                                                <img src="<?php echo base_url('assets/image/event/'.$e->foto_ev); ?>">
                                               
                                            </span> </div>

                                           <!--  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span> -->
                                            
                                            <div class="info-box-content" >
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <span> <?php echo date('d F Y', strtotime($e->tanggal_mulai_ev)) ?></span>
                                                   <!--  <i style="position:relative;float:right;overflow:hidden" class="fa fa-star"></i> -->
                                                     <i style="position:relative;float:right;overflow:hidden" class="far fa-star"></i>
                                                </span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><strong><?php echo $e->nama_ev ?></strong></span>
                                                <span>
                                                    <i class="fa fa-map-marker-alt"></i>
                                                    <span style="color: #595959;font-family: Open Sans"><?php echo $e->tempat_ev ?> </span>
                                                 <!--    <i class="fa fa-map-marker"></i>
                                                    <span>Event Terdekat</span> -->
                                                </span>
                                                <br>
                                                <span>
                                                    <i class="fa fa-clock"></i>
                                                    <span style="color: #595959;font-family: Open Sans"><?php echo $e->jam_mulai_ev?> - <?php echo $e->jam_selesai_ev?></span>
                                                </span>
                                                
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><h6>oleh <strong><?php echo $e->penyelenggara_ev?></strong></h6></span>

                                               <!--  <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block">Detail</button> -->
                                               <!-- <button class="btn btn-sm" style="background-color:  #4475BA">Detail</button>
 -->                                           <a href="<?php echo site_url("main/events/detail_event/$e->id_ev"); ?>"  style="color: #ffffff"><em class="btn btn-sm" style="background-color:  #4475BA">Detail</em></a>
                                               <!--  <span class="info-box-number">10<small>%</small></span> -->
                                            </div>
              <!-- /.info-box-content -->
                                    </div>
                                </div>
                                            <?php endforeach; ?>
                                
                               
                     </div>

                     </div>

            </div>
          
    </body>
</html>

