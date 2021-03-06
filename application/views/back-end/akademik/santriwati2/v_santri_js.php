<script>
 $(document).ready(function(){
   $('#datatable').DataTable({});

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

});
</script>
