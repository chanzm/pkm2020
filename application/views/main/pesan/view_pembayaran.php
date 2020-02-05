<?php foreach ($checkout as $c): ?>
<div>
                                                 <span class="info-box bg-red" style="color: white;font-family: Open Sans;height:50%"><center>
                                                  <div class="row">
                                                    <div class="col-xs-7"><h4><strong>Complate Payment In</strong></h4></div>
                                                    <div class="col-xs-5"> <h4><strong>01h 23m 22s</strong></h4>
                                                    </div>
                                                  </div>
                                                  </center>
                                                </span>
<form action="<?php echo site_url("main/pesan/detail_bayar/$c->id_pesan"); ?>"  method="post">
                                                 <span class="info-box bg-default" style="background-color: white;color: #595959;font-family: Open Sans">
                                                  <div class="row" style="margin-left: 15px">
                                                    <div><h4><strong>ORDER NUMBER<br><br><?php echo $c->order_number?></strong></h4></div>
                                                  </div>
                                                </span>

                                                <h4 style="margin-left: 15px">Select Payment Methods</h4>

                                                <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <select style="height: 70px;width: 360px ;margin-left: 15px" name="jenis_pembayaran">
                                                        <option value="BCA">BCA</option>
                                                        <option value="BRI">BRI</option>
                                                        <option value="INDOMARET">INDOMARET</option>
                                                        <option value="ALFAMART">ALFAMART</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </span>
                                                <br><br>
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
                                        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block"><strong>CONTINUE</strong></button>
</form>
</div>

<?php endforeach; ?>
