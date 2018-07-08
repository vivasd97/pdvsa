
<div class="container center">
	<div class="row">
		<div class="col-sm-12 col-md-4 col-md-offset-4">
			<div class="spacing-4"></div>
			<fieldset>
				<legend class="white"><center>Login <i class="fa fa-lock white"></i>
                        			
                        	</center></legend>

				<div class="spacing-2"></div>	
				<form method="post" action="php/valida.php">
					<label class="sr-only" for="user">Admin</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>						
						</div>
						<input type="text" class="form-control" name="admin" placeholder="Indicador" required >		
					</div>		
					<div class="spacing-2"></div>	
					<label class="sr-only" for="user">clave</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-lock"></i>
						</div>
	                 	<input type="password" autocomplete="off" class="form-control" name="clave" placeholder="password" required autocomplete="off">
	                </div>	
	                <div class="spacing-2"></div>	
	              	<div class="input-group">
	                	<div class="input-group-addon"><i class="fa fa-eye"></i></div>
	                	<button type="submit" class="btn btn-success form-control" value="Ingresar">Ingresar</button>
	                </div>
				</form>
			</fieldset>
		</div>
	</div>
</div>
