<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url().'welcome'?>">Project Imam Nawawi</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        
        <ul class="nav navbar-nav">

        </ul>
      <form action="<?= base_url().'Profil/cari' ?>" method="POST" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input name="cari" type="text" class="form-control" placeholder="Cari">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form> 
      </div>
    </div>
  </nav>

<!-- ?php 
echo "<pre>";
print_r($profil);
?> -->
<div class="container">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <form action="" method="POST" role="form" >
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-title">Mahasiswa</h2>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>NIM</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Panggilan</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Hobi</th>
                  <th>Pilih</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $i=1;
                foreach ($profil as $key):

                  ?>
                <tr>
                <td><?= $i ?></td>
                  <td><?= $key->nim ?></td>
                  <td><?= $key->nama ?></td>
                  <td><?= $key->panggilan ?></td>
                  <td><?= $key->tgl_lahir ?></td>
                  <td><?= $key->alamat ?></td>
                  <td><?= $key->hobi ?></td>
                  <td>
                    <div class="">
                      <a href="<?= base_url().'Profil/index' ?>" name="btn-add"><i class="fa fa-plus" aria-hidden="true"></i></a>
                      <a href="<?= base_url().'Profil/update/'.$key->nim ?>" name="btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="<?= base_url().'Profil/delete/'.$key->nim ?>" name="btn-hapus"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                  </td>
                </tr>
                <?php 
                $i++;
                endforeach;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </form>
  </div>

</div><!-- /.container -->
</body>
</html>
