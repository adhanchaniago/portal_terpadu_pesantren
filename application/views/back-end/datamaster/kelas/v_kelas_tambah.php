<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Kelas</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Tambah Data Kelas
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambahkan Kelas","Gagal Menambahkan Kelas") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kelastambah"
					method="post">
						<a href="<?php echo base_url('admin/datamaster/kelas') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_kelas" data-required="true" value="<?php echo set_value('nama_kelas'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tingkat Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tingkat_kelas" data-required="true" value="<?php echo set_value('tingkat_kelas'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kapasitas</label>
									<div class="col-lg-8">
										<input type="number" class="form-control" name="kapasitas" data-required="true" value="<?php echo set_value('kapasitas'); ?>"
										/>
									</div>
								</div>
						</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/kelas') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Kelas</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
