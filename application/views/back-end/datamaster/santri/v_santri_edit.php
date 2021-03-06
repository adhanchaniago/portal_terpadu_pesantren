<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">

        Ubah Data Santri 

      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengubah Data Santri","Gagal Mengubah Data Santri") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/santriedit?nis=<?php if (isset($nis_lokal2)) echo $nis_lokal2; else echo $data['nis_lokal']; ?>" method="post"   enctype="multipart/form-data">
       <a href="<?php echo base_url('admin/datamaster/santri') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">NIS</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nis_lokal"  value="<?php echo $data['nis_lokal']; ?>" />
                <input type="hidden" class="form-control" name="nis_lokal2"  value="<?php
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
                <input type="text" class="form-control"  name="nisn"   value="<?php echo $data['nisn']; ?>" />
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
                <input type="text" class="form-control" name="nama_lengkap"  value="<?php echo $data['nama_lengkap']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Tempat Lahir</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="tempat_lahir"  value="<?php echo $data['tempat_lahir']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Tanggal Lahir</label>
              <div class="col-lg-8">
              <input class="form-control" id="lahir" size="16" type="text" name="tgl_lahir"  value="<?php echo tanggal($data['tgl_lahir']); ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Kelamin</label>
              <div class="col-lg-8">
                <select class="form-control"  name="jenis_kelamin" />
                  <option value="L" <?php if ($data['jenis_kelamin']=="L")  echo "selected" ?> >Laki-laki</option>

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
              <select class="form-control"  name="provinsi" id="provinsi" >
              <option value="" disabled <?php if ($data['provinsi']=="") echo "selected" ?>>Pilih Provinsi</option>
              <?php
                   foreach($provinsi->result_array() as $row) {
                     echo "<option value='".$row['nama_provinsi']."' ".($data['provinsi']==$row['nama_provinsi']?"selected":"").">".$row['nama_provinsi']."</option>";
                  }
              ?>
              </select>
            </div>
          </div>
          <div class="form-group">
          <label class="col-lg-4 control-label">Kabupaten/Kota</label>
          <div class="col-lg-8">
          <select class="form-control id_kota_kab"  name="kabupaten_kota"  id="kabupaten_kota" >
          <option value="" disabled <?php if ($data['kabupaten_kota']=="") echo "selected" ?>>Pilih Kabupaten/Kota</option>
            <?php
                 foreach($kabupaten->result_array() as $row) {
                   echo "<option value='".$row['nama_kota_kab']."' ".($data['kabupaten_kota']==$row['nama_kota_kab']?"selected":"").">".$row['nama_kota_kab']."</option>";
                }
            ?>

            </select>
          </div>
        </div>
        <div class="form-group">
        <label class="col-lg-4 control-label">Kecamatan</label>
        <div class="col-lg-8">
        <select class="form-control id_kota_kab"  name="kecamatan"  id="kecamatan"  >
        <option value="" disabled  <?php if ($data['kecamatan']=="") echo "selected" ?>>Pilih Kecamatan</option>
          <?php
               foreach($kecamatan->result_array() as $row) {
                 echo "<option value='".$row['nama_kecamatan']."' ".($data['kecamatan']==$row['nama_kecamatan']?"selected":"").">".$row['nama_kecamatan']."</option>";
              }
          ?>
          </select>
        </div>
      </div>
      <div class="form-group">
      <label class="col-lg-4 control-label">Desa/Kelurahan</label>
      <div class="col-lg-8">
        <select class="form-control"  name="desa_kelurahan" id="desa_kelurahan" >
        <option value="" disabled <?php if ($data['desa_kelurahan']=="") echo "selected" ?>>Pilih Desa/Kelurahan</option>
        <?php
             foreach($desa->result_array() as $row) {
               echo "<option value='".$row['nama_kel_desa']."' ".($data['desa_kelurahan']==$row['nama_kel_desa']?"selected":"").">".$row['nama_kel_desa']."</option>";
            }
        ?>
        </select>
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
                <select class="form-control"  name="jarak_ke_sekolah" id="jarak_ke_sekolah" data-required="">
                  <option value="Kurang dari 1 Km" <?php if ($data['jarak_ke_sekolah']=='Kurang dari 1 Km')  echo "selected" ?> >Kurang dari 1 Km</option>
                  <option value="1 - 3 Km" <?php if ($data['jarak_ke_sekolah']=='1 - 3 Km')  echo "selected" ?> >1 - 3 Km</option>
                  <option value="3 - 5 Km" <?php if ($data['jarak_ke_sekolah']=='3 - 5 Km')  echo "selected" ?> >3 - 5 Km</option>
                  <option value="5 - 10 Km" <?php if ($data['jarak_ke_sekolah']=='5 - 10 Km')  echo "selected" ?> >5 - 10 Km</option>
                  <option value="Lebih dari 10 Km" <?php if ($data['jarak_ke_sekolah']=='Lebih dari 10 Km')  echo "selected" ?> >Lebih dari 10 Km</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alat Transportasi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="alat_transportasi">
                <option value="" disabled <?php if ($data['alat_transportasi']=="") echo "selected" ?> >Pilih Alat Transportasi</option>
                <?php
                     foreach($transportasi->result_array() as $row) {
                       echo "<option value='".$row['nama_alat_transportasi']."' ".($data['alat_transportasi']==$row['nama_alat_transportasi']?"selected":"").">".$row['nama_alat_transportasi']."</option>";
                    }
                ?>
                </select>
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
                <select type="text" class="form-control"  name="pendidikan_terakhir_ayah">
                <option value="" disabled <?php if ($data['pendidikan_terakhir_ayah']=="") echo "selected" ?>>Pilih Pendidikan</option>
                <?php
                     foreach($pendidikan->result_array() as $row) {
                       echo "<option value='".$row['nama_pendidikan']."' ".($data['pendidikan_terakhir_ayah']==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
                    }
                ?>
                </select>
              </div>
            </div>
            <div class="form-group">
            <label class="col-lg-4 control-label">Pekerjaan Ayah</label>
            <div class="col-lg-8">
              <select class="form-control"  name="pekerjaan_ayah">
              <option value="" disabled <?php if ($data['pekerjaan_ayah']=="") echo "selected" ?>>Pilih  Pekerjaan</option>
              <?php
                   foreach($pekerjaan->result_array() as $row) {
                     echo "<option value='".$row['nama_pekerjaan']."' ".($data['pekerjaan_ayah']==$row['nama_pekerjaan']?"selected":"").">".$row['nama_pekerjaan']."</option>";
                  }
              ?>
              </select>
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
              <select  class="form-control"  name="pendidikan_terakhir_ibu">
              <option value="" disabled <?php if ($data['pendidikan_terakhir_ibu']=="") echo "selected" ?>>Pilih Pendidikan</option>
              <?php
                   foreach($pendidikan->result_array() as $row) {
                     echo "<option value='".$row['nama_pendidikan']."' ".($data['pendidikan_terakhir_ibu']==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
                  }
              ?>
              </select>
            </div>
          </div>
          <div class="form-group">
          <label class="col-lg-4 control-label">Pekerjaan Ibu</label>
          <div class="col-lg-8">
            <select class="form-control"  name="pekerjaan_ibu">
            <option value="" disabled <?php if ($data['pekerjaan_ibu']=="") echo "selected" ?>>Pilih Pekerjaan</option>
            <?php
                 foreach($pekerjaan->result_array() as $row) {
                   echo "<option value='".$row['nama_pekerjaan']."' ".($data['pekerjaan_ibu']==$row['nama_pekerjaan']?"selected":"").">".$row['nama_pekerjaan']."</option>";
                }
            ?>
            </select>
          </div>
        </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpibu" value="<?php echo $data['hpibu']; ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Orang Tua (Rp)</label>
              <div class="col-lg-8">
                <select class="form-control"  name="penghasilan_orang_tua" id="penghasilan_orang_tua" data-required="">
                  <option value="Kurang dari 1juta" <?php if ($data['penghasilan_orang_tua']=='Kurang dari 1juta')  echo "selected" ?> >Kurang dari 1juta</option>
                  <option value="1 - 2 juta" <?php if ($data['penghasilan_orang_tua']=='1 - 2 juta')  echo "selected" ?> >1 - 2 juta</option>
                  <option value="2 - 5 juta" <?php if ($data['penghasilan_orang_tua']=='2 - 5 juta')  echo "selected" ?> >2 - 5 juta</option>
                  <option value="5 - 10 juta" <?php if ($data['penghasilan_orang_tua']=='5 - 10 juta')  echo "selected" ?> >5 - 10 juta</option>
                  <option value="Lebih dari 10 juta" <?php if ($data['penghasilan_orang_tua']=='Lebih dari 10 juta')  echo "selected" ?> >Lebih dari 10 juta</option>
                </select>
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
                <select class="form-control"  name="pendidikan_terakhir_wali">
                <option value="" disabled <?php if ($data['pendidikan_terakhir_wali']=="") echo "selected" ?>>Pilih Pendidikan</option>
                <?php
                     foreach($pendidikan->result_array() as $row) {
                       echo "<option value='".$row['nama_pendidikan']."' ".($data['pendidikan_terakhir_wali']==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
                    }
                ?>
                </select>
              </div>
            </div>
            <div class="form-group">
            <label class="col-lg-4 control-label">Pekerjaan Wali</label>
            <div class="col-lg-8">
              <select class="form-control"  name="pekerjaan_wali">
              <option value="" disabled <?php if ($data['pekerjaan_wali']=="") echo "selected" ?>>Pilih Pekerjaan</option>
              <?php
                   foreach($pekerjaan->result_array() as $row) {
                     echo "<option value='".$row['nama_pekerjaan']."' ".($data['pekerjaan_wali']==$row['nama_pekerjaan']?"selected":"").">".$row['nama_pekerjaan']."</option>";
                  }
              ?>
              </select>

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
            <div class="form-group">
									<label class="col-sm-4 control-label">Kelas Pondokan</label>
									<div class="col-sm-8">
										<select class="form-control m-b" name="pondokan" id="pondokan" >
											<option value="" selected disabled>.: Pilih Kelas Pondokan:.</option>
											<?php
												foreach($pondokan->result_array() as $row){
													echo "<option value='".$row['pondokan']."' ".($data['pondokan']==$row['pondokan']?"selected":"").">".$row['pondokan']." </option>";
												}
											?>
                  </select>
                </div>
              </div>
            <div class="form-group">
									<label class="col-sm-4 control-label">Kelas Afilasi</label>
									<div class="col-sm-8">
										<select class="form-control m-b" name="kelas" id="kelas" >
											<option value="" selected disabled>.: Pilih Kelas Afilasi:.</option>
											<?php
												foreach($jenjang->result_array() as $row){
													echo "<option value='".$row['jenjang']."'".(($row['jenjang']==$data['kelas'])?"selected":"").">".$row['jenjang']." </option>";
												}
											?>
                  </select>
                </div>
              </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Unggah Foto</label>
                <div class="col-sm-8">
                  <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="foto">
                </div>
            </div>
          <div class="form-group">
					  	<label class="col-sm-4 control-label"></label>
              <div class="col-sm-8">
                <?php if ($data['foto']=='') { ?>
                  <img src="<?php echo base_url()."assets/images/foto/"; ?>default.png" class="thumbnail" width="200px"/>
                <?php } else { ?>
                  <img src="<?php echo base_url()."assets/images/foto/".$data['foto']; ?>" class="thumbnail" width="200px"/>
                <?php } ?>
              </div>
			  	</div>

          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/santriedit?nis=<?php if (isset($nis_lokal2)) echo $nis_lokal2; else echo $data['nis_lokal']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Atur Ulang</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/santri') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Santri</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
