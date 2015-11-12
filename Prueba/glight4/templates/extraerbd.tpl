<table border="0" width="100" cellpadding="0" cellspacing="10">
<tr><td><b>JEFES DE LA EMPRESA</b></td></tr>
{section loop=$boss name=i}
<tr><td>
    <b>Id:</b> {$boss[i]->get('id')}<br />
    <b>Nombre:</b> {$boss[i]->get('name')}<br />
    <b>Cargo:</b> {$boss[i]->get('charge')}
</td></tr>
{/section}
</table>
