<table border="0" width="100" cellpadding="0" cellspacing="10">
<tr><td><b>Listar canales</b></td></tr>
{section loop=$canal name=i}
<tr><td>
    <b>Nombre: </b> {$canal[i]->get('nombre')}<br />
   <b> email: {$canal[i]->get('email')} </b> <br />
 <b> Descripcion: </b> {$canal[i]->get('descipcion')}<br/>
         
    </td></tr>
{/section}
</table>