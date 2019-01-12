<?php echo form_open('usuarios/login');?>
<div class="col-md-4 col-md-offset-4">
	<h1 class="text-center"><?php echo $title; ?>
		
	</h1>
	<div class="form-group">
		<input type="text" name="Usuario" class="form-control" placeholder="Ingresar Usuario" required autofocus>
	</div>
	<div class="form-group">
		<input type="password" name="Clave" class="form-control" placeholder="Ingresar Clave" required autofocus>
		
	</div>
	<button type="submit" class="btn-btn-succes">Login
		
	</button>
	</div>
<?php echo form_close(); ?>