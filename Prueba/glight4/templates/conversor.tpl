
<div class="square">
    <form action="{$gvar.l_global}conversor.php?option=conversion" method="get">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr><td>
                    <span class="title"> Conversor divisas </span> <br></br>
                    {if isset($resultado)}
                        <b> El resultado es: </b> {$resultado} <br></br>
                        {/if}
                        <b> Tasa: </b> <input type="text" name="tasa"/></br>
                        <b> Cantidad (U$): </b> <input type="text" name ="dolares"/></br>
						<input type="hidden" name="option" value="conversion"/>
                        <input type="submit" value="Calcular"/>
                        
                </td></tr>
				</table>
    
    
    
    </form>
</div>