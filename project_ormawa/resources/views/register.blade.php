<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Daftar - ORMAWA UNRI</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="/public/css/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/public/css/style.css">
  <link rel="stylesheet" href="/public/css/components.css">
</head>

<body class="sidebar-gone">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../image/logo-unri.png" alt="logo" width="100" class="shadow-light">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="/site/simpan-daftar">
                  <input type="hidden" value="YaixZI3CMjEa01ZRjniaTDMQYWFpUKLF7GeQQIU2I2MX5ugg25dLV2LhGRfkG-MURV1WCSx94IaUVqEjqE9iCA==" name="_csrf">


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nama Ketua Lembaga</label>
                      <input id="first_name" required="true" type="text" class="form-control" name="nama" autofocus="">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Nama Lembaga</label>
                      <input id="last_name" required="true" type="text" class="form-control" name="nama_ukm">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Nim</label>
                      <input id="first_name" required="true" type="text" class="form-control" name="nim" autofocus="">
                    </div>
                    <div class="form-group col-6">
                      <label>Dosen Pembina</label>
                      <select name="dosen_id" required="true" class="form-control selectric">
                        <option>-- Pilih Dosen Pembina --</option>
                       <option value="7">Eko Saputra</option><option value="8">Dosen</option><option value="9">Yessi Aknovia</option><option value="12">dospem3</option><option value="13">Rezki Nasrullah, S.Kom</option><option value="14">Dr. Awitdrus, M.Si</option><option value="15">Dostes1</option>                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="no_handphone">No Handphone</label>
                      <input id="no_handphone" required="true" type="text" class="form-control" name="no_handphone" autofocus="">
                    </div>
                    <div class="form-group col-6">
                      <label for="alamat">Alamat</label>
                      <input id="alamat" required="true" type="text" class="form-control" name="alamat">
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">Username</label>
                      <input id="first_name" required="true" type="text" class="form-control" name="username" autofocus="">
                    </div>
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" required="true" type="email" class="form-control" name="email">
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" required="true" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Ulangi Password</label>
                      <input id="password2" required="true" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Lanjut Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright © Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../theme/stisla-master/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../theme/stisla-master/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="../theme/stisla-master/assets/js/scripts.js"></script>
  <script src="../theme/stisla-master/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../theme/stisla-master/assets/js/page/auth-register.js"></script>


</body></html>
