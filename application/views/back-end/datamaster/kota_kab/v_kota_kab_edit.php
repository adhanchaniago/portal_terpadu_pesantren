<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kota dan Kabupaten Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Ubah Data Kota dan Kabupaten Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengubah Data Kota/Kabupaten","Gagal Mengubah Data Kota/Kabupaten") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kota_kabedit?id_kota_kab=<?php echo $data['id_kota_kab']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/kota_kab') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kota/Kabupaten</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_kota_kab" data-required="true" value="<?php echo $data['nama_kota_kab']; ?>" />
                <input type="hidden" class="form-control" name="id_kota_kab" data-required="true" value="<?php echo $data['id_kota_kab']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="id_provinsi"/>
                <?php foreach ($dataprovinsi->result_array() as $provinsi) {?>
                <option value= "<?php echo $provinsi['id_provinsi']?>" <?php if ($provinsi['id_provinsi']==$data['id_provinsi'])  echo "selected" ?>> <?php echo $provinsi['nama_provinsi']?> </option>
                <?php }?>
              </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/kota_kabedit?id_kota_kab=<?php echo $data['id_kota_kab']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Atur Ulang</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/kota_kab') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Data Kota dan Kabupaten</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
