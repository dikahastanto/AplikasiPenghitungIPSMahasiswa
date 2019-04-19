<div class="container mt-5">
  <div class="card">
    <h5 class="card-header">Hitung IPK</h5>
    <div class="card-body">
      <h6>Gunakan . (titik) untuk menggantikan , (koma)</h6>
      <form method="post" action="<?= BASEURL ?>prakiraan_ipk/hitung_ipk" class="mt-4">

        <div class="row">
          <div class="col-md-6">
            <input required type="text" name="all_sks" class="form-control" placeholder="SKS Keseluruhan"><br>
          </div>
          <div class="col-md-6">
            <input type="text" name="ipk_now" class="form-control" placeholder="IPK Smester Lalu">
          </div>
        </div>
        <br>
        <p>Masukan SKS smester ini dan prakiraan ips smester ini</p>
        <div class="row">
          <div class="col-md-6">
            <input type="text" name="sks_now" class="form-control" placeholder="SKS Saat Ini"><br>
          </div>
          <div class="col-md-6">
            <input type="text" name="ips_now" class="form-control" placeholder="IPK Sampai Saat ini">
          </div>
        </div>



        <input type="submit" name="ok" value="Cek IPK" class="btn btn-primary mt-2">
      </form>
      <p>Memudahkan Anda menghitung IPK kesuluruhan berdasarkan prakiraan IPS smester ini.</p>
    </div>
  </div>
</div>
