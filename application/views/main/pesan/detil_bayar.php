<span class="info-box bg-red" style="color: white;font-family: Open Sans;height:50%"><center>
                                                  <div class="row">
                                                    <div class="col-xs-7"><h4><strong>Complate Payment In</strong></h4></div>
                                                    <div class="col-xs-5"> <h4><strong>01h 23m 22s</strong></h4>
                                                    </div>
                                                  </div>
                                                  </center>
</span>

<!-- belum diotak atik nomer rekeningnyaaaaaa karena belum ada database penyelenggara event -->
<span class="info-box bg-default" style="background-color: white;color: #595959;font-family: Open Sans">
                                                  <div class="row" style="margin-left: 15px">
                                                    <div class="col-xs-7"><h4><strong>NOMOR REKENING<br><br>51160701120</strong></h4></div>
                                                    <div class="col-xs-5"><img src="<?php echo base_url(); ?>assets/img/bca.jpg"></div>
                                                  </div>
</span>

<!-- ini buat tiket information -->
<div class="info-box bg-default" style="background-color: white;color: #595959;font-family: Open Sans">

<h4 style="margin-left: 15px"><strong>Ticket Information</strong></h4>
<?php foreach ($checkout as $c): ?>
<span class="info-box-text" style="color: #595959;font-family: Open Sans">
                          <div class="col-xs-3">
                            <div class="panel panel-default">
                                <div class="panel-body">1x</div>
                            </div>
                          </div>
                                                 
                          <div class="col-xs-9"><h4>

                                                 <?php echo $c->nama_ev ?><br><?php if ($c->lama_ev != 1){
                                                        echo '<i class="fa fa-calendar"></i>';
                                                    echo date('d F Y', strtotime($c->tanggal_mulai_ev));
                                                    echo '-';
                                                    echo date('d F Y', strtotime($c->tanggal_selesai_ev)) ;
                                                    
                                                }
                                                    else {
                                                        echo '<i class="fa fa-calendar"></i>';
                                                        echo date('d F Y', strtotime($c->tanggal_mulai_ev));

                                                }
                                                ?> </strong> <br> <?php echo $c->jam_mulai_ev?> - <?php echo $c->jam_selesai_ev?></h4></div>


 </span>
    <hr style="height: 3px;background-color:#666;border: 0 none;">

    <span class="info-box-text-fluid" style="color: #595959;font-family: Open Sans">
                                                  <div class="row" style="margin-left: 7px">
                                                    <div class="col-xs-8"><h4>Subtotal</h4></div>
                                                    <div class="col-xs-4"> <h4>IDR <?php echo $c->jumlah_bayar?></h4>
                                                    </div>
                                                  </div>
    </span>
    <span class="info-box-text-fluid" style="color: #595959;font-family: Open Sans">
                                                  <div class="row" style="margin-left: 7px">
                                                    <div class="col-xs-6"><h4>Additional Fee</h4></div>
                                                    <div class="col-xs-6"> <h6>will be adjusted according to payment method</h6>
                                                    </div>
                                                  </div>
    </span>
</div>

<form action="<?php echo site_url("main/pesan/pembayaran_berhasil"); ?>"  method="post">
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
                                        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block"><strong>BAYAR</strong></button>
</form>

<?php endforeach; ?>

