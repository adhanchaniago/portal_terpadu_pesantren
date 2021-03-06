<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Guru</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Daftar Guru
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Guru","Gagal Menghapus Data Guru") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/gurutambah" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="135px">Aksi</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jenis Kelamin</th>
              <th width="90px">Berkas</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/gurulihat?nip='.$row['nip_guru'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
                      <a href='".base_url('admin/datamaster/guruedit?nip='.$row['nip_guru'].'')."' class='btn btn-warning btn-xs' title='Ubah'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['nip_guru']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nip_guru']."</td>
                      <td>".($row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan")."</td>
                      <td><a href='".base_url('admin/datamaster/guruberkas?nip='.$row['nip_guru'].'')."' class='btn btn-success btn-xs' title='Berkas Guru'><i class='fa fa-file-text-o'></i> Berkas</a></td>
                    </tr>
                  ";
                }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>

</section>
