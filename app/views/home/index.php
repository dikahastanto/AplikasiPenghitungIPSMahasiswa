<div class="container mt-5">
  <div class="card">
    <h5 class="card-header">Hitung IPS</h5>
    <div class="card-body">
      <a href='#' onclick="additem(); return false"><button type="button" class="btn btn-info">Add</button></a>
      <form method="post" action="<?= BASEURL ?>home/hitung_ips" class="mt-4">

        <table class="table table-condensed">
                      <thead>
                          <tr>
                              <th>SKS Mata Kuliah</th>
                              <th>Nilai Bobot Mata Kuliah</th>
                              <th width="80px"></th>
                          </tr>
                      </thead>
                      <!--elemet sebagai target append-->
                      <tbody id="itemlist">
                          <tr>
                              <td><input placeholder="SKS Mata Kuliah 1" name="jenis_input[0]" class="form-control input-block-level" /></td>
                              <td><input placeholder="Nilai Mata Kuliah 1" name="jumlah_input[0]" class="form-control input-block-level" /></td>
                              <td></td>
                          </tr>
                      </tbody>
                  </table>
                  <input type="submit" name="ok" value="Cek IPK" class="btn btn-primary mt-2">
      </form>
      <p>Memudahkan Anda menghitung IPK maupun IPS atau prakiraan IPS smester ini.</p>
    </div>
  </div>
</div>
