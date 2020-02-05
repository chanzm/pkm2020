
  <!--       <div class="container"> -->
    <?php foreach ($events as $e): ?>
                    <div class="row">
                        <div class="col-xs-12 two">
                            <div>
                                    <div class="info-box">
                                    <img src="<?php echo base_url('assets/image/event/'.$e->foto_ev); ?>">
                                   <!--  <center><img src="<?php echo base_url(); ?>assets/img/logo_et.jpeg" width="200" height="200"></center> -->
                                    <span class="info-box-text" style="color: #595959;font-family: Open Sans"><strong><?php echo $e->nama_ev?></strong></span>
                                    <i style="position:relative;float:right;overflow:hidden" class="fa fa-star"></i>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <?php if ($e->lama_ev != 1){
                                                        echo '<i class="fa fa-calendar"></i>';
                                                    echo date('d F Y', strtotime($e->tanggal_mulai_ev));
                                                    echo '-';
                                                    echo date('d F Y', strtotime($e->tanggal_selesai_ev)) ;
                                                    
                                                }
                                                    else {
                                                        echo '<i class="fa fa-calendar"></i>';
                                                        echo date('d F Y', strtotime($e->tanggal_mulai_ev));

                                                }
                                                ?>
                                                </span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                <i class="fa fa-map-marker"> <?php echo $e->tempat_ev?> </i>
                                                </span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                <i class="fa fa-clock-o"> <?php echo $e->jam_mulai_ev?> - <?php echo $e->jam_selesai_ev?></i>
                                                </span>
                                               
                                    </div>
                            </div>

                            <div>
                                    <div class="info-box">
                                    
                                    <span class="info-box-text" style="color: #595959;font-family: Open Sans"><strong>Deskripsi</strong>
                                    </span>
                                                <span class="info-box-text-fluid" style="color: #595959;font-family: Open Sans">
                                                <p><?php echo $e->ket_ev?></p>
                                                    
                                                </span>
                                               
                                    </div>
                            </div>

                            <div>
                                    <div class="info-box">
                                    <span class="info-box-text" style="color: #595959;font-family: Open Sans"><strong>Kontak Penyelenggara</strong></span>
                                   
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                <i class="fa fa-phone"> <?php echo $e->notelp_ev?> </i>
                                                    
                                                </span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                <i class="fa fa-envelope"><?php echo $e->email_ev?> </i>
                                                </span>
                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                <i class="fa fa-instagram"> <?php echo $e->ig_ev?></i>
                                                <br>(nanti kontaknya sesuai yang diinput aja)
                                                </span>
                                    </div>
              <!-- /.info-box-content -->
                            </div>

                            
                            <form action="<?php echo site_url("main/pesan/pesan/$e->id_ev"); ?>"  method="post">
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
                                        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block">PESAN TIKET</button>
                            </form>
                          
                            <br>

                        </div>

                </div>
  <?php endforeach; ?>
    <!--     </div> -->