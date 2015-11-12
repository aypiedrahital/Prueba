<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>FINCAS CON MAS DE 3 GALLINAS Y MENOS DE 5 VACAS</b></td></tr>

{section loop=$granjero name=i}
<tr><td><b>Nombre:</b> {$granjero[i]->get("nombre")}<br /></td></tr>
	
{/section}
</table>