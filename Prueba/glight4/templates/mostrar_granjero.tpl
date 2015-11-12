<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>granjeros registrados</b></td></tr>

{section loop=$granjero name=i}
	<tr><td></b><a href="{$gvar.l_global}mostrar_granjero2.php?id={$granjero[i]->get('id')}&option=cargar_granjero">{$granjero[i]->get('nombre')}</a><br 
    </td></tr>
{/section}
</table>