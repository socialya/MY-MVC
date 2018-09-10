<div class="list_container" style="">
    <ul>
        <li class="new_column italics">
            <div class="block"><i></i><span class="hide pos2_name">tables</span><span
                        class="hide pos2_value">0</span><span class="hide pos3_name">columns</span><span
                        class="hide pos3_value">0</span></div>
            <div class="block "><a
                        href="tbl_addfield.php?server=1&amp;db=1712a&amp;table=oscshop_address&amp;field_where=last&amp;after_field=&amp;token=4973b37c035a18196441af5cd04eac1e"><img
                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="新建" alt="新建" class="icon ic_b_column_add"></a></div>
            <a class="hover_show_full"
               href="tbl_addfield.php?server=1&amp;db=1712a&amp;table=oscshop_address&amp;field_where=last&amp;after_field=&amp;token=4973b37c035a18196441af5cd04eac1e"
               title="">新建</a>
            <div class="clearfloat"></div>
        </li>
        <?php foreach ($res as $k=>$v):?>
        <li class="">
            <div class="block"><i></i><span class="hide pos2_name">tables</span><span
                        class="hide pos2_value">0</span><span class="hide pos3_name">columns</span><span
                        class="hide pos3_value">0</span></div>
            <div class="block "><a
                        href="tbl_structure.php?server=1&amp;db=1712a&amp;table=oscshop_address&amp;field=address&amp;change_column=1&amp;token=4973b37c035a18196441af5cd04eac1e"><img
                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="字段" alt="字段" class="icon ic_pause"></a></div>
            <a class="hover_show_full"
               href="tbl_structure.php?server=1&amp;db=1712a&amp;table=oscshop_address&amp;field=address&amp;change_column=1&amp;token=4973b37c035a18196441af5cd04eac1e"
               title="结构"><?=$v['Field']?></a>
            <div class="clearfloat"></div>
        </li>
        <?php endforeach;?>
    </ul>
</div>