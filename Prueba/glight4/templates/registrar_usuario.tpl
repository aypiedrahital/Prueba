		<form action="{$gvar.l_global}c_registrar_usuario.php?option=registrar" method="post">
			<center><h1>Registrar usuario</h1>
			<label>(*) Nombre: <input type="text" name="nombre" required/></label>
			<label>(*) C&eacute;dula:<input type="text" name="cedula" required/></label>
			<label>(*) Contrase&ntilde;a:</b> <input type="password" name="contrasena" required/></label>
			<label>(*) Sexo
				<select name="sexo">
					<option value="M">M</option> 
					<option value="F">F</option> 
				</select>
			</label>
			<label>Ocupaci&oacute;n:<input type="text" name="ocupacion"/></label>					                    
			
			<br />
			<a class="button" href="#">Atrás</a>
			<input class="btn btn-primary" type="submit" value="Registrar"/>
			<input class="btn btn-primary" type="reset"  value="Borrar">
			</center>

		</form>