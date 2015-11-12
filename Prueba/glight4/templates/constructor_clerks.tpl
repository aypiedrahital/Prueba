
<table border="0" width="100%" cellpadding="0" cellspacing="30">
<tr><td><b>INFORMACION DE LOS CLERKS</br></td></tr>

{section loop=$listclerk name=i}
<tr><td><b>Nombre:</b> {$listclerk[i]->get('name')}<br />
	
    <b>ID:</b> {$listclerk[i]->get('id')}<br />
    <b>Salario:</b> {$listclerk[i]->get('salary')}
    </td></tr>
{/section}
<tr><td><b></b></td></tr>
<tr><td><b>Mayor salario:</b> {$mayor_salario} </td></tr>
<tr><td><b>Salario promedio:</b> {$salario_promedio} </td></tr>

</table>