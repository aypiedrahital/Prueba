<div class="square">
<span class="title"><h2> Suma y promedio de números</h2></span><br/>

    {if $bandera eq 0}
	<form action = "{$gvar.l_global}sum_prom.php?option=establecer_cantidad" method="post">
	<table width = "100%" border="0" cellpadding="0" cellspacing="5">
	<tr><td>
	<h4>Por favor ingrese la cantidad de numeros</h4>
	<b> Cantidad de números:</b> <input type="text" name="cantidad"/> <br/>
	<input type = "submit" value="Enviar"><br/>
	</td></tr></table>
	</form>
	{/if}
	
	{if $bandera eq 1}
	<form action = "{$gvar.l_global}sum_prom.php?option=suma_promedio" method="post">
		<table width = "100%" border="0" cellpadding="0" cellspacing="5">
			<tr><td>
			<h4>Por favor ingrese los numeros:</h4><br/>
			{for $i = 1 to {$cantidad}}
			<b> Numero {$i}:</b> <input type = "text" name="numero{$i}"/> <br/>
			{/for}
			<input type = "hidden" name = "cantidad" value="{$cantidad}">
			<input type = "submit" value="Calcular"><br/>
			</td></tr>
		</table>
	</form>
	{/if}
	
	
	{if $bandera eq 2}
	<b>La cantidad de números es: {$cantidad}</b>  <br/>
	<b>La suma de los números es: {$suma}</b><br/>	
	<b>El promedio de los números es: {$promedio}</b>   <br/>
	{/if}
</div>
