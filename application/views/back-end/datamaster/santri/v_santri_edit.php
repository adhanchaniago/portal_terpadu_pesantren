<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Santri 
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data Santri","Gagal Mengedit Data Santri") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/santriedit?nis=<?php if (isset($nis_lokal2)) echo $nis_lokal2; else echo $data['nis_lokal']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/santri') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">NIS</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nis_lokal" data-required="true" value="<?php echo $data['nis_lokal']; ?>" />
                <input type="hidden" class="form-control" name="nis_lokal2" data-required="true" value="<?php
                if (isset($nis_lokal2)) echo $nis_lokal2; else echo $data['nis_lokal']; ?>" />
                <?php if(isset($nis_lokal)) {
                         echo '<label style="color:red;font-size:10px">NIS ada yang sama ! NIS asal "'.$nis_lokal2.'"</label>';
                       } 
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NISN</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nisn" data-required="true"  value="<?php echo $data['nisn']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik" value="<?php echo $data['nik']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo $data['nama_lengkap']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Tempat Lahir</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="tempat_lahir" data-required="true" value="<?php echo $data['tempat_lahir']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Tanggal Lahir</label>
              <div class="col-lg-8">
              <input class="datepicker-input form-control" size="16" type="text"  data-date-format="dd-mm-yyyy" name="tgl_lahir" data-required="true" value="<?php echo tanggal($data['tgl_lahir']); ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Kelamin</label>
              <div class="col-lg-8">
                <select class="form-control"  name="jenis_kelamin" />
                  <option value="L" <?php if ($data['jenis_kelamin']=="L")  echo "selected" ?> >Laki-laki</option>
                  <option value="P" <?php if ($data['jenis_kelamin']=="P")  echo "selected" ?> >Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Email</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="email_santri" value="<?php echo $data['email_santri']; ?>" data-type="email"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hp" value="<?php echo $data['hp']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alamat Lengkap</label>
              <div class="col-lg-8">
                <textarea class="form-control"  name="alamat_lengkap" ><?php echo $data['alamat_lengkap']; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Provinsi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="provinsi" value="<?php echo $data['provinsi']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kabupaten/Kota</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kabupaten_kota" value="<?php echo $data['kabupaten_kota']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kecamatan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kecamatan" value="<?php echo $data['kecamatan']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Desa/Kelurahan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="desa_kelurahan" value="<?php echo $data['desa_kelurahan']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kode Pos</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kode_pos" value="<?php echo $data['kode_pos']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Hobi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hobi" value="<?php echo $data['hobi']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Cita-cita</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="cita_cita" value="<?php echo $data['cita_cita']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Sekolah Asal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jenis_sekolah_asal" value="<?php echo $data['jenis_sekolah_asal']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Sekolah Asal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="status_sekolah_asal" value="<?php echo $data['status_sekolah_asal']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor Peserta Ujian</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nomor_peserta_ujian" value="<?php echo $data['nomor_peserta_ujian']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jarak Ke Sekolah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jarak_ke_sekolah" value="<?php echo $data['jarak_ke_sekolah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alat Transportasi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="alat_transportasi" value="<?php echo $data['alat_transportasi']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Tempat Tinggal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="status_tempat_tinggal" value="<?php echo $data['status_tempat_tinggal']; ?>" />
              </div>
            </div>
            
          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label class="col-lg-4 control-label">No Kartu Keluarga</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="no_kk" value="<?php echo $data['no_kk']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_ayah" value="<?php echo $data['nik_ayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_ayah" value="<?php echo $data['nama_lengkap_ayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pendidikan_terakhir_ayah" value="<?php echo $data['pendidikan_terakhir_ayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpayah" value="<?php echo $data['hpayah']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_ibu"value="<?php echo $data['nik_ibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_ibu" value="<?php echo $data['nama_lengkap_ibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pendidikan_terakhir_ibu" value="<?php echo $data['pendidikan_terakhir_ibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpibu" value="<?php echo $data['hpibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Orang Tua</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="penghasilan_orang_tua" value="<?php echo $data['penghasilan_orang_tua']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_wali" value="<?php echo $data['nik_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_wali" value="<?php echo $data['nama_lengkap_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pendidikan_terakhir_wali" value="<?php echo $data['pendidikan_terakhir_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pekerjaan_wali" value="<?php echo $data['pekerjaan_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpwali" value="<?php echo $data['hpwali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="penghasilan_wali" value="<?php echo $data['penghasilan_wali']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jumlah Saudara Kandung</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jumlah_saudara_kandung" value="<?php echo $data['jumlah_saudara_kandung']; ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/santriedit?nis=<?php if (isset($nis_lokal2)) echo $nis_lokal2; else echo $data['nis_lokal']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/santri') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Santri</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>