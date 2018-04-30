<?php
  if (@$form_edit) {
    $title = "Edit Data Kelas";

    //URL Jika Edit Data
    $url = "kelas/do_edit/" . $result->id_kelas;
  } else {
    $title = "Tambah Data Kelas";

    //URL Jika Tambah Data Kelas
    $url = "kelas/do_add/";
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
              <label for="nama_kelas">Nama Kelas</label>
              <input type="text" name="nama_kelas" class="form-control" id="nama_kelas"
              placeholder="Nama Kelas" value="<?php echo @$result->nama_kelas ?>">
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <?php
                $dropdown = array (
                  "Audio Video"=>"Audio Video",
                  "Teknik Instalasi Tenaga Listrik"=>"Teknik Instalasi Tenaga Listrik",
                  "Teknik otomasi Industri"=>"Teknik otomasi Industri",
                  "Teknik Komputer Jaringan"=>"Teknik Komputer Jaringan",
                  "Teknik Rekayasa Perangkat Lunak"=>"Teknik Rekayasa Perangkat Lunak",
                  "Multimedia"=>"Multimedia"
              );
              echo form_dropdown("jurusan", $dropdown, @$result->jurusan, 'class="form-control" id="jurusan"');
              ?>
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
