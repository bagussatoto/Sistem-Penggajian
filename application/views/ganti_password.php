<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

  <div class="card" style="width: 40%">
  	<div class="card-body">
  		<form method="POST" action="<?php echo base_url('ganti_password/ganti_password_aksi')?>">
  			
  			<div class="form-grup">
  				<label>Password Baru</label>
  				<input type="password" name="passBaru" class="form-control">
  				<?php echo form_error('paasBaru', '<div class="text-small text-danger"> </div>')?>
  			</div>

  			<div class="form-grup">
  				<label>Ulangi Password Baru</label>
  				<input type="password" name="ulangPass" class="form-control">
  				<?php echo form_error('ulangPass', '<div class="text-small text-danger"> </div>')?>
  			</div>
  			<br>
  			<button type="submint" class="btn btn-success">Simpan</button>
  		</form>
  	</div>
  </div>

</div>
<!-- /.container-fluid -->