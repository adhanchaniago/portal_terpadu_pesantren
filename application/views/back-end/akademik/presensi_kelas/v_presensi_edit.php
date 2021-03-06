<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="row m-b-md">
				<div class="col-sm-6">
					<h3 class="m-b-xs text-black">Presensi</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-default">
						<header class="panel-heading">
							<h4 class="font-bold">Edit Data Presensi Kelas Afilasi</h4>
						</header>
						<div class="panel-body">
           					 <?php pesan_get('msg',"Berhasil Mengedit Kelas Belajar","Gagal Mengedit Kelas Belajar") ?>
							<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/santriakd/editkelasbelajar?id=<?php echo $data['id_kelas_belajar'] ?>" method="post">
							<input type="hidden" class="form-control" name="id_kelas_belajar" data-required="true" value="<?php echo $data['id_kelas_belajar'] ?>" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama Kelas</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama_kelas_belajar"   id="nama_kelas_belajar" data-required="true" value="<?php echo $data['nama_kelas_belajar'] ?>">
									</div>
								</div>
               				 	<div class="form-group">
									<label class="col-sm-3 control-label">Wali Kelas</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="nip_guru"  id="nip_guru">
										<?php
											foreach($guru->result_array() as $row){
												echo "<option value='".$row['nip_guru']."' ".($row['nip_guru']==$data['nip_guru']? "selected":"").">".$row['nama_lengkap']." (".$row['nip_guru'].")</option>";
											}
										?>
										</select>
									</div>
								</div>  
								<div class="form-group">
									<label class="col-sm-3 control-label">Ruang Kelas</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="kd_kelas" id="kd_kelas">
										<?php
											foreach($ruangkelas->result_array() as $row){
												echo "<option value='".$row['kd_kelas']."' ".($row['kd_kelas']==$data['kd_kelas']? "selected":"").">".$row['nama_kelas']." (Tingkat ".$row['tingkat_kelas'].")</option>";
											}
										?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Jenjang</label>
									<div class="col-sm-6">
										<select class="form-control m-b" name="jenjang" id="jenjang" data-required="true">
											<option value="" selected disabled>.: Pilih Jenjang:.</option>
											<?php
												foreach($jenjang->result_array() as $row){
													echo "<option value='".$row['jenjang']."'".($row['jenjang']==$data['jenjang']?"selected":"").">".$row['jenjang']." </option>";
												}
											?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tingkatan</label>
									<div class="col-sm-6">
										<select class="form-control m-b" name="tingkatan" id="tingkatan" data-required="true">
											<option value="" selected disabled>.: Pilih Tingkatan:.</option>
											<?php
												foreach($tingkatan->result_array() as $row){
													echo "<option value='".$row['tingkat']."'".($row['tingkat']==$data['tingkat']?"selected":"").">".$row['tingkat']." </option>";
												}
											?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Status Kelas</label>
									<div class="col-sm-6">
										<select name="status_kelas" id="status_kelas" class="form-control  m-b">
											<option value="Aktif" <?php echo ("Aktif"==$data['kd_kelas']? "selected":"") ?>>Aktif</option>
											<option value="Tidak Aktif" <?php echo ("Tidak Aktif"==$data['status_kelas']? "selected":"") ?> >Tidak Aktif</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tahun Ajaran</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="id_tahun" id="id_tahun">
											<?php
												foreach($tahunajaran->result_array() as $row){
													echo "<option value='".$row['id_tahun']."' ".($row['id_tahun']==$data['id_tahun']? "selected":"").">".$row['tahun_ajaran']."</option>";
												}
											?>
										</select>
									</div>
								</div>
						</div>
						<footer class="panel-footer text-right bg-light lter">
							<button type="submit" class="btn btn-success btn-s-xs">
								<i class="fa fa-save"></i> Simpan</button>
							&nbsp
							<a href="<?php echo base_url('admin/santriakd/datakelasbelajar') ?>" class="btn btn-default btn-s-xs">
								<i class="fa fa-list"></i> List Kelas Belajar</a>
							</form>
						</footer>

				</div>
			</div>
			</section>
		</section>
	</section>
</section>

</section>
