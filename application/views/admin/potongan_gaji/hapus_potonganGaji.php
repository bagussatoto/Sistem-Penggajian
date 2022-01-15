<form method="post" id="form">
    <p>Yakin hapus?</p>
    <input type="hidden" name="potongan" value="<?php echo $hasil->potongan;?>">
    <button id="tombol_hapus" type="button" class="btn btn btn-sm btn-danger" data-dismiss="modal" ><i class="fas fa-trash"></i></button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_hapus").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>admin/potongan_gaji/hapusPotongan",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>admin/potongan_gaji/tampilPotongan");
                      
                    }
                });
            });
        });
</script> 