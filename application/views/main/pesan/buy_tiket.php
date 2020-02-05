  <?php foreach ($checkout as $c): ?>
                                              <div class="container">
                                                <br>

                                                 <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <div class="col-xs-8"><h4> <?php echo $c->nama_ev?> 
                                                    <br> 
                                                    <?php if ($c->lama_ev != 1){
                                                        echo '<i class="fa fa-calendar"></i>';
                                                    echo date('d F Y', strtotime($c->tanggal_mulai_ev));
                                                    echo '-';
                                                    echo date('d F Y', strtotime($c->tanggal_selesai_ev)) ;
                                                    
                                                }
                                                    else {
                                                        echo '<i class="fa fa-calendar"></i>';
                                                        echo date('d F Y', strtotime($c->tanggal_mulai_ev));

                                                }
                                                ?></h4></div>
                                                    <div class="col-xs-4">
                                                    	 <div class="panel panel-default">
															  <div class="panel-body"><?php echo $c->jumlah_tiket?></div>
														 </div>
                                                    </div>
                                                  </div>
                                                </span>

                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <div class="col-xs-8"><h4><?php echo $c->jam_mulai_ev?> - <?php echo $c->jam_selesai_ev?></h4></div>
                                                    <div class="col-xs-4"> <h4>IDR <?php echo $c->harga?></h4>
                                                    </div>
                                                  </div>
                                                </span>
                                               <hr style="height: 5px;background-color:#666;border: 0 none;">

                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <div class="col-xs-8"><h4><strong>Total</strong></h4></div>
                                                    <div class="col-xs-4"> <h4><strong>IDR <?php echo $c->jumlah_bayar?></strong></h4>
                                                    </div>
                                                  </div>
                                                </span><br>
                                              


                 <form action="<?php echo site_url("main/pesan/checkout/$c->id_pesan"); ?>"  method="post">
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
                                        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block"><strong>CHECKOUT</strong></button>
                            </form>
                         </div>
                          <?php endforeach; ?>