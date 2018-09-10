<div class="list_container" style="">
    <ul>
        <li class="new_table italics"><div class="block"><i></i>
                <span class="hide pos2_name">tables</span>
                <span class="hide pos2_value">0</span></div>
            <div class="block "><a href="tbl_create.php?server=1&amp;db=stu&amp;token=89b2bd0c13a084c8751008c01fdc9125"><img src="<?= __PABLIC__ . "nbmyadmin"?>/dot.gif" title="新建" alt="新建" class="icon ic_b_table_add"></a></div>
            <a class="hover_show_full" href="#" title="" type="new_create" database="<?=$database?>" table="<?=$table?>">新建</a>
            <div class="clearfloat"></div></li>
        <?php foreach ($hh as $k=>$v):?>
<li class="last table">
    <div class="block"><i></i><a class="expander" href="#"><span
                    class="hide aPath">cm9vdA==.c3R1.dGFibGVz.c3R1ZGVudA==</span><span class="hide vPath">cm9vdA==.c3R1.6KGo.c3R1ZGVudA==</span><span
                    class="hide pos">0</span><span class="hide pos2_name">tables</span><span
                    class="hide pos2_value">0</span><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="扩展/收起"
                                                         alt="扩展/收起" class="icon ic_b_plus" type="table" value="<?= $v['Tables_in_name']?>" database="<?= $database?>"></a></div>
    <div class="block "><a
                href="tbl_structure.php?server=1&amp;db=stu&amp;table=student&amp;token=89b2bd0c13a084c8751008c01fdc9125"><img
                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="结构" alt="结构" class="icon ic_b_props"></a></div>
    <a class="hover_show_full" href="#" title="浏览" table="<?= $v['Tables_in_name']?>" type="join_table" database="<?=$database ?>" table="<?= $v['Tables_in_name']?>"><?= $v['Tables_in_name']?></a>
    <div class="clearfloat"></div>
</li>
<?php endforeach;?>
    </ul>
</div>
