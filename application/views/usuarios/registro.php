<?php echo validation_errors(); ?>
<?php echo form_open('usuarios/registro'); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?= $title; ?></h1>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre" placeholder="Nombre">
			
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
			
		</div>
		<div class="form-group">
			<label>Usuario</label>
			<input type="text" class="form-control" name="usuario" placeholder="Usuario">
		</div>
		<div class="form-group">
			<label>Clave</label>
			<input type="password" class="form-control" name="clave" placeholder="Clave">
		</div>
		<div class="form-group">
			<label>Confirmar Clave</label>
			<input type="password" class="form-control" name="password2" placeholder="Confirmar Clave">
		</div>
		<div class="form-group">
			<label>Codigo Postal</label>
			<input type="text" class="form-control" name="zipcode" placeholder="Codigo Postal">
			
		</div>
		<button type="submit" class="btn btn-primary btn-block">Guardar
			
		</button>
	</div>
</div>
<?php echo form_close(); ?>