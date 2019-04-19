<div class="container mt-5">
  <div class="card">
    <h5 class="card-header">Hasil Perhitungan</h5>
    <div class="card-body">
      <table class="table table-hover">
        <tr>
          <td>SKS Keseluruhan</td>
          <td>IPK</td>
        </tr>
         <tr>
           <td><?= $data['total_sks']; ?></td>
           <td><?= number_format($data['akhir'],2); ?></td>
         </tr>
      </table>
      <br>
      <h3>Prakiraan IPK Anda <?= number_format($data['akhir'],2); ?></h3>
      <a href="<?= BASEURL; ?>/prakiraan_ipk"><button type="button" name="button" class="btn btn-warning">Back</button></a><br>
    </div>
  </div>

</div>
