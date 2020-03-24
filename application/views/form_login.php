<body class="bg-gradient-primary">

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-lg-7">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">From Login</h1>
              </div>

              <?= $this->session->flashdata('pesan'); ?>

              <form class="user" method="post" action="<?= base_url('auth/login'); ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username Anda.." autocomplete="on">
                  <?= form_error('username','<small class="text-danger ml-3">','</small>'); ?>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password Anda.." autocomplete="on" >
                  <?= form_error('password','<small class="text-danger ml-3">','</small>'); ?>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
              </form>

              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('registrasi/index'); ?>">Belum punya Akun ? Daftar !</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
