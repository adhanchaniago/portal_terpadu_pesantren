<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Akun Orang Tua Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Data Akun Orang Tua Santri
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
        <?php pesan_get('reset',"Berhasil Reset Kata Sandi (Kata Sandi Baru adalah NIS)","Berhasil Menonaktifkan Akun") ?>
        <?php pesan_get('aktif',"Berhasil Mengaktifkan Akun","Berhasil Menonaktifkan Akun") ?>
      <?php pesan_get('msg',"Berhasil Menambah Akun","Gagal Menambah Akun") ?>
        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th>ID Orangtua</th>
              <th>Nama Orangtua</th>
              <th>Alamat Email</th>
              <th>Jenis Akun</th>
              <th>Status Akun</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if($akun == 0){

              echo '
                    <div class="text-center" style="margin-top:10px">
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#'.$idakun.'" >Buat Akun</button>
                    </div>

                    '
              ;
            } else {
                foreach($data->result_array() as $row){ ?>
                    <tr>
                      <td><?php echo $row['nis_lokal'] ?></td>
                      <td><?php echo $row['nama_ortu'] ?></td>
                      <td><?php echo $row['email_ortu'] ?></td>
                      <td><?php echo $row['jenis_akun'] ?></td>
                      <td><?php echo
                          (($row['status_akun'] == 'aktif' ) ? '<a href="'.base_url("admin/datamaster/akunortunonaktifp?id=".$row["nis_lokal"]."&jenis=".$row['jenis_akun']."").'" class="btn btn-success btn-xs" >Aktif</a> <a href="'.base_url("admin/datamaster/resetsandiortup?id=".$row["nis_lokal"]."&jenis=".$row['jenis_akun']."").'" class="btn btn-warning btn-xs" >Reset Sandi</a>'
                          : (($row['status_akun'] == 'tidak aktif') ? '<a href="'.base_url("admin/datamaster/akunortuaktifp?id=".$row["nis_lokal"]."&jenis=".$row['jenis_akun']."").'" class="btn btn-warning btn-xs" >Tidak Aktif</a>'
                          : '<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#'.$row['nis_lokal'].'" >Belum Ada</button>'))
                      ?>
                      </td>
                    </tr>

                <?php
                  }
                }
                ?>
                <div class='modal' id='<?php echo $idakun?>' tabindex='-1' role='dialog'>
                 <div class='modal-dialog' role='document'>
                   <div class='modal-content'>
                     <div class='modal-header bg-default'>

                       <h4 class='modal-title'>Tambah Data Akun</h4>
                     </div>
                     <div class='modal-body form-horizontal'>
                         <form class="form-horizontal" data-validate="parsley" action='<?php echo base_url()?>admin/datamaster/buatakunortup' method="post">
                         <div class='form-group'>
                           <label class='col-sm-3 control-label' for='input-id-1'>ID Orang tua</label>
                           <div class='col-sm-8'>
                             <input type='text' name='id' class='form-control parsley-validated' data-required='true' readonly value='<?php echo $idakun ?>'>
                           </div>
                         </div>
                         <div class='form-group'>
                           <label class='col-sm-3 control-label' for='input-id-1'>Kata Sandi</label>
                           <div class='col-sm-8'>
                             <input type='text' name='sandi'  class='form-control parsley-validated' data-required='true' readonly value='<?php echo $idakun ?>'>
                           </div>
                         </div>
                         <div class='form-group'>
                           <label class='col-sm-3 control-label' for='input-id-1'>Email</label>
                           <div class='col-sm-8'>
                             <input type='email' name='email'  class='form-control parsley-validated' required data-parsley-type="email" value=''>
                           </div>
                         </div>

                     </div>
                     <div class='modal-footer'>
                       <button type='submit' class='btn btn-sm btn-success'>Konfirmasi</button>
                       </form>
                       <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
                     </div>
                   </div>
                 </div>
                 </diV>
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>

</section>
