<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Pekerjaan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Pekerjaan
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Pekerjaan","Gagal Menghapus Data Pekerjaan") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/pekerjaantambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Data Pekerjaan</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>ID Pekerjaan</th>
              <th>Nama Pekerjaan</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/pekerjaanedit?id_pekerjaan='.$row['id_pekerjaan'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_pekerjaan']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['id_pekerjaan']."</td>
                      <td>".$row['nama_pekerjaan']."</td>
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
