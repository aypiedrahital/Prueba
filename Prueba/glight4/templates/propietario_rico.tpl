<div class="square">
    <table border="0" width="100%" cellpadding="0" cellspacing="10"> 
        <tr>
            <td><b> Nombres de los propietarios ricos: </b><br />
            </td>
        </tr>
        
    {section loop = $propietario name=i}
        <tr>
            <td><b> Nombre: {$propietario[i]->get('nombre')}</b> <br />
            </td>
        </tr>
    {/section} 
    </table>
</div>