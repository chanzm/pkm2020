<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
  

<div class="container">
  <head><h3><strong>Ticket Information</strong></h3></head>
  <?php foreach ($checkout as $c): ?>
  <div class="row">
    <div class="container">
    <span class="info-box-text" style="color: #595959;font-family: Open Sans">
                          <div class="col-xs-3">
                            <div class="panel panel-default">
                                <div class="panel-body"><?php echo $c->jumlah_tiket ?>x</div>
                            </div>
                          </div>
                                                 
                          <div class="col-xs-9"><h4><strong><?php echo $c->nama_ev ?><br><?php if ($c->lama_ev != 1){
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
  </div>
  </div>

  <div class="row">
        <div class="container">
    <span class="info-box-text-fluid" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <div class="col-xs-8"><h4>Subtotal</h4></div>
                                                    <div class="col-xs-4"> <h4>IDR <?php echo $c->jumlah_bayar?></h4>
                                                    </div>
                                                  </div>
    </span>
    <span class="info-box-text-fluid" style="color: #595959;font-family: Open Sans">
                                                  <div class="row">
                                                    <div class="col-xs-6"><h4>Additional Fee</h4></div>
                                                    <div class="col-xs-6"> <h6>will be adjusted according to payment method</h6>
                                                    </div>
                                                  </div>
    </span>
    <hr style="height: 3px;background-color:#666;border: 0 none;">
    </div>
  </div>

<?php $pesan_id = $c->id_pesan;?>

<?php endforeach; ?>
  <div class="row">
    <div class="container">
    <h3><strong>Buyer Information</strong></h3> <br>
    <h5>Make sure all the information correct. You cannot change it later .</h5>
    <!-- pake form daptar -->
    </div>

    
<form>
  <?php foreach ($user as $u): ?>
  <div class="container container-fluid form-row align-items-center">

    <div class="col-auto">
     <!--  <label class="sr-only" for="exampleInputEmail"><i class="fa fa-envelope"></i></label> -->
    <label for="exampleInputEmail1">Email address</label>
      <input class="form-control" id="disabledInput" type="email" placeholder="<?php echo $u->email?>" disabled>
    </div>
    <br>
    <div class="col-auto">
     <!--  <div class="input-group-prepend">
          <div class="input-group-text">Telephone</div>
        </div> -->
      <label for="exampleInputEmail2">Telephone</label>
      <input class="form-control" id="disabledInput" type="text" placeholder="INI BELUM ADA DI DATABASE" disabled>
    </div>
    <br>

   <div class="row">
    <div class="col-xs-6"><label for="exampleInputEmail1">First Name</label><input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $u->firstname?>" disabled></div>
    <div class="col-xs-6"><label for="exampleInputEmail1">Last Name</label><input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $u->lastname?>" disabled></div>
   </div>

  </div>
</form>    
</div>

      <br>
      <form action="<?php echo site_url("main/pesan/pembayaran/$pesan_id"); ?>"  method="post">
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
                                        <button style="background-color:  #4475BA;border-radius: 10px"  type="submit" class="btn btn-primary btn-block"><strong>CONTINUE</strong></button>
      <?php endforeach; ?>
      </form>
      <br>
</div>
</body>
</html>