<div class="container mt-5">
  <div class="card">
    <h5 class="card-header">Hasil Perhitungan</h5>
    <div class="card-body">
      <table class="table table-hover">
        <tr>
          <td>SKS Mata Kuliah</td>
          <td>Nilai Mata Kuliah</td>
          <td>Hasil</td>
        </tr>
        <?php

        if ($data['jumlah'][0]==="" || !is_numeric($data['jenis'][0])) {
          echo "<div class='alert alert-danger' role='alert'>
                  Masukan data yang benar untuk diproses !
                </div>";
        }else{


          // var_dump($data['jenis']);
          // echo "<br>";
          // var_dump($data['jumlah']);
          $i = 0;

          foreach ($data['jenis'] as $key => $j) {

            $i++;
            // $hasil[$i] = $j * $data['jumlah'][$key];
            //echo "<tr>" . $j . " x " . $jumlah[$key] . "= ". $hasil[$i] ."</tr>";
            if ($data['jumlah'][$key]=='A' || $data['jumlah'][$key]=='a') {
              $nilai = 4;
            }elseif ($data['jumlah'][$key]=='B' || $data['jumlah'][$key]=='b') {
              $nilai = 3;
            }elseif ($data['jumlah'][$key]=='C' || $data['jumlah'][$key]=='c') {
              $nilai = 2;
            }elseif ($data['jumlah'][$key]=='D' || $data['jumlah'][$key]=='d') {
              $nilai = 1;
            }elseif ($data['jumlah'][$key]=='E' || $data['jumlah'][$key]=='e') {
              $nilai = 0;
            }elseif ($data['jumlah'][$key]=='T' || $data['jumlah'][$key]=='t') {
              $nilai = 0;
            }else {
              $nilai = $data['jumlah'][$key];
            }

            $hasil[$i] = $j * $nilai;
            echo "<tr>
                    <td>".$j."</td>
                    <td>".$nilai."</td>
                    <td>".$hasil[$i]."</td>
                  </tr>";
          }
          $jumlah = array_sum($hasil);
          $jumlah_sks = array_sum($data['jenis']);
          $akhir = $jumlah/$jumlah_sks;




         ?>
         <tr>
           <td>Total Nilai</td>
           <td></td>
           <td><?= $jumlah; ?></td>
         </tr>
      </table>
      <br>
      <h3>IPK Anda <?= number_format($akhir,2) ?></h3>
      <p>Anda akan mendapatkan
        <?php

          if ($akhir >= 3) {
            echo "24 SKS";
          }elseif ($akhir < 3 && $akhir >= 2.5) {
            echo "21 SKS";
          }elseif ($ahir < 2.5 && $akhir >=2) {
            echo "18 SKS";
          }elseif($akhir < 2 && $akhir >=1.5) {
            echo "15 SKS";
          }else {
            echo "12 SKS";
          }
        }
        ?>
        di semester berikutnya
      </p>
      <a href="<?= BASEURL; ?>"><button type="button" name="button" class="btn btn-warning">Back</button></a><br>
    </div>
  </div>

</div>
