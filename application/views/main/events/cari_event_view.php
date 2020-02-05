<section class="content">
  <!-- <div class="row"> -->
    <!-- <div class="col-xs-16">  -->
      <div class="container">
      <div class="row">
          <form action="#"  method="post">
          <h1><center>Cari Event Berdasarkan</center></h1>
          <div class="form-group">
          <label>Waktu</label>
            <br><input type="date" name="waktu" id="waktu">
          </div>
          <div class="form-group">
          <label>Kategori</label>
          <select class='form-control input-md' name='kategori' id='kategori' style='width:300px;'>
                        <option value="">Pilih Kategori</option>
                        <!-- <?php
                        foreach ($pelanggaran as $row) {
                          echo '<option value="'.$row->id_kategori.'">'.$row->nama_kategori.'</option>';
                        }
                        ?> -->
                      </select>
          </div>
          <div class="form-group">
          <label>Harga</label>            
            <input type="text" name="harga_tiket" id="harga_tiket">
          </div>
          <div class="form-group">            
          <label>Lokasi</label>            
            <input type="text" name="lokasi" id="lokasi">
          </div>
        <!-- <div class="col col-md-3"> -->
          <button type="submit" class="btn btn-primary">Cari</button>
        <!-- </div> -->
      </form>  
      </div> 
    <!-- </div> -->
  <!-- </div> -->
  </div>
</section>
