<button type="button" class="tambah btn-sm btn-success mb-3" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> Tambah Potongan</button>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="judul"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="tampil_modal">
                            <!-- Data akan di tampilkan disini-->
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <input id="myInput" class="form-control" type="text"placeholder="Search..">
    </div>
</div>
<br>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Potongan Gaji</th>
                        <th>Jumlah Potongan</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        foreach ($hasil as $item)
                        {
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $item->potongan;?></td>
                        <td>Rp. <?php echo number_format($item->jml_potongan,0,',','.') ?></td>
                        <td>
                        <button type="button" potongan="<?php echo $item->potongan; ?>" class="edit btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                        <button type="button" potongan="<?php echo $item->potongan; ?>" class="hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                    </tr>
                    <?php
                        $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
    $(document).ready(function(){

        $('.tambah').click(function(){
        var aksi = 'Tambah Potongan Gaji';
        $.ajax({
            url: '<?php echo base_url(); ?>admin/potongan_gaji/tambah_potonganGaji',
            method: 'post',
            data: {aksi:aksi},
            success:function(data){
                $('#myModal').modal("show");
                $('#tampil_modal').html(data);
                document.getElementById("judul").innerHTML='Tambah Potongan';

            }
        });
        });

        $('.edit').click(function(){

            var potongan = $(this).attr("potongan");
            $.ajax({
                url: '<?php echo base_url(); ?>admin/potongan_gaji/edit_potonganGaji',
                method: 'post',
                data: {potongan:potongan},
                success:function(data){
                    $('#myModal').modal("show");
                    $('#tampil_modal').html(data);
                    document.getElementById("judul").innerHTML='Edit Potongan';  
                }
            });
        });

        $('.hapus').click(function(){

            var potongan = $(this).attr("potongan");
            $.ajax({
                url: '<?php echo base_url(); ?>admin/potongan_gaji/hapus_potonganGaji',
                method: 'post',
                data: {potongan:potongan},
                success:function(data){
                    $('#myModal').modal("show");
                    $('#tampil_modal').html(data);
                    document.getElementById("judul").innerHTML='Hapus Potongan';
                }
            });
            });
    });
</script>

