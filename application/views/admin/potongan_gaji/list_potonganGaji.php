<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>
</div>


<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/potongan_gaji/tampilPotongan",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });

});
</script>

<div class='container'>
    <div id="tampil">
        <!-- Data tampil disini -->

    <div align="center">        
</div>  
