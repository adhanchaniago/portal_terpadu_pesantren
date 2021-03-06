<script>
 $(document).ready(function(){
    $('#datatable').DataTable({
        "bStateSave"    : true,
        "ajax"          : {
                            url :"<?php echo base_url(); ?>admin/santriwatiakd/santriwatiajax", // json datasource
                            type: "post",  // method  , by default get
                            error: function(){  // error handling
                                $(".employee-grid-error").html("");
                                $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                                $("#employee-grid_processing").css("display","none");
                            }
                        },
        "processing"    : true,
        "serverSide"    : true,
        "columnDefs"    : [
                            { "orderable": false, "targets": [0]
                            }
                        ],

		"responsive": true,
        "fnDrawCallback": function(oSettings){
            $(".hapus").click(function (e) {
            var v_nis = this.id;
            $.confirm({
                title: 'Hapus!',
                content: 'Yakin ingin menghapus ?',
                buttons: {
                    hapus: {
                        text: 'Hapus',
                        btnClass: 'btn-green',
                        action: function(){
                            window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/santriwatihapus?nis="+v_nis);
                        }
                    },
                    batal: function () {

                    }

                }
                });
            });

            $(".edit").click(function(e) {
                var v_url = "<?php echo base_url() ?>admin/santriwatiakd/santriwatitingkat";
                var v_id = this.id;
                $.ajax({
                        type: 'POST',
                        url: v_url,
                        data: {
                            nis : v_id
                            },
                        beforeSend: function () {
                            $("#loading").show();
                        },
                        success: function (response) {
                            $("#loading").hide();
                            $('#modal-edit').html(response)
                        }
                    });

            });

            $(".edit2").click(function(e) {
                var v_url = "<?php echo base_url() ?>admin/santriwatiakd/santriwatitingkatpondokan";
                var v_id = this.id;
                $.ajax({
                        type: 'POST',
                        url: v_url,
                        data: {
                            nis : v_id
                            },
                        beforeSend: function () {
                            $("#loading").show();
                        },
                        success: function (response) {
                            $("#loading").hide();
                            $('#modal-edit').html(response)
                        }
                    });

            });

        }
   });



    $('#provinsi').change(function(){
        var id=$(this).val();
        $.ajax({
        url : "<?php echo base_url();?>admin/santriwatiakd/datakotakab2",
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
        url : "<?php echo base_url();?>admin/santriwatiakd/datakecamatan2",
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
        url : "<?php echo base_url();?>admin/santriwatiakd/datadesa2",
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




});
</script>
