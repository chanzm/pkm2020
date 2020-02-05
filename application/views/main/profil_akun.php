<!DOCTYPE html>
<html>
<head>
    <title>Event And Recomendation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
    <body>

      <!--   <div class="container">
            <div id="calendar">
            </div>
        </div> --> 
          <div class="row">
            <!-- <div class="col-xs-2 one">ONE</div> -->
           <!--  <div class="col-xs-8 two">
              <div class="three" id="calendar"></div>
            </div> -->
            <div class="col-xs-12 twelve">
              <div class="jumbotron" style="background-color: #00204C">
                 <div class="three">
                                    <div class="info-box" style="border-radius: 20px">
     <?php foreach($akun as $a): ?>
                                           <!--  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span> -->
                                             <div><span class="info-box-icon">
                                                <img  src="<?php echo base_url(); ?>assets/img/STPN2.jpg">
                                            </span> 
                                              </div>

                                            <div class="info-box-content" >
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <span><strong><?php echo $a->firstname?></strong><strong><?php echo $a->lastname?></strong></span>
                                                </span>
                                                <br>

                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <h5><?php echo $a->email?></h5>
                                                </span>
                                                <!-- <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <h5><?php echo $a->password?> (jadiin bintang-bintang)</h5>
                                                </span> -->
                            
                                            </div>
              <!-- /.info-box-content -->
                                  </div>
                  </div>
                <!-- dibawah ini tutupe jumbotron -->
                </div>
                <br>
                    <div class="row">
    
                        <div class="col-xs-12 two">
                                <div class="three">
                                    <p style="color: #595959"><strong>Orders</strong></p>
                                    <?php foreach ($events as $e): ?>
                                    <div class="info-box">
                                            <div><span class="info-box-icon">
                                                 <img src="<?php echo base_url('assets/image/event/'.$e->foto_ev); ?>">
                                            </span> </div>

                                           <!--  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span> -->

                                            <div class="info-box-content" >
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <span><?php echo date('d F Y', strtotime($e->tanggal_mulai_ev)) ?></span> <!-- ini nanti diganti tiketnya buat tg berapa -->
                                                    <i style="position:relative;float:right;overflow:hidden" class="far fa-star"></i>
                                                </span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans"><strong><?php echo $e->nama_ev ?></strong></span>
                                                <span>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span style="color: #595959;font-family: Open Sans"><?php echo $e->tempat_ev ?> </span>
                                                 <!--    <i class="fa fa-map-marker"></i>
                                                    <span>Event Terdekat</span> -->
                                                </span>
                                                <br>
                                                <span>
                                                    <i class="far fa-clock"></i>
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
                                <div class="four">
                                  <p class="mb-1">
                                  <!--   <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block"><i class="fa fa-mail-forward"></i> Logout </button> -->
                                  <center><a href="<?php echo site_url("login/logout"); ?>" style="background-color:  #4475BA;border-radius: 10px"><i class="fa fa-mail-forward btn btn-lg btn-primary"> Logout</i></a></center>

                                  </p>
                                </div>
       
<?php endforeach; ?>

                                
                                <!-- </div> -->
                        </div>
                     </div>

            </div>
          </div>
    </body>
</html>

