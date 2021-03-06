<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_nip = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/santriakd/guruhapus?nip="+v_nip);
                }
            },
            batal: function () {

            }

        }
        });
    });

    $('#provinsi').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>admin/santriakd/datakotakab2",
        method : "POST",
        data : {provinsi: id},
        async : false,
        dataType : 'json',
        success: function(data){
            var html ='<option value="" disabled selected>Pilih Kabupaten/Kota</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].nama_kota_kab+'">'+data[i].nama_kota_kab+'</option>';
                }
                $('#kabupaten_kota').html(html);

        }
        });
    });

    $('#kabupaten_kota').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>admin/santriakd/datakecamatan2",
        method : "POST",
        data : {kecamatan: id},
        async : false,
        dataType : 'json',
        success: function(data){
            var html ='<option value="" disabled selected>Pilih Kecamatan</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].nama_kecamatan+'">'+data[i].nama_kecamatan+'</option>';
                }
                $('#kecamatan').html(html);

        }
        });
    });

    $('#kecamatan').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>admin/santriakd/datadesa2",
        method : "POST",
        data : {desa: id},
        async : false,
        dataType : 'json',
        success: function(data){
            var html ='<option value="" disabled selected>Pilih Desa/Kelurahan</option>';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].nama_kel_desa+'">'+data[i].nama_kel_desa+'</option>';
                }
                $('#desa_kelurahan').html(html);

        }
        });
    });

</script>
