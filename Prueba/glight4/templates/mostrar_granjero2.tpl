<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr><td><b>granjeros registrados</b>
	<b>Id:</b> {$granjero->get('id')}<br />
	 <b>Nombre:</b> {$granjero->get('nombre')}<br />
    <b>Edad:</b> {$granjero->get('edad')}<br />
	<b>Sexo:</b> {$granjero->get('sexo')}<br />
	<b>fincas:</b>
{section loop=$granjero->components['finca']['g_f'] name=i}
{$granjero->components['finca']['g_f'][i]->get("nombre")}<br />
{/section}
 </td></tr>
