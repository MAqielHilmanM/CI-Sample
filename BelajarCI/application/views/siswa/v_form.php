<?php
  if (@$form_edit) {
    $title = "Edit Data Siswa";

    //URL Jika Edit Data
    $url = "siswa/do_edit/" . $result->id_kelas;
  } else {
    $title = "Tambah Data Siswa";

    //URL Jika Tambah Data Kelas
    $url = "siswa/do_add/";
  }
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?><small>SMK Negeri 4 Bandung</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Data</a></li>
      <li class="active"><?php echo $title ?></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="box box-primary">
        <form action="<?php echo site_url($url) ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="nis">NIS</label>
              <input type="text" name="nis" class="form-control" id="nis"
              placeholder="NIS" value="<?php echo @$result->nis ?>">
            </div>
            <div class="form-group">
              <label for="nama_siswa">Nama Siswa</label>
              <input type="text" name="nama" class="form-control" id="nama"
              placeholder="Nama Siswa" value="<?php echo @$result->nama ?>">
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <br>
              <p><input type="radio" name="jk" id="jk" value="L" <?php echo @$result->jk == "L" ? 'checked':''; ?>> Laki-laki
              <input type="radio" name="jk" id="jk" value="P" <?php echo @$result->jk == "P" ? 'checked': ''; ?>> Perempuan</p>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea type="text" name="alamat" class="form-control" id="alamat"
              placeholder="Alamat" ><?php echo @$result->alamat ?></textarea>
            </div>
            <div class="form-group">
              <label for="notelp">No Telepon</label>
              <input type="text" name="notelp" class="form-control" id="notelp"
              placeholder="No Telepon" value="<?php echo @$result->notelp ?>">
            </div>
            <div class="form-group">
              <label for="agama">Agama</label>
              <?php
                $dropdown = array (
                  "Islam"=>"Islam",
                  "Kristen"=>"Kristen",
                  "Hindu"=>"Hindu",
                  "Budha"=>"Budha",
                  "Khong Hu Chu"=>"Khong Hu Cu"
              );
              echo form_dropdown("agama", $dropdown, @$result->agama, 'class="form-control" id="agama"');
              ?>
            </div>
            <div class="form-group">
              <label for="kelas">Kelas</label>
              <select class="form-control" name="id_kelas">
                <option disabled selected>[Pilih kelas]</option>
                  <?php foreach ($resultkelas as $data) { ?>
                    <option value="<?php echo $data->id_kelas ?>" <?php echo @$result->id_kelas == $data->id_kelas ? 'selected':''; ?>>
                      <?php echo $data->nama_kelas ?>
                    </option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
