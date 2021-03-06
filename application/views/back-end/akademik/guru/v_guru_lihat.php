<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Guru</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Lihat Guru
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambahkan Guru","Gagal Menambahkan Guru") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/santriakd/gurutambah"
					method="post">
						<a href="<?php echo base_url('admin/santriakd/guru') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">NIP</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nip_guru" data-required="true" value="<?php echo $data['nip_guru']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo $data['nama_lengkap']; ?>"
										readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">NIK</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nik"  value="<?php echo $data['nik']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tempat Lahir</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tempat_lahir" data-required="true" value="<?php echo $data['tempat_lahir']; ?>"
										readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tanggal Lahir</label>
									<div class="col-lg-8">
										<input class="form-control" size="16" type="text" readonly name="tgl_lahir" data-required="true" value="<?php echo tanggal($data['tgl_lahir']); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Jenis Kelamin</label>
									<div class="col-lg-8">
										<select class="form-control" name="jenis_kelamin" readonly/>
										<option value="L" <?php if ($data[ 'jenis_kelamin']=="L" ) echo "selected" ?> >Laki-laki</option>
										<option value="P" <?php if ($data[ 'jenis_kelamin']=="P" ) echo "selected" ?> >Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Email</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="email_guru" value="<?php echo $data['email_guru']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nomor HP</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="hp_guru" value="<?php echo $data['hp_guru']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Pendidikan Terakhir</label>
									<div class="col-lg-8">
									<input type="text" class="form-control" name="pendidikan_terakhir" value="<?php echo $data['pendidikan_terakhir']; ?>" readonly />

									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama Perguruan Tinggi</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="perguruan_tinggi" value="<?php echo $data['perguruan_tinggi']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Bidang Ilmu/Keahlian</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="bidang_ilmu" value="<?php echo $data['bidang_ilmu']; ?>" readonly />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tahun Masuk</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tahun_masuk" value="<?php echo $data['tahun_masuk']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tahun Lulus</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tahun_lulus" value="<?php echo $data['tahun_lulus']; ?>" readonly/>
									</div>
								</div>

							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Alamat Lengkap</label>
									<div class="col-lg-8">
										<textarea class="form-control" name="alamat_lengkap" readonly><?php echo $data['alamat_lengkap']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Provinsi</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="provinsi" value="<?php echo $data['provinsi']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kabupaten/Kota</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kabupaten_kota" value="<?php echo $data['kabupaten_kota']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kecamatan</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kecamatan" value="<?php echo $data['kecamatan']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Desa/Kelurahan</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="desa_kelurahan" value="<?php echo $data['desa_kelurahan']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kode Pos</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kode_pos" value="<?php echo $data['kode_pos']; ?>" readonly/>
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
					<a href="<?php echo base_url('admin/santriakd/guruedit?nip='.$data['nip_guru']) ?>" class="btn btn-success btn-s-xs">
						<i class="fa fa-edit"></i> Edit </a>
					&nbsp
					<a href="<?php echo base_url('admin/santriakd/guru') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> List Guru</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
