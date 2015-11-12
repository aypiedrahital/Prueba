<div class="square">
<table width="100%" border="0" cellpadding="0" cellspacing="5">
    <tr>
        
        {if !is_empty($mensaje)} 
        <h4 style="color:green">{$mensaje}</h4><br/>
            
        <td><a href="{$gvar.l_global}registrar_vivienda.php" > Registrar vivienda </a></td>
        <td><a href="{$gvar.l_global}Listar_vivienda.php" > Listar viviendas </a></td>
        <td><a href="{$gvar.l_global}propietario_rico.php" > Propietarios ricos </a></td>
            
        {/if}
    </tr>
</table>
</div>