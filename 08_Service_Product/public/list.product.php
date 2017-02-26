<table cellpadding="0" cellspacing="0" style="border:1px #999 solid; width: 100%;">
    <tr>
        <th>Cod.</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
<?php foreach($list as $prod):?>
    <tr>
        <td align="center"><?=$prod['id']?></td>
        <td align="center"><?=$prod['name']?></td>
        <td align="center"><?=$prod['desc']?></td>
    </tr>
<?php endforeach;?>
</table>