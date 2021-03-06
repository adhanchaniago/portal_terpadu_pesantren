<section class="vbox">

  <section class="hbox stretch">
  <div class="col-lg-2">

  </div>
  <aside class="col-lg-6">
    <section class="vbox">
    <div class="wrapper" style="margin-top:60px">
      <div class="container aside-xl bg-light" style="border-radius:10px">
        <section class="m-b-lg">
          <div class="text-center">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
        </div>
          <a class="navbar-brand block" href="index.html">PESANTREN DARUL ILMI</a>
          <header class="wrapper text-center">
            <small>Masuk dengan Email untuk Melanjutkan Pendaftaran</small>
          </header>
          <?php pesan_get('msg',"Sukses","Email Tidak Terdaftar","Email dan Kata Sandi tidak cocok") ?>
          <?php pesan_get('akun',"","Akun belum diaktifkan") ?>
          <form  action="<?php echo base_url()?>santri/login/ceklogin" method="post" data-validate="parsley">
            <div class="list-group">
              <div class="list-group-item">
                <input name="email" data-required="true" type="email" data-type="email" placeholder="Email" value="<?php echo set_value('email_pendaftar'); ?>" class="form-control no-border">
              </div>
              <div class="list-group-item">
               <input name="sandi" data-required="true" type="password" placeholder="Kata Sandi" value="<?php echo set_value('kata_sandi'); ?>" class="form-control no-border" id="pwd">
             </div>
           </div>
          <button type="submit" class="btn btn-success btn-lg btn-block ">Masuk</button>
        </form>
        <small>Belum Punya Akun?<a class="text-primary" href="<?php echo base_url('santri/register/') ?>"> <strong>Halaman Pendaftaran</strong></a></small>
        <div class="line line-dashed"></div>
        <footer id="footer">
          <p class="text-center text-muted"><small>&copy;2018</small></p>
        </footer>
      </section>
    </div>


  </div>
</section>


</aside>
</section>

</section>

</section>
</section>
