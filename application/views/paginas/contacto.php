<?php echo validation_errors(); ?>
<?php echo form_open('contactos/contacto'); ?>

<div class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?php echo $title; ?></h1>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus>

			<div class="form-group">
			<label for="exampleFormControlInput1">Email</label>
			<input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="ejemplo@yahoo.es" required autofocus>

			<div class="form-group">
			<label>Tel&eacutefono</label>
			<input type="num" class="form-control" name="telefono" placeholder="09999999" required autofocus>

			<label>Asunto</label>
			<input type="text" class="form-control" name="asunto" placeholder="Asunto">


			<div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true" name="mensaje " placeholder="Ingrese su mensaje"></textarea>
  </div>
	
	<button type="submit" class="btn btn-primary btn-block">Enviar
		
	</button>
	
</div>
</div>
<?php echo form_close(); ?>
