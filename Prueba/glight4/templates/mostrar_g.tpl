<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>Granjeros</b></td></tr>

{section loop=$granjero name=i}
<tr><td><br />
	
	</b> <a  href="{$gvar.l_global}mostrar2_g.php?id={$granjero[i]->get('id')}">{$granjero[i]->get('nombre')}</a><br />
    </td></tr></font>
{/section}
</table>
