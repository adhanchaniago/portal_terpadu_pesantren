<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
        <h3 class="m-b-none">Pelajaran</h3>
      </div>
      <section class="panel panel-default">
        <header class="panel-heading">
          Ubah Data Pelajaran
        </header>
        <div class="panel-body">
          <?php pesan_get('msg',"Berhasil Mengubah Data Pelajaran","Gagal Mengubah Data Pelajaran") ?>
          <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url('admin/datamaster/pelajaranedit?id_pelajaran='.$data['id_pelajaran'].'') ?>"
            method="post">
            <a href="<?php echo base_url('admin/datamaster/pelajaran') ?>" style="color:#3b994a;margin-left:10px">
              <i class="fa fa-chevron-left"></i> Kembali</a>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
  									<label class="col-lg-4 control-label">ID Pelajaran</label>
  									<div class="col-lg-8">
  										<input type="text" class="form-control" name="id_pelajaran" data-required="true" value="<?php echo $data['id_pelajaran']; ?>" readonly/>
  									</div>
  								</div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Guru Pengajar</label>
  									<div class="col-lg-8">
  										<select class="form-control"  name="nip_guru" id="nip_guru" data-required="true">
  		                  <option value="<?php $data['nip_guru']?>" disabled <?php if (set_value('nip_guru')==$data['nip_guru']?"selected":"") echo "selected" ?>><?php echo "Guru Pengajar Sebelumnya : ".$data['nip_guru']." - ".$data['nama_lengkap']?></option>
  		                  <?php
  		                    foreach($nip_guru->result_array() as $row) {
  		                      echo "<option value='".$row['nip_guru']."' ".(set_value('nip_guru')==$row['nip_guru']?"selected":"").">".$row['nip_guru']." - ".$row['nama_lengkap']."</option>";
  		                    }
  		                  ?>
  		                </select>
  									</div>
  								</div>
  								<div class="form-group">
  									<label class="col-lg-4 control-label">Mata Pelajaran</label>
  									<div class="col-lg-8">
  										<select class="form-control"  name="id_mata_pelajaran" id="id_mata_pelajaran" data-required="true">
  		                  <option value="<?php $data['id_mata_pelajaran']?>" disabled <?php if (set_value('id_mata_pelajaran')==$data['id_mata_pelajaran']?"selected":"") echo "selected" ?>><?php echo "Mata Pelajaran Sebelumnya : ".$data['id_mata_pelajaran']." - ".$data['nama_mata_pelajaran']?></option>
  		                  <?php
  		                    foreach($id_mata_pelajaran->result_array() as $row) {
  		                      echo "<option value='".$row['id_mata_pelajaran']."' ".(set_value('id_mata_pelajaran')==$row['id_mata_pelajaran']?"selected":"").">".$row['id_mata_pelajaran']." - ".$row['nama_mata_pelajaran']."</option>";
  		                    }
  		                  ?>
  		                </select>
  									</div>
  								</div>
                </div>
              </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success btn-s-xs">
                <i class="fa fa-save"></i> Simpan</button>
                &nbsp
                <a href="<?php echo base_url('admin/datamaster/pelajaranedit?id_pelajaran='.$data['id_pelajaran'].'') ?>"
                  class="btn btn-default btn-s-xs">
                  <i class="fa fa-refresh"></i> Atur Ulang</a>
                  &nbsp
                  <a href="<?php echo base_url('admin/datamaster/pelajaran') ?>" class="btn btn-default btn-s-xs">
                    <i class="fa fa-list"></i> Daftar Pelajaran</a>
                  </footer>
                </form>


              </div>
            </section>
          </section>
        </section>

      </section>
