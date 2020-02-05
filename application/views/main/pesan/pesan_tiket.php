  <?php foreach ($event as $e): ?>
 <div class="jumbotron" style="background-color: #00204C">
                 <div class="three">
                                  <div class="container">
                                    <div class="info-box" style="border-radius: 20px">
                                              <div class="container">

                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                    <br>
                                                    <span><strong><?php echo $e->nama_ev?></strong></span><br>
                                                    <span> <?php if ($e->lama_ev != 1){
                                                        echo '<i class="fa fa-calendar"></i>';
                                                    echo date('d F Y', strtotime($e->tanggal_mulai_ev));
                                                    echo '-';
                                                    echo date('d F Y', strtotime($e->tanggal_selesai_ev)) ;
                                                    
                                                }
                                                    else {
                                                        echo '<i class="fa fa-calendar"></i>';
                                                        echo date('d F Y', strtotime($e->tanggal_mulai_ev));

                                                }
                                                ?></span>
                                                </span>
                                                <br>

                                                <span class="info-box-text-fluid" style="color: #595959;font-family: Open Sans">
                                                  <h5>PDF e-ticket akan dikirimkan melalui email. Tunjukkan e-ticket pada saat acara. (Tiket hanya berlaku .............)</h5>
                                                </span>
                                               <hr style="height: 5px;background-color:#666;border: 0 none;">

                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <div class="col-xs-9" name="harga_tiket"><h4>IDR <?php echo $e->harga_tiket_ev?></h4></div>
                                                    <form action="<?php echo site_url("main/pesan/buy/$e->id_ev"); ?>" method="post">
                                                      <select class='form-control input-md' name="jumlah_tiket" id="jumlah_tiket" style="height: 40px;width: 100px">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        
                                                      </select>
                                                       <input type="hidden" class="form-control" name="harga_tiket" value="<?php echo $e->harga_tiket_ev?>">
                                                    <!-- </form> -->
                                                    </div>
                                                  </div>
                                                </span><br>
                                              </div>

                            
                                            </div>


                                      </div>
              <!-- /.info-box-content -->
                                 </div>

                </div>

                <!--  <form action="<?php echo site_url("main/pesan/buy/$e->id_ev"); ?>"  method="post"> -->
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
                                        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block">BUY</button>
                            </form>

  <?php endforeach; ?>