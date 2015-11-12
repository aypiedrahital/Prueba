<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>Granjeros</b></td></tr>

{section loop=$granjero name=i}
<tr><td>
	
<b>Id: {$granjero[i]->get("id")}</b><br />
<b>Nombre: {$granjero[i]->get("nombre")}</b><br />
<b>Edad: {$granjero[i]->get("edad")}</b><br />
<b>Sexo: {$granjero[i]->get("sexo")}</b><br />
{/section}
<tr><td><b>Posee las siguientes fincas:</b></td></tr>
{section loop=$finca name=i}
<tr><td>
<b>Nombre: {$finca[i]->get("nombre")}</b><br/>
{/section}
<tr><td><b>{$mensaje}</b></td></tr>
</table>
