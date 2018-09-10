<!DOCTYPE html>
<!-- saved from url=(0076)<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe -->
<html lang="zh_CN" dir="ltr" class="chrome chrome63">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="referrer" content="no-referrer">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="<?=__PABLIC__ . 'dialog/'?>css/dialog.css">
    <link rel="icon" href="<?= __PABLIC__ . "nbmyadmin" ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?= __PABLIC__ . "nbmyadmin" ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?= __PABLIC__ . "nbmyadmin" ?>/jquery-ui-1.11.4.css">
    <link rel="stylesheet" type="text/css" href="<?= __PABLIC__ . "nbmyadmin" ?>/codemirror.css">
    <link rel="stylesheet" type="text/css" href="<?= __PABLIC__ . "nbmyadmin" ?>/show-hint.css">
    <link rel="stylesheet" type="text/css" href="<?= __PABLIC__ . "nbmyadmin" ?>/lint.css">
    <link rel="stylesheet" type="text/css" href="<?= __PABLIC__ . "nbmyadmin" ?>/neirong.css">
    <link rel="stylesheet" type="text/css" href="<?= __PABLIC__ . "nbmyadmin" ?>/printview.css" media="print"
          id="printcss">
    <title>localhost / Local Databases | phpMyAdmin 4.6.4</title>
    <noscript>&lt;style&gt;html{display:block}&lt;/style&gt;</noscript>
    <script src="<?= __PABLIC__ . "nbmyadmin" ?>/jquery.1.7.js" type="text/javascript"></script>
    <script>
        $(function () {

            $('.ic_b_plus').live('click', function () {

                var liDome = $(this).closest('li');
                var imgdom = $(this);
                var type = $(this).attr("type");
                var value = $(this).attr("value");
                var htmlcode=$(this).attr("xxoo");
                if(typeof(htmlcode)!= "undefined"){
                    alert(1);
                    liDome.append(htmlcode);
                    imgdom.attr('src', "<?= __PABLIC__ . 'nbmyadmin/'?>dot.gif");
                    imgdom.attr('class', "icon ic_b_minus");
                    return true;
                }
                $(this).attr('class', 'icon ic_b_minus');
                if (type == "database") {
                    var url = "getTable";
                    var data = "database=" + value;
                }
                if (type == "table") {
                    var database = $(this).attr("database");
                    var url = "getFieldIndex";
                    var data = "table=" + value + "&database=" + database;
                }
                if (type == "fieldindex") {
                    var database = $(this).attr("database");
                    var url = "getFieldIndexlist";
                    var table = $(this).attr("table");
                    var data = "table=" + table + "&database=" + database;
                }
                if(type == "getsyindexlist"){
                    var database=$(this).attr("database");
                    var url="getsyIndexlist";
                    var table=$(this).attr("table");
                    var data = "table=" + table + "&database=" + database;
                }
                $.ajax({
                    url: url,
                    data: data,
//                                        dataType: 'json',
                    beforeSend: function () {
                        imgdom.attr('src', '<?= __PABLIC__ . "nbmyadmin/"?>ajax_clock_small.gif');
                        imgdom.attr('class', 'icon');
                    },
                    success: function (e) {
                        imgdom.attr('src', "<?= __PABLIC__ . 'nbmyadmin/'?>dot.gif");
                        imgdom.attr('class', "icon ic_b_minus");
                       liDome.append(e);
                     imgdom.attr("xxoo",e);
                    }
                });

            });

            $(".ic_b_minus").live('click', function () {
                $(this).attr("class", "icon ic_b_plus");
                var lidom = $(this).closest("li");
                $(".list_container", lidom).remove();
            });
            $(".hover_show_full").click(function () {
                var type = $(this).attr("type");
                if(type=="join_table"){
                    var table=$(this).attr("table");
                    var database=$(this).attr("database");
                    var url = "joinTable";
                    var data = "table=" + table + "&database=" + database;
                }
                if (type == "database") {
                    var url = "joinDb";
                    var database=$(this).attr("value");
                    var data = "database=" + database;
                }
                if(type== "new_create"){
                    var table=$(this).attr("table");
                    var database=$(this).attr("database");
                    var url="newXj";
                }
                $.ajax({
                    url: url,
                    data: data,
                    success: function (e) {
                        $("#page_content").html(e);
                    }
                });
        });
            $(".hover_show_full").live("click",function () {
                var type = $(this).attr("type");
                if(type=="join_table"){
                    var table=$(this).attr("table");
                    var database=$(this).attr("database");
                    var url = "joinTable";
                    var data = "table=" + table + "&database=" + database;
                }
                if (type == "database") {
                    var url = "joinDb";
                    var database=$(this).attr("database");
                    var data = "database=" + value;
                }
                if(type== "new_create"){
                    var database=$(this).attr("database");
                    var url="newXj";
                    var data="database="+database;
                }
                $.ajax({
                    url: url,
                    data:data,
                    success: function (e) {
                        $("#page_content").html(e);
                    }
                });
            });
            $("input[name='submit_num_fields']").live("click",function () {
                var num = $("#added_fields").val();//获取到需要添加几个 行数
                var bodyObj = $('#createTable');   //获取到整个添加表格的对象
                for (var i=0;i<num;i++){
                    //取到最后一行的 class 属性
                    var classify = $('#createTable tr:last').attr('class');

                    //判断最后一行的 class 属性 以便之后添加
                    if(classify == 'even'){
                        var tr = $('tr[class="odd"]').eq(0);
                        bodyObj.append(tr.clone());
                    }else{
                        var tr = $('tr[class="even"]').eq(0);
                        bodyObj.append(tr.clone());
                    }
                }
            });
            $("#show_table_list").live("click",function () {
                var database=$(this).attr("database");
                var table=$("input[name='table']").val();
                var trdom=$("#table_columns tr");
                var array=Array("input","select","input","select",
                    "select","select","checkbox",
                    "select","checkbox","input","select");
                $.each(trdom,function (k,y) {
                    var tddom=$("td",y);
                    $.each(tddom,function (key,value) {
                             if(array[key]=="input"){
                                alert($("input",$(value)).val());
                             }
                        if(array[key]=="select"){
                                 alert($('select option:selected',$(value)).val());
                        }
                        if(array[key]=="checkbox"){
                            var checked=$("input",$(value)).prop("checked");
                          if(checked=="checked"){
                              alert($("input:checked",$(value)).val());
                          }
                          else{
                              alert("没有定义");
                          }
                        }
                    });
                   alert(22);
                });

            });
            $(".default_type").live("change",function () {
                $(this).after("<input type='text'>");
            });
            $("select[name^=field_key]").live("change",function () {
                var code='<div class="index_info">    <div>        <div class="label">            <strong>                <label for="input_index_name">                    索引名称：<span class="pma_hint"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_b_help"><span class="hide">“PRIMARY”<b>必须</b>而且<b>只能</b>作为主键的名称！</span></span>                        </label>            </strong>        </div>        <input type="text" name="index[Key_name]" id="input_index_name" size="25" maxlength="64" value="PRIMARY" onfocus="this.select()" disabled="">    </div>    <div>        <div class="label">            <strong>                <label for="select_index_choice">                    Index choice:<a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Falter-table.html" target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a>                        </label>            </strong>        </div>        <select name="index[Index_choice]" id="select_index_choice" disabled="disabled"><option value="PRIMARY" selected="selected">PRIMARY</option>            <option value="INDEX">INDEX</option>            <option value="UNIQUE">UNIQUE</option>            <option value="SPATIAL">SPATIAL</option>            <option value="FULLTEXT">FULLTEXT</option>        </select>            </div>    <a href="#indexoptions" class="ajax"><span>+ </span>选项</a><div class="slide-wrapper" style="display: none;"><div id="indexoptions" style="display: none; overflow:auto;" class="pma_auto_slider">            <div>                <div class="label">                    <strong>                        <label for="input_key_block_size">                            Key block size:                        </label>                    </strong>                </div>                <input type="text" name="index[Key_block_size]" id="input_key_block_size" size="30" value="">            </div>            <div>                <div class="label">                    <strong>                        <label for="select_index_type">                            索引类型：<a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Falter-table.html" target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a>                        </label>                    </strong>                </div>                <select name="index[Index_type]" id="select_index_type"><option value="" selected="selected">--</option><option value="BTREE">BTREE</option><option value="HASH">HASH</option></select>            </div>            <div>                <div class="label">                    <strong>                        <label for="input_parser">                            Parser:                        </label>                    </strong>                </div>                <input type="text" name="index[Parser]" id="input_parse" size="30" value="">            </div>            <div>                <div class="label">                    <strong>                        <label for="input_index_comment">                            注释:                        </label>                    </strong>                </div>                <input type="text" name="index[Index_comment]" id="input_index_comment" size="30" maxlength="1024" value="">            </div>        </div></div>    <!-- end of indexoptions div -->    <div class="clearfloat"></div>    <table id="index_columns">        <thead>        <tr>            <th></th>            <th>                字段                    </th>            <th>                大小                    </th>        </tr>        </thead>        <tbody class="ui-sortable">        <tr class="oddnoclick ui-sortable-handle">            <td style="width: 12.128px;">                <span class="drag_icon" title="Drag to reorder"></span>            </td>            <td style="width: 182.128px;">                <select name="index[columns][names][]">                    <option value="">-- 忽略 --</option>                    <option value="0" selected="selected">                        [int]                    </option>                </select>            </td>            <td style="width: 182.128px;">                <input type="text" size="5" onfocus="this.select()" name="index[columns][sub_parts][]" value="">            </td>        </tr>        </tbody>    </table>    <div class="add_more">        <div class="slider"></div>        <div class="add_fields hide">            <input type="submit" id="add_fields" value="添加 1 个字段至索引">        </div>    </div></div>';
                $('body').dialog({type:'primary',showBoxShadow:true,buttons:[{name: '执行',className: 'defalut'},{name: '取消',className: 'defalut'}],discription:code,animateIn:'rotateInUpLeft-hastrans',animateOut:'rotateOutUpLeft-hastrans'})
            })
         });


    </script>
</head>
<body style="margin-bottom: 20px; padding-top: 61px;">
<div id="pma_navigation">
    <div id="pma_navigation_resizer"></div>
    <div id="pma_navigation_collapser">←</div>
    <div id="pma_navigation_content">
        <div id="pma_navigation_header"><a class="hide navigation_url"
                                           href="<?= __PABLIC__ . "nbmyadmin" ?>/navigation.php?ajax_request=1&amp;token=858f509a5f75625b4c350f1ca204e1fe"></a>
            <!-- LOGO START -->
            <div id="pmalogo">
                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/logo_left.png" alt="phpMyAdmin" id="imgpmalogo"> </a>
            </div>
            <!-- LOGO END --><!-- LINKS START -->
            <div id="navipanellinks"><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe"
                        title="主页"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="主页" alt="主页"
                                        class="icon ic_b_home"></a><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/logout.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                        class="disableAjax" title="退出"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="退出"
                                                            alt="退出" class="icon ic_s_loggoff"></a><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/index.html" target="documentation"
                        title="phpMyAdmin 文档"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="phpMyAdmin 文档"
                                                   alt="phpMyAdmin 文档" class="icon ic_b_docs"></a><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Findex.html"
                        target="mysql_doc" title="文档"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                           alt="文档" class="icon ic_b_sqlhelp"></a><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#"
                        id="pma_navigation_settings_icon" title="导航面板设定"><img
                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="导航面板设定" alt="导航面板设定"
                            class="icon ic_s_cog"></a><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#"
                        id="pma_navigation_reload" title="重新载入导航面板"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                         title="重新载入导航面板" alt="重新载入导航面板"
                                                                         class="icon ic_s_reload"></a></div>
            <!-- LINKS ENDS --><img src="<?= __PABLIC__ . "nbmyadmin" ?>/ajax_clock_small.gif" title="正在加载…" alt="正在加载…"
                                    style="visibility: hidden; display:none" class="throbber"></div>
        <div id="pma_navigation_tree" class="list_container synced highlight" style="height: 532px;">
            <div class="pma_quick_warp">
                <div class="drop_list"><span title="最近使用的表" class="drop_button">近期访问</span>
                    <ul id="pma_recent_list">
                        <li class="warp_link">没有最近使用的表。</li>
                    </ul>
                </div>
                <div class="drop_list"><span title="表收藏夹" class="drop_button">表收藏夹</span>
                    <ul id="pma_favorite_list">
                        <li class="warp_link">表收藏夹为空。</li>
                    </ul>
                </div>
                <div class="clearfloat"></div>
            </div>
            <div class="clearfloat"></div>
            <ul><!-- CONTROLS START -->
                <li id="navigation_controls_outer">
                    <div id="navigation_controls"><a
                                href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#"
                                id="pma_navigation_collapse" title="全部折叠"><img
                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/s_collapseall.png" title="全部折叠" alt="全部折叠"></a><a
                                href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#"
                                id="pma_navigation_sync" title="从主面板取消链接"><img
                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="从主面板取消链接" alt="从主面板取消链接"
                                    class="icon ic_s_link"></a></div>
                </li><!-- CONTROLS ENDS --></ul>
            <div id="pma_navigation_tree_content" style="height: 481px;">
                <ul>
                    <li class="first new_database italics">
                        <div class="block"><i class="first"></i></div>
                        <div class="block "><a
                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/server_databases.php?server=1&amp;token=858f509a5f75625b4c350f1ca204e1fe"><img
                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                        class="icon ic_b_newdb"></a></div>
                        <a class="hover_show_full"
                           href="#"
                           title="">新建</a>
                        <div class="clearfloat"></div>
                    </li>
                    <?php foreach ($aa as $v): ?>
                        <li class="database">
                            <div class="block"><i></i><b></b><a class="expander"
                                                                href="#"><span
                                            class="hide aPath">cm9vdA==.MTcxMmE=</span><span class="hide vPath">cm9vdA==.MTcxMmE=</span><span
                                            class="hide pos">0</span><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                          title="扩展/收起" alt="扩展/收起"
                                                                          class="icon ic_b_plus" type="database"
                                                                          value="<?= $v['Database'] ?>"></a>
                            </div>
                            <div class="block "><a
                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/db_operations.php?server=1&amp;db=1712a&amp;token=858f509a5f75625b4c350f1ca204e1fe"><img
                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="数据库操作" alt="数据库操作"
                                            class="icon ic_s_db"></a></div>
                            <a class="hover_show_full"
                               href="#"
                               title="结构" value="<?= $v['Database'] ?>" type="database"><?= $v['Database'] ?></a>
                            <div class="clearfloat"></div>
                        </li>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div id="pma_navi_settings_container">
            <div id="pma_navigation_settings">
                <div class="page_settings">
                    <form method="post"
                          action="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?db=&amp;table=&amp;server=1&amp;target=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                          class="config-form disableAjax"><input type="hidden" name="tab_hash" value=""><input
                                type="hidden" name="check_page_refresh" id="check_page_refresh" value="1">
                        <input type="hidden" name="token" value="858f509a5f75625b4c350f1ca204e1fe">
                        <input type="hidden" name="submit_save" value="Navi_panel">
                        <ul class="tabs">

                            <li class="active">

                                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#Navi_panel">
                                    导航面板 </a>
                            </li>
                            <li>

                                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#Navi_tree">
                                    导航树 </a>
                            </li>
                            <li>

                                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#Navi_databases">
                                    数据库 </a>
                            </li>
                            <li>

                                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#Navi_tables">
                                    表 </a>
                            </li>
                        </ul>
                        <br clear="right">
                        <div class="tabs_contents">
                            <fieldset class="optbox" id="Navi_panel" style="display: block;">
                                <legend>导航面板</legend>
                                <p>自定义导航面板。</p>
                                <table width="100%" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <th><label for="ShowDatabasesNavigationAsTree">以树状显示数据库导航面板</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_ShowDatabasesNavigationAsTree"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>导航栏使用数据库选择器替代树形列表</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="ShowDatabasesNavigationAsTree"
                                                                          id="ShowDatabasesNavigationAsTree"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#ShowDatabasesNavigationAsTree"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationLinkWithMainPanel">与主面板链接</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationLinkWithMainPanel"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>高亮当前数据库或表链接到主面板。</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationLinkWithMainPanel"
                                                                          id="NavigationLinkWithMainPanel"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationLinkWithMainPanel"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationDisplayLogo">显示徽标</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationDisplayLogo"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>在导航面板中显示图示。</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox" name="NavigationDisplayLogo"
                                                                          id="NavigationDisplayLogo" checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationDisplayLogo"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationLogoLink">徽标链接地址</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationLogoLink"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>导航面板中图示指向的链接地址。</small>
                                        </th>
                                        <td><input type="text" size="40" name="NavigationLogoLink"
                                                   id="NavigationLogoLink" value="index.php"><a class="restore-default"
                                                                                                href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationLogoLink"
                                                                                                title="还原为默认值"
                                                                                                style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationLogoLinkWindow">徽标链接目标</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationLogoLinkWindow"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>在主窗口（<kbd>main</kbd>）或新窗口（<kbd>new</kbd>）打开目标页面。</small>
                                        </th>
                                        <td><select name="NavigationLogoLinkWindow" id="NavigationLogoLinkWindow">
                                                <option value="main" selected="selected">main</option>
                                                <option value="new">new</option>
                                            </select><a class="restore-default"
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationLogoLinkWindow"
                                                        title="还原为默认值"
                                                        style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreePointerEnable">启用高亮</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreePointerEnable"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>高亮鼠标指针所在位置的服务器。</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreePointerEnable"
                                                                          id="NavigationTreePointerEnable"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreePointerEnable"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="FirstLevelNavigationItems">第一层节点的最大项数</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_FirstLevelNavigationItems"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>每页导航树所能显示的第一层的最大项数。</small>
                                        </th>
                                        <td><input type="number" name="FirstLevelNavigationItems"
                                                   id="FirstLevelNavigationItems" value="100"><a class="restore-default"
                                                                                                 href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#FirstLevelNavigationItems"
                                                                                                 title="还原为默认值"
                                                                                                 style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeDisplayItemFilterMinimum">显示筛选框的最少项数</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeDisplayItemFilterMinimum"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>设置达到多少个项（表、视图、程序和事件）时将显示筛选框。</small>
                                        </th>
                                        <td><input type="number" name="NavigationTreeDisplayItemFilterMinimum"
                                                   id="NavigationTreeDisplayItemFilterMinimum" value="30"><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeDisplayItemFilterMinimum"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NumRecentTables">最近使用的表</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NumRecentTables"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>最近使用的表的最大数量；设为 0 为禁用。</small>
                                        </th>
                                        <td><input type="number" name="NumRecentTables" id="NumRecentTables" value="10"><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NumRecentTables"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NumFavoriteTables">表收藏夹</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NumFavoriteTables"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>收藏表的最大数量；设为 0 为禁用。</small>
                                        </th>
                                        <td><input type="number" name="NumFavoriteTables" id="NumFavoriteTables"
                                                   value="10"><a class="restore-default"
                                                                 href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NumFavoriteTables"
                                                                 title="还原为默认值"
                                                                 style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <fieldset class="optbox" id="Navi_tree" style="display: none;">
                                <legend>导航树</legend>
                                <p>自定义导航树。</p>
                                <table width="100%" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <th><label for="MaxNavigationItems">节点中最大项数</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_MaxNavigationItems"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>每页导航树所能显示的最大项数。</small>
                                        </th>
                                        <td><input type="number" name="MaxNavigationItems" id="MaxNavigationItems"
                                                   value="50"><a class="restore-default"
                                                                 href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#MaxNavigationItems"
                                                                 title="还原为默认值"
                                                                 style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeEnableGrouping">分组树中的项</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeEnableGrouping"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>将导航树中的项分组（根据上面 数据库与数据表 页面设置的分隔符分组）。</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreeEnableGrouping"
                                                                          id="NavigationTreeEnableGrouping"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeEnableGrouping"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeEnableExpansion">启用表导航条展开功能</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeEnableExpansion"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>是否允许在导航栏中展开导航树。</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreeEnableExpansion"
                                                                          id="NavigationTreeEnableExpansion"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeEnableExpansion"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeShowTables">在导航树显示表</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeShowTables"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>在导航树是否在数据库下显示数据表节点</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreeShowTables"
                                                                          id="NavigationTreeShowTables"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeShowTables"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeShowViews">在导航树显示视图</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeShowViews"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>在导航树中是否在数据库下显示视图节点</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox" name="NavigationTreeShowViews"
                                                                          id="NavigationTreeShowViews"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeShowViews"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeShowFunctions">在导航树显示函数</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeShowFunctions"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>是否显示导航树中数据库下级功能</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreeShowFunctions"
                                                                          id="NavigationTreeShowFunctions"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeShowFunctions"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeShowProcedures">在导航树显示进程</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeShowProcedures"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>是否在导航树中显示数据库进程</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreeShowProcedures"
                                                                          id="NavigationTreeShowProcedures"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeShowProcedures"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeShowEvents">在导航树显示事件</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeShowEvents"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>在导航树中数据库下是否显示事件节点</small>
                                        </th>
                                        <td><span class="checkbox"><input type="checkbox"
                                                                          name="NavigationTreeShowEvents"
                                                                          id="NavigationTreeShowEvents"
                                                                          checked="checked"></span><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeShowEvents"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <fieldset class="optbox" id="Navi_databases" style="display: none;">
                                <legend>数据库</legend>
                                <p>数据库显示选项。</p>
                                <table width="100%" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <th>
                                            <label for="NavigationTreeDisplayDbFilterMinimum">设置达到多少个数据库时将显示数据库筛选框</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeDisplayDbFilterMinimum"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span></th>
                                        <td><input type="number" name="NavigationTreeDisplayDbFilterMinimum"
                                                   id="NavigationTreeDisplayDbFilterMinimum" value="30"><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeDisplayDbFilterMinimum"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeDbSeparator">数据库树分隔符</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeDbSeparator"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>将数据库分为不同层级的字符串。</small>
                                        </th>
                                        <td><input type="text" size="25" name="NavigationTreeDbSeparator"
                                                   id="NavigationTreeDbSeparator" value="_"><a class="restore-default"
                                                                                               href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeDbSeparator"
                                                                                               title="还原为默认值"
                                                                                               style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            <fieldset class="optbox" id="Navi_tables" style="display: none;">
                                <legend>表</legend>
                                <p>表显示选项。</p>
                                <table width="100%" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <th><label for="NavigationTreeDefaultTabTable">快速访问图标的目标</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeDefaultTabTable"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span></th>
                                        <td><select name="NavigationTreeDefaultTabTable"
                                                    id="NavigationTreeDefaultTabTable">
                                                <option value="structure" selected="selected">结构</option>
                                                <option value="sql">SQL</option>
                                                <option value="search">搜索</option>
                                                <option value="insert">插入</option>
                                                <option value="browse">浏览</option>
                                            </select><a class="restore-default"
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeDefaultTabTable"
                                                        title="还原为默认值"
                                                        style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeDefaultTabTable2">第二快速访问图标的目标页面</label><span
                                                    class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeDefaultTabTable2"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span></th>
                                        <td><select name="NavigationTreeDefaultTabTable2"
                                                    id="NavigationTreeDefaultTabTable2">
                                                <option value="" selected="selected"></option>
                                                <option value="structure">结构</option>
                                                <option value="sql">SQL</option>
                                                <option value="search">搜索</option>
                                                <option value="insert">插入</option>
                                                <option value="browse">浏览</option>
                                            </select><a class="restore-default"
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeDefaultTabTable2"
                                                        title="还原为默认值"
                                                        style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeTableSeparator">表树分隔符</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeTableSeparator"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span>
                                            <small>将表分为不同层级的字符串。</small>
                                        </th>
                                        <td><input type="text" size="25" name="NavigationTreeTableSeparator"
                                                   id="NavigationTreeTableSeparator" value="__"><a
                                                    class="restore-default"
                                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeTableSeparator"
                                                    title="还原为默认值" style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    <tr>
                                        <th><label for="NavigationTreeTableLevel">表树最大深度</label><span class="doc"><a
                                                        href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/config.html#cfg_NavigationTreeTableLevel"
                                                        target="documentation"><img
                                                            src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a>
</span></th>
                                        <td><input type="number" name="NavigationTreeTableLevel"
                                                   id="NavigationTreeTableLevel" value="1"><a class="restore-default"
                                                                                              href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#NavigationTreeTableLevel"
                                                                                              title="还原为默认值"
                                                                                              style="display: inline-block; opacity: 0.25;"><img
                                                        src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                        class="icon ic_s_reload" style="display: none;"></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="pma_drop_handler">将文件拖动至此</div>
    <div class="pma_sql_import_status"><h2>SQL upload ( <span class="pma_import_count">0</span> ) <span
                    class="close">x</span><span class="minimize">-</span></h2>
        <div></div>
    </div>
</div>
<div id="prefs_autoload" class="notice print_ignore" style="display:none">
    <form action="<?= __PABLIC__ . "nbmyadmin" ?>/prefs_manage.php" method="post" class="disableAjax">
        <input type="hidden" name="token" value="858f509a5f75625b4c350f1ca204e1fe"> <input type="hidden" name="json"
                                                                                           value="">
        <input type="hidden" name="submit_import" value="1">
        <input type="hidden" name="return_url" value="index.php?token=858f509a5f75625b4c350f1ca204e1fe">
        你的浏览器中有当前域的 phpMyAdmin 设置。是否导入到当前会话中？ <br>
        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#yes">是</a>
        / <a href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#no">否</a>
    </form>
</div>
<noscript>&lt;div class="error"&gt;&lt;img src="/dot.gif" title="" alt="" class="icon ic_s_error" /&gt; 该处必须启用
    Javascript！&lt;/div&gt;
</noscript>
<div id="floating_menubar" style="margin-left: 243px; left: 0px; position: fixed; top: 0px; width: 100%; z-index: 99;">
    <div id="serverinfo"><img src="./dot.gif" title="" alt="" class="icon ic_s_host item"><a
                href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe" class="item">服务器:
            Local Databases</a>
        <div class="clearfloat"></div>
    </div>
    <div id="topmenucontainer" class="menucontainer">
        <ul id="topmenu" class="resizable-menu">
            <li style="display: none" class="rng">

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_databases.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="数据库" alt="数据库" class="icon ic_s_db">&nbsp;结构
                </a>
            </li>
            <li style="display: none" class="nb">

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_databases.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="数据库" alt="数据库" class="icon ic_s_db">&nbsp;浏览
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_databases.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="数据库" alt="数据库" class="icon ic_s_db">&nbsp;数据库
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_sql.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="SQL" alt="SQL" class="icon ic_b_sql">&nbsp;SQL
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_status.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="状态" alt="状态" class="icon ic_s_status">&nbsp;状态
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_privileges.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe&amp;viewing_mode=server"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="账户" alt="账户" class="icon ic_s_rights">&nbsp;账户
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_export.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="导出" alt="导出" class="icon ic_b_export">&nbsp;导出
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_import.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="导入" alt="导入" class="icon ic_b_import">&nbsp;导入
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/prefs_manage.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="设置" alt="设置" class="icon ic_b_tblops">&nbsp;设置
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_replication.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="复制" alt="复制"
                         class="icon ic_s_replication">&nbsp;复制 </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_variables.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="变量" alt="变量" class="icon ic_s_vars">&nbsp;变量
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_collations.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="字符集" alt="字符集" class="icon ic_s_asci">&nbsp;字符集
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_engines.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="引擎" alt="引擎" class="icon ic_b_engine">&nbsp;引擎
                </a>
            </li>
            <li>

                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/server_plugins.php?db=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
                   class="tab">
                    <img src="<?= __PABLIC__ . "nbmyadmin" ?>/b_plugin.png" title="插件" alt="插件">&nbsp;插件 </a>
            </li>
            <li class="submenu" style=""><a
                        href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#"
                        class="tab nowrap"><img alt="" title="" src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                class="icon ic_b_more">更多</a>
                <ul class="notonly"></ul>
            </li>
            <div class="clearfloat"></div>
        </ul>
    </div>
</div>
<span id="page_nav_icons"><span id="lock_page_icon"></span><span id="page_settings_icon"><img
                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="页面相关设置" alt="页面相关设置"
                class="icon ic_s_cog"></span><a id="goto_pagetop"
                                                href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?token=858f509a5f75625b4c350f1ca204e1fe#"><img
                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="点击以滚动到页面顶部" alt="点击以滚动到页面顶部" class="icon ic_s_top"></a></span>
<div id="pma_console_container">
    <div id="pma_console">
        <div class="toolbar collapsed">
            <div class="switch_button console_switch"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                           title="SQL 查询控制台" alt="SQL 查询控制台"
                                                           class="icon ic_console"><span>控制台</span></div>
            <div class="button clear"><span>清除</span></div>
            <div class="button history"><span>历史</span></div>
            <div class="button options"><span>选项</span></div>
            <div class="button debug hide"><span>调试 SQL</span></div>
        </div>
        <div class="content" style="height: 92px; margin-bottom: -98px; display: none;">
            <div class="console_message_container">
                <div class="message welcome binded"><span><span id="instructions-0" style="display: inline;">按 Ctrl+Enter 键执行查询</span><span
                                class="hide" id="instructions-1" style="display: none;">按 Enter 执行查询</span></span></div>
            </div>
            <div class="query_input"><span class="console_query_input"><div class="CodeMirror cm-s-pma CodeMirror-wrap"><div
                                style="overflow: hidden; position: relative; width: 3px; height: 0px; top: 0px; left: 16px;"><textarea
                                    autocorrect="off" autocapitalize="off" spellcheck="false"
                                    style="position: absolute; padding: 0px; width: 1000px; height: 1em; outline: none;"
                                    tabindex="0"></textarea></div><div class="CodeMirror-vscrollbar"
                                                                       cm-not-content="true"><div
                                    style="min-width: 1px; height: 0px;"></div></div><div class="CodeMirror-hscrollbar"
                                                                                          cm-not-content="true"><div
                                    style="height: 100%; min-height: 1px; width: 0px;"></div></div><div
                                class="CodeMirror-scrollbar-filler" cm-not-content="true"></div><div
                                class="CodeMirror-gutter-filler" cm-not-content="true"></div><div
                                class="CodeMirror-scroll" tabindex="-1"><div class="CodeMirror-sizer"
                                                                             style="margin-left: 16px; margin-bottom: -17px; border-right-width: 13px; min-height: 15px; padding-right: 0px; padding-bottom: 0px;"><div
                                        style="position: relative; top: 0px;"><div class="CodeMirror-lines"><div
                                                style="position: relative; outline: none;"><div
                                                    class="CodeMirror-measure"><span><span>​</span>x</span></div><div
                                                    class="CodeMirror-measure"></div><div
                                                    style="position: relative; z-index: 1;"></div><div
                                                    class="CodeMirror-cursors"><div class="CodeMirror-cursor"
                                                                                    style="left: 0px; top: 0px; height: 15px;">&nbsp;</div></div><div
                                                    class="CodeMirror-code"><pre class=""><span
                                                            style="padding-right: 0.1px;"><span
                                                                cm-text="">​</span></span></pre></div></div></div></div></div><div
                                    style="position: absolute; height: 13px; width: 1px; top: 15px;"></div><div
                                    class="CodeMirror-gutters" style="height: 30px;"><div
                                        class="CodeMirror-gutter CodeMirror-lint-markers"></div></div></div></div></span>
            </div>
        </div>
        <div class="mid_layer"></div>
        <div class="card ungrouped" id="debug_console">
            <div class="toolbar">
                <div class="button order order_asc active"><span>递增排序</span></div>
                <div class="button order order_desc"><span>递减排序</span></div>
                <div class="text"><span>命令：</span></div>
                <div class="switch_button"><span>调试 SQL</span></div>
                <div class="button order_by sort_count"><span>数量</span></div>
                <div class="button order_by sort_exec active"><span>运行顺序</span></div>
                <div class="button order_by sort_time"><span>用时</span></div>
                <div class="text"><span>排序条件：</span></div>
                <div class="button group_queries"><span>联合查询</span></div>
                <div class="button ungroup_queries"><span>不使用联合查询</span></div>
            </div>
            <div class="content debug" style="height: 92px;">
                <div class="message welcome binded"></div>
                <div class="debugLog"></div>
            </div>
            <div class="templates">
                <div class="debug_query action_content"><span class="action collapse">崩溃</span> <span
                            class="action expand">扩展</span> <span class="action dbg_show_trace">显示跟踪</span> <span
                            class="action dbg_hide_trace">隐藏跟踪</span> <span
                            class="text count hide">记录数： <span></span></span><span
                            class="text time">用时： <span></span></span></div>
            </div>
        </div>
        <div class="card" id="pma_console_options">
            <div class="toolbar">
                <div class="switch_button"><span>选项</span></div>
                <div class="button default"><span>恢复默认</span></div>
            </div>
            <div class="content" style="height: 92px;"><label><input type="checkbox"
                                                                     name="always_expand">总是扩展查询消息</label><br><label><input
                            type="checkbox" name="start_history">在开始时显示查询历史</label><br><label><input type="checkbox"
                                                                                                     name="current_query">显示当前浏览查询</label><br><label><input
                            type="checkbox" name="enter_executes">浏览设置，使按Shift+Enter键执行输入和插入新行作为永久设置。</label><br><label><input
                            type="checkbox" name="dark_theme">切换到黑色主题</label><br></div>
        </div>
        <div class="templates">
            <div class="query_actions"><span class="action collapse">崩溃</span> <span class="action expand">扩展</span>
                <span class="action requery">重新查询</span> <span class="action edit">编辑</span> <span
                        class="action explain">解析</span> <span class="action profiling">性能分析</span> <span
                        class="text failed">查询失败</span> <span class="text targetdb">数据库: <span></span></span> <span
                        class="text query_time">查询时间: <span></span></span></div>
        </div>
    </div>
</div>
<div id="page_content">
    <div id="maincontainer">
        <a class="hide" id="sync_favorite_tables"
           href="<?= __PABLIC__ . "nbmyadmin" ?>/db_structure.php?ajax_request=1&amp;favorite_table=1&amp;sync_favorite_tables=1&amp;token=858f509a5f75625b4c350f1ca204e1fe"></a>
        <div id="main_pane_left">
            <div class="group"><h2>常规设置</h2>
                <ul>
                    <li id="li_change_password" class="no_bullets">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/user_password.php?token=858f509a5f75625b4c350f1ca204e1fe"
                           id="change_password_anchor" class="ajax">
                            <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_s_passwd">&nbsp;修改密码
                        </a>
                    </li>
                    <li id="li_select_mysql_collation" class="no_bullets">
                        <form method="post" action="<?= __PABLIC__ . "nbmyadmin" ?>/index.php">
                            <input type="hidden" name="token" value="858f509a5f75625b4c350f1ca204e1fe"> <label
                                    for="select_collation_connection">
                                <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                     class="icon ic_s_asci">&nbsp;服务器连接排序规则
                                <a href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Fcharset-connection.html"
                                   target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                           alt="文档" class="icon ic_b_help"></a>:
                            </label>
                            <select lang="en" dir="ltr" name="collation_connection" id="select_collation_connection"
                                    class="autosubmit">
                                <option value="">排序规则</option>
                                <option value=""></option>
                                <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                                    <option value="armscii8_bin" title="亚美尼亚语, 二进制">armscii8_bin</option>
                                    <option value="armscii8_general_ci" title="亚美尼亚语, 不区分大小写">armscii8_general_ci
                                    </option>
                                </optgroup>
                                <optgroup label="ascii" title="US ASCII">
                                    <option value="ascii_bin" title="西欧 (多语言), 二进制">ascii_bin</option>
                                    <option value="ascii_general_ci" title="西欧 (多语言), 不区分大小写">ascii_general_ci</option>
                                </optgroup>
                                <optgroup label="big5" title="Big5 Traditional Chinese">
                                    <option value="big5_bin" title="繁体中文, 二进制">big5_bin</option>
                                    <option value="big5_chinese_ci" title="繁体中文, 不区分大小写">big5_chinese_ci</option>
                                </optgroup>
                                <optgroup label="binary" title="Binary pseudo charset">
                                    <option value="binary" title="二进制">binary</option>
                                </optgroup>
                                <optgroup label="cp1250" title="Windows Central European">
                                    <option value="cp1250_bin" title="中欧 (多语言), 二进制">cp1250_bin</option>
                                    <option value="cp1250_croatian_ci" title="克罗地亚语, 不区分大小写">cp1250_croatian_ci</option>
                                    <option value="cp1250_czech_cs" title="捷克语, 区分大小写">cp1250_czech_cs</option>
                                    <option value="cp1250_general_ci" title="中欧 (多语言), 不区分大小写">cp1250_general_ci
                                    </option>
                                    <option value="cp1250_polish_ci" title="波兰语, 不区分大小写">cp1250_polish_ci</option>
                                </optgroup>
                                <optgroup label="cp1251" title="Windows Cyrillic">
                                    <option value="cp1251_bin" title="西里尔语 (多语言), 二进制">cp1251_bin</option>
                                    <option value="cp1251_bulgarian_ci" title="保加利亚语, 不区分大小写">cp1251_bulgarian_ci
                                    </option>
                                    <option value="cp1251_general_ci" title="西里尔语 (多语言), 不区分大小写">cp1251_general_ci
                                    </option>
                                    <option value="cp1251_general_cs" title="西里尔语 (多语言), 区分大小写">cp1251_general_cs
                                    </option>
                                    <option value="cp1251_ukrainian_ci" title="乌克兰语, 不区分大小写">cp1251_ukrainian_ci
                                    </option>
                                </optgroup>
                                <optgroup label="cp1256" title="Windows Arabic">
                                    <option value="cp1256_bin" title="阿拉伯语, 二进制">cp1256_bin</option>
                                    <option value="cp1256_general_ci" title="阿拉伯语, 不区分大小写">cp1256_general_ci</option>
                                </optgroup>
                                <optgroup label="cp1257" title="Windows Baltic">
                                    <option value="cp1257_bin" title="巴拉克语 (多语言), 二进制">cp1257_bin</option>
                                    <option value="cp1257_general_ci" title="巴拉克语 (多语言), 不区分大小写">cp1257_general_ci
                                    </option>
                                    <option value="cp1257_lithuanian_ci" title="立陶宛语, 不区分大小写">cp1257_lithuanian_ci
                                    </option>
                                </optgroup>
                                <optgroup label="cp850" title="DOS West European">
                                    <option value="cp850_bin" title="西欧 (多语言), 二进制">cp850_bin</option>
                                    <option value="cp850_general_ci" title="西欧 (多语言), 不区分大小写">cp850_general_ci</option>
                                </optgroup>
                                <optgroup label="cp852" title="DOS Central European">
                                    <option value="cp852_bin" title="中欧 (多语言), 二进制">cp852_bin</option>
                                    <option value="cp852_general_ci" title="中欧 (多语言), 不区分大小写">cp852_general_ci</option>
                                </optgroup>
                                <optgroup label="cp866" title="DOS Russian">
                                    <option value="cp866_bin" title="俄语, 二进制">cp866_bin</option>
                                    <option value="cp866_general_ci" title="俄语, 不区分大小写">cp866_general_ci</option>
                                </optgroup>
                                <optgroup label="cp932" title="SJIS for Windows Japanese">
                                    <option value="cp932_bin" title="日语, 二进制">cp932_bin</option>
                                    <option value="cp932_japanese_ci" title="日语, 不区分大小写">cp932_japanese_ci</option>
                                </optgroup>
                                <optgroup label="dec8" title="DEC West European">
                                    <option value="dec8_bin" title="西欧 (多语言), 二进制">dec8_bin</option>
                                    <option value="dec8_swedish_ci" title="瑞典语, 不区分大小写">dec8_swedish_ci</option>
                                </optgroup>
                                <optgroup label="eucjpms" title="UJIS for Windows Japanese">
                                    <option value="eucjpms_bin" title="日语, 二进制">eucjpms_bin</option>
                                    <option value="eucjpms_japanese_ci" title="日语, 不区分大小写">eucjpms_japanese_ci</option>
                                </optgroup>
                                <optgroup label="euckr" title="EUC-KR Korean">
                                    <option value="euckr_bin" title="朝鲜语, 二进制">euckr_bin</option>
                                    <option value="euckr_korean_ci" title="朝鲜语, 不区分大小写">euckr_korean_ci</option>
                                </optgroup>
                                <optgroup label="gb18030" title="China National Standard GB18030">
                                    <option value="gb18030_bin" title="未知, 二进制">gb18030_bin</option>
                                    <option value="gb18030_chinese_ci" title=", 不区分大小写">gb18030_chinese_ci</option>
                                    <option value="gb18030_unicode_520_ci" title="Unicode (多语言)">
                                        gb18030_unicode_520_ci
                                    </option>
                                </optgroup>
                                <optgroup label="gb2312" title="GB2312 Simplified Chinese">
                                    <option value="gb2312_bin" title="简体中文, 二进制">gb2312_bin</option>
                                    <option value="gb2312_chinese_ci" title="简体中文, 不区分大小写">gb2312_chinese_ci</option>
                                </optgroup>
                                <optgroup label="gbk" title="GBK Simplified Chinese">
                                    <option value="gbk_bin" title="简体中文, 二进制">gbk_bin</option>
                                    <option value="gbk_chinese_ci" title="简体中文, 不区分大小写">gbk_chinese_ci</option>
                                </optgroup>
                                <optgroup label="geostd8" title="GEOSTD8 Georgian">
                                    <option value="geostd8_bin" title="乔治亚语, 二进制">geostd8_bin</option>
                                    <option value="geostd8_general_ci" title="乔治亚语, 不区分大小写">geostd8_general_ci</option>
                                </optgroup>
                                <optgroup label="greek" title="ISO 8859-7 Greek">
                                    <option value="greek_bin" title="希腊语, 二进制">greek_bin</option>
                                    <option value="greek_general_ci" title="希腊语, 不区分大小写">greek_general_ci</option>
                                </optgroup>
                                <optgroup label="hebrew" title="ISO 8859-8 Hebrew">
                                    <option value="hebrew_bin" title="希伯来语, 二进制">hebrew_bin</option>
                                    <option value="hebrew_general_ci" title="希伯来语, 不区分大小写">hebrew_general_ci</option>
                                </optgroup>
                                <optgroup label="hp8" title="HP West European">
                                    <option value="hp8_bin" title="西欧 (多语言), 二进制">hp8_bin</option>
                                    <option value="hp8_english_ci" title="英语, 不区分大小写">hp8_english_ci</option>
                                </optgroup>
                                <optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
                                    <option value="keybcs2_bin" title="捷克斯洛伐克语, 二进制">keybcs2_bin</option>
                                    <option value="keybcs2_general_ci" title="捷克斯洛伐克语, 不区分大小写">keybcs2_general_ci
                                    </option>
                                </optgroup>
                                <optgroup label="koi8r" title="KOI8-R Relcom Russian">
                                    <option value="koi8r_bin" title="俄语, 二进制">koi8r_bin</option>
                                    <option value="koi8r_general_ci" title="俄语, 不区分大小写">koi8r_general_ci</option>
                                </optgroup>
                                <optgroup label="koi8u" title="KOI8-U Ukrainian">
                                    <option value="koi8u_bin" title="乌克兰语, 二进制">koi8u_bin</option>
                                    <option value="koi8u_general_ci" title="乌克兰语, 不区分大小写">koi8u_general_ci</option>
                                </optgroup>
                                <optgroup label="latin1" title="cp1252 West European">
                                    <option value="latin1_bin" title="西欧 (多语言), 二进制">latin1_bin</option>
                                    <option value="latin1_danish_ci" title="丹麦语, 不区分大小写">latin1_danish_ci</option>
                                    <option value="latin1_general_ci" title="西欧 (多语言), 不区分大小写">latin1_general_ci
                                    </option>
                                    <option value="latin1_general_cs" title="西欧 (多语言), 区分大小写">latin1_general_cs</option>
                                    <option value="latin1_german1_ci" title="德语 (字典), 不区分大小写">latin1_german1_ci</option>
                                    <option value="latin1_german2_ci" title="德语 (电话本), 不区分大小写">latin1_german2_ci
                                    </option>
                                    <option value="latin1_spanish_ci" title="西班牙语, 不区分大小写">latin1_spanish_ci</option>
                                    <option value="latin1_swedish_ci" title="瑞典语, 不区分大小写">latin1_swedish_ci</option>
                                </optgroup>
                                <optgroup label="latin2" title="ISO 8859-2 Central European">
                                    <option value="latin2_bin" title="中欧 (多语言), 二进制">latin2_bin</option>
                                    <option value="latin2_croatian_ci" title="克罗地亚语, 不区分大小写">latin2_croatian_ci</option>
                                    <option value="latin2_czech_cs" title="捷克语, 区分大小写">latin2_czech_cs</option>
                                    <option value="latin2_general_ci" title="中欧 (多语言), 不区分大小写">latin2_general_ci
                                    </option>
                                    <option value="latin2_hungarian_ci" title="匈牙利语, 不区分大小写">latin2_hungarian_ci
                                    </option>
                                </optgroup>
                                <optgroup label="latin5" title="ISO 8859-9 Turkish">
                                    <option value="latin5_bin" title="土耳其语, 二进制">latin5_bin</option>
                                    <option value="latin5_turkish_ci" title="土耳其语, 不区分大小写">latin5_turkish_ci</option>
                                </optgroup>
                                <optgroup label="latin7" title="ISO 8859-13 Baltic">
                                    <option value="latin7_bin" title="巴拉克语 (多语言), 二进制">latin7_bin</option>
                                    <option value="latin7_estonian_cs" title="爱沙尼亚语, 区分大小写">latin7_estonian_cs</option>
                                    <option value="latin7_general_ci" title="巴拉克语 (多语言), 不区分大小写">latin7_general_ci
                                    </option>
                                    <option value="latin7_general_cs" title="巴拉克语 (多语言), 区分大小写">latin7_general_cs
                                    </option>
                                </optgroup>
                                <optgroup label="macce" title="Mac Central European">
                                    <option value="macce_bin" title="中欧 (多语言), 二进制">macce_bin</option>
                                    <option value="macce_general_ci" title="中欧 (多语言), 不区分大小写">macce_general_ci</option>
                                </optgroup>
                                <optgroup label="macroman" title="Mac West European">
                                    <option value="macroman_bin" title="西欧 (多语言), 二进制">macroman_bin</option>
                                    <option value="macroman_general_ci" title="西欧 (多语言), 不区分大小写">macroman_general_ci
                                    </option>
                                </optgroup>
                                <optgroup label="sjis" title="Shift-JIS Japanese">
                                    <option value="sjis_bin" title="日语, 二进制">sjis_bin</option>
                                    <option value="sjis_japanese_ci" title="日语, 不区分大小写">sjis_japanese_ci</option>
                                </optgroup>
                                <optgroup label="swe7" title="7bit Swedish">
                                    <option value="swe7_bin" title="瑞典语, 二进制">swe7_bin</option>
                                    <option value="swe7_swedish_ci" title="瑞典语, 不区分大小写">swe7_swedish_ci</option>
                                </optgroup>
                                <optgroup label="tis620" title="TIS620 Thai">
                                    <option value="tis620_bin" title="泰语, 二进制">tis620_bin</option>
                                    <option value="tis620_thai_ci" title="泰语, 不区分大小写">tis620_thai_ci</option>
                                </optgroup>
                                <optgroup label="ucs2" title="UCS-2 Unicode">
                                    <option value="ucs2_bin" title="Unicode (多语言), 二进制">ucs2_bin</option>
                                    <option value="ucs2_croatian_ci" title="克罗地亚语, 不区分大小写">ucs2_croatian_ci</option>
                                    <option value="ucs2_czech_ci" title="捷克语, 不区分大小写">ucs2_czech_ci</option>
                                    <option value="ucs2_danish_ci" title="丹麦语, 不区分大小写">ucs2_danish_ci</option>
                                    <option value="ucs2_esperanto_ci" title="世界语, 不区分大小写">ucs2_esperanto_ci</option>
                                    <option value="ucs2_estonian_ci" title="爱沙尼亚语, 不区分大小写">ucs2_estonian_ci</option>
                                    <option value="ucs2_general_ci" title="Unicode (多语言), 不区分大小写">ucs2_general_ci
                                    </option>
                                    <option value="ucs2_general_mysql500_ci" title="Unicode (多语言)">
                                        ucs2_general_mysql500_ci
                                    </option>
                                    <option value="ucs2_german2_ci" title="德语 (电话本), 不区分大小写">ucs2_german2_ci</option>
                                    <option value="ucs2_hungarian_ci" title="匈牙利语, 不区分大小写">ucs2_hungarian_ci</option>
                                    <option value="ucs2_icelandic_ci" title="冰岛语, 不区分大小写">ucs2_icelandic_ci</option>
                                    <option value="ucs2_latvian_ci" title="拉脱维亚语, 不区分大小写">ucs2_latvian_ci</option>
                                    <option value="ucs2_lithuanian_ci" title="立陶宛语, 不区分大小写">ucs2_lithuanian_ci</option>
                                    <option value="ucs2_persian_ci" title="波斯语, 不区分大小写">ucs2_persian_ci</option>
                                    <option value="ucs2_polish_ci" title="波兰语, 不区分大小写">ucs2_polish_ci</option>
                                    <option value="ucs2_roman_ci" title="西欧, 不区分大小写">ucs2_roman_ci</option>
                                    <option value="ucs2_romanian_ci" title="罗马尼亚语, 不区分大小写">ucs2_romanian_ci</option>
                                    <option value="ucs2_sinhala_ci" title="僧伽罗语, 不区分大小写">ucs2_sinhala_ci</option>
                                    <option value="ucs2_slovak_ci" title="斯洛伐克语, 不区分大小写">ucs2_slovak_ci</option>
                                    <option value="ucs2_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">ucs2_slovenian_ci</option>
                                    <option value="ucs2_spanish2_ci" title="传统西班牙语, 不区分大小写">ucs2_spanish2_ci</option>
                                    <option value="ucs2_spanish_ci" title="西班牙语, 不区分大小写">ucs2_spanish_ci</option>
                                    <option value="ucs2_swedish_ci" title="瑞典语, 不区分大小写">ucs2_swedish_ci</option>
                                    <option value="ucs2_turkish_ci" title="土耳其语, 不区分大小写">ucs2_turkish_ci</option>
                                    <option value="ucs2_unicode_520_ci" title="Unicode (多语言)">ucs2_unicode_520_ci
                                    </option>
                                    <option value="ucs2_unicode_ci" title="Unicode (多语言), 不区分大小写">ucs2_unicode_ci
                                    </option>
                                    <option value="ucs2_vietnamese_ci" title="越南语, 不区分大小写">ucs2_vietnamese_ci</option>
                                </optgroup>
                                <optgroup label="ujis" title="EUC-JP Japanese">
                                    <option value="ujis_bin" title="日语, 二进制">ujis_bin</option>
                                    <option value="ujis_japanese_ci" title="日语, 不区分大小写">ujis_japanese_ci</option>
                                </optgroup>
                                <optgroup label="utf16" title="UTF-16 Unicode">
                                    <option value="utf16_bin" title="未知, 二进制">utf16_bin</option>
                                    <option value="utf16_croatian_ci" title="克罗地亚语, 不区分大小写">utf16_croatian_ci</option>
                                    <option value="utf16_czech_ci" title="捷克语, 不区分大小写">utf16_czech_ci</option>
                                    <option value="utf16_danish_ci" title="丹麦语, 不区分大小写">utf16_danish_ci</option>
                                    <option value="utf16_esperanto_ci" title="世界语, 不区分大小写">utf16_esperanto_ci</option>
                                    <option value="utf16_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf16_estonian_ci</option>
                                    <option value="utf16_general_ci" title="未知, 不区分大小写">utf16_general_ci</option>
                                    <option value="utf16_german2_ci" title="德语 (电话本), 不区分大小写">utf16_german2_ci</option>
                                    <option value="utf16_hungarian_ci" title="匈牙利语, 不区分大小写">utf16_hungarian_ci</option>
                                    <option value="utf16_icelandic_ci" title="冰岛语, 不区分大小写">utf16_icelandic_ci</option>
                                    <option value="utf16_latvian_ci" title="拉脱维亚语, 不区分大小写">utf16_latvian_ci</option>
                                    <option value="utf16_lithuanian_ci" title="立陶宛语, 不区分大小写">utf16_lithuanian_ci
                                    </option>
                                    <option value="utf16_persian_ci" title="波斯语, 不区分大小写">utf16_persian_ci</option>
                                    <option value="utf16_polish_ci" title="波兰语, 不区分大小写">utf16_polish_ci</option>
                                    <option value="utf16_roman_ci" title="西欧, 不区分大小写">utf16_roman_ci</option>
                                    <option value="utf16_romanian_ci" title="罗马尼亚语, 不区分大小写">utf16_romanian_ci</option>
                                    <option value="utf16_sinhala_ci" title="僧伽罗语, 不区分大小写">utf16_sinhala_ci</option>
                                    <option value="utf16_slovak_ci" title="斯洛伐克语, 不区分大小写">utf16_slovak_ci</option>
                                    <option value="utf16_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf16_slovenian_ci
                                    </option>
                                    <option value="utf16_spanish2_ci" title="传统西班牙语, 不区分大小写">utf16_spanish2_ci</option>
                                    <option value="utf16_spanish_ci" title="西班牙语, 不区分大小写">utf16_spanish_ci</option>
                                    <option value="utf16_swedish_ci" title="瑞典语, 不区分大小写">utf16_swedish_ci</option>
                                    <option value="utf16_turkish_ci" title="土耳其语, 不区分大小写">utf16_turkish_ci</option>
                                    <option value="utf16_unicode_520_ci" title="Unicode (多语言)">utf16_unicode_520_ci
                                    </option>
                                    <option value="utf16_unicode_ci" title="Unicode (多语言), 不区分大小写">utf16_unicode_ci
                                    </option>
                                    <option value="utf16_vietnamese_ci" title="越南语, 不区分大小写">utf16_vietnamese_ci</option>
                                </optgroup>
                                <optgroup label="utf16le" title="UTF-16LE Unicode">
                                    <option value="utf16le_bin" title="未知, 二进制">utf16le_bin</option>
                                    <option value="utf16le_general_ci" title="未知, 不区分大小写">utf16le_general_ci</option>
                                </optgroup>
                                <optgroup label="utf32" title="UTF-32 Unicode">
                                    <option value="utf32_bin" title="未知, 二进制">utf32_bin</option>
                                    <option value="utf32_croatian_ci" title="克罗地亚语, 不区分大小写">utf32_croatian_ci</option>
                                    <option value="utf32_czech_ci" title="捷克语, 不区分大小写">utf32_czech_ci</option>
                                    <option value="utf32_danish_ci" title="丹麦语, 不区分大小写">utf32_danish_ci</option>
                                    <option value="utf32_esperanto_ci" title="世界语, 不区分大小写">utf32_esperanto_ci</option>
                                    <option value="utf32_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf32_estonian_ci</option>
                                    <option value="utf32_general_ci" title="未知, 不区分大小写">utf32_general_ci</option>
                                    <option value="utf32_german2_ci" title="德语 (电话本), 不区分大小写">utf32_german2_ci</option>
                                    <option value="utf32_hungarian_ci" title="匈牙利语, 不区分大小写">utf32_hungarian_ci</option>
                                    <option value="utf32_icelandic_ci" title="冰岛语, 不区分大小写">utf32_icelandic_ci</option>
                                    <option value="utf32_latvian_ci" title="拉脱维亚语, 不区分大小写">utf32_latvian_ci</option>
                                    <option value="utf32_lithuanian_ci" title="立陶宛语, 不区分大小写">utf32_lithuanian_ci
                                    </option>
                                    <option value="utf32_persian_ci" title="波斯语, 不区分大小写">utf32_persian_ci</option>
                                    <option value="utf32_polish_ci" title="波兰语, 不区分大小写">utf32_polish_ci</option>
                                    <option value="utf32_roman_ci" title="西欧, 不区分大小写">utf32_roman_ci</option>
                                    <option value="utf32_romanian_ci" title="罗马尼亚语, 不区分大小写">utf32_romanian_ci</option>
                                    <option value="utf32_sinhala_ci" title="僧伽罗语, 不区分大小写">utf32_sinhala_ci</option>
                                    <option value="utf32_slovak_ci" title="斯洛伐克语, 不区分大小写">utf32_slovak_ci</option>
                                    <option value="utf32_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf32_slovenian_ci
                                    </option>
                                    <option value="utf32_spanish2_ci" title="传统西班牙语, 不区分大小写">utf32_spanish2_ci</option>
                                    <option value="utf32_spanish_ci" title="西班牙语, 不区分大小写">utf32_spanish_ci</option>
                                    <option value="utf32_swedish_ci" title="瑞典语, 不区分大小写">utf32_swedish_ci</option>
                                    <option value="utf32_turkish_ci" title="土耳其语, 不区分大小写">utf32_turkish_ci</option>
                                    <option value="utf32_unicode_520_ci" title="Unicode (多语言)">utf32_unicode_520_ci
                                    </option>
                                    <option value="utf32_unicode_ci" title="Unicode (多语言), 不区分大小写">utf32_unicode_ci
                                    </option>
                                    <option value="utf32_vietnamese_ci" title="越南语, 不区分大小写">utf32_vietnamese_ci</option>
                                </optgroup>
                                <optgroup label="utf8" title="UTF-8 Unicode">
                                    <option value="utf8_bin" title="Unicode (多语言), 二进制">utf8_bin</option>
                                    <option value="utf8_croatian_ci" title="克罗地亚语, 不区分大小写">utf8_croatian_ci</option>
                                    <option value="utf8_czech_ci" title="捷克语, 不区分大小写">utf8_czech_ci</option>
                                    <option value="utf8_danish_ci" title="丹麦语, 不区分大小写">utf8_danish_ci</option>
                                    <option value="utf8_esperanto_ci" title="世界语, 不区分大小写">utf8_esperanto_ci</option>
                                    <option value="utf8_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8_estonian_ci</option>
                                    <option value="utf8_general_ci" title="Unicode (多语言), 不区分大小写">utf8_general_ci
                                    </option>
                                    <option value="utf8_general_mysql500_ci" title="Unicode (多语言)">
                                        utf8_general_mysql500_ci
                                    </option>
                                    <option value="utf8_german2_ci" title="德语 (电话本), 不区分大小写">utf8_german2_ci</option>
                                    <option value="utf8_hungarian_ci" title="匈牙利语, 不区分大小写">utf8_hungarian_ci</option>
                                    <option value="utf8_icelandic_ci" title="冰岛语, 不区分大小写">utf8_icelandic_ci</option>
                                    <option value="utf8_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8_latvian_ci</option>
                                    <option value="utf8_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8_lithuanian_ci</option>
                                    <option value="utf8_persian_ci" title="波斯语, 不区分大小写">utf8_persian_ci</option>
                                    <option value="utf8_polish_ci" title="波兰语, 不区分大小写">utf8_polish_ci</option>
                                    <option value="utf8_roman_ci" title="西欧, 不区分大小写">utf8_roman_ci</option>
                                    <option value="utf8_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8_romanian_ci</option>
                                    <option value="utf8_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8_sinhala_ci</option>
                                    <option value="utf8_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8_slovak_ci</option>
                                    <option value="utf8_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8_slovenian_ci</option>
                                    <option value="utf8_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8_spanish2_ci</option>
                                    <option value="utf8_spanish_ci" title="西班牙语, 不区分大小写">utf8_spanish_ci</option>
                                    <option value="utf8_swedish_ci" title="瑞典语, 不区分大小写">utf8_swedish_ci</option>
                                    <option value="utf8_turkish_ci" title="土耳其语, 不区分大小写">utf8_turkish_ci</option>
                                    <option value="utf8_unicode_520_ci" title="Unicode (多语言)">utf8_unicode_520_ci
                                    </option>
                                    <option value="utf8_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8_unicode_ci
                                    </option>
                                    <option value="utf8_vietnamese_ci" title="越南语, 不区分大小写">utf8_vietnamese_ci</option>
                                </optgroup>
                                <optgroup label="utf8mb4" title="UTF-8 Unicode">
                                    <option value="utf8mb4_bin" title="Unicode (多语言), 二进制">utf8mb4_bin</option>
                                    <option value="utf8mb4_croatian_ci" title="克罗地亚语, 不区分大小写">utf8mb4_croatian_ci
                                    </option>
                                    <option value="utf8mb4_czech_ci" title="捷克语, 不区分大小写">utf8mb4_czech_ci</option>
                                    <option value="utf8mb4_danish_ci" title="丹麦语, 不区分大小写">utf8mb4_danish_ci</option>
                                    <option value="utf8mb4_esperanto_ci" title="世界语, 不区分大小写">utf8mb4_esperanto_ci
                                    </option>
                                    <option value="utf8mb4_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8mb4_estonian_ci
                                    </option>
                                    <option value="utf8mb4_general_ci" title="Unicode (多语言), 不区分大小写">
                                        utf8mb4_general_ci
                                    </option>
                                    <option value="utf8mb4_german2_ci" title="德语 (电话本), 不区分大小写">utf8mb4_german2_ci
                                    </option>
                                    <option value="utf8mb4_hungarian_ci" title="匈牙利语, 不区分大小写">utf8mb4_hungarian_ci
                                    </option>
                                    <option value="utf8mb4_icelandic_ci" title="冰岛语, 不区分大小写">utf8mb4_icelandic_ci
                                    </option>
                                    <option value="utf8mb4_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8mb4_latvian_ci</option>
                                    <option value="utf8mb4_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8mb4_lithuanian_ci
                                    </option>
                                    <option value="utf8mb4_persian_ci" title="波斯语, 不区分大小写">utf8mb4_persian_ci</option>
                                    <option value="utf8mb4_polish_ci" title="波兰语, 不区分大小写">utf8mb4_polish_ci</option>
                                    <option value="utf8mb4_roman_ci" title="西欧, 不区分大小写">utf8mb4_roman_ci</option>
                                    <option value="utf8mb4_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8mb4_romanian_ci
                                    </option>
                                    <option value="utf8mb4_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8mb4_sinhala_ci</option>
                                    <option value="utf8mb4_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8mb4_slovak_ci</option>
                                    <option value="utf8mb4_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8mb4_slovenian_ci
                                    </option>
                                    <option value="utf8mb4_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8mb4_spanish2_ci
                                    </option>
                                    <option value="utf8mb4_spanish_ci" title="西班牙语, 不区分大小写">utf8mb4_spanish_ci</option>
                                    <option value="utf8mb4_swedish_ci" title="瑞典语, 不区分大小写">utf8mb4_swedish_ci</option>
                                    <option value="utf8mb4_turkish_ci" title="土耳其语, 不区分大小写">utf8mb4_turkish_ci</option>
                                    <option value="utf8mb4_unicode_520_ci" title="Unicode (多语言)">
                                        utf8mb4_unicode_520_ci
                                    </option>
                                    <option value="utf8mb4_unicode_ci" title="Unicode (多语言), 不区分大小写"
                                            selected="selected">utf8mb4_unicode_ci
                                    </option>
                                    <option value="utf8mb4_vietnamese_ci" title="越南语, 不区分大小写">utf8mb4_vietnamese_ci
                                    </option>
                                </optgroup>
                            </select>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="group"><h2>外观设置</h2>
                <ul>
                    <li id="li_select_lang" class="no_bullets"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                    title="" alt="" class="icon ic_s_lang">
                        <form method="get" action="<?= __PABLIC__ . "nbmyadmin" ?>/index.php" class="disableAjax"><input
                                    type="hidden" name="db" value=""><input type="hidden" name="table" value=""><input
                                    type="hidden" name="token" value="858f509a5f75625b4c350f1ca204e1fe"><bdo lang="en"
                                                                                                             dir="ltr"><label
                                        for="sel-lang">语言 - <em>Language</em><a
                                            href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/faq.html#faq7-2"
                                            target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                        title="文档" alt="文档" class="icon ic_b_help"></a>:
                                </label></bdo><select name="lang" class="autosubmit" lang="en" dir="ltr" id="sel-lang">
                                <option value="hy">Հայերէն - Armenian</option>
                                <option value="az">Azərbaycanca - Azerbaijani</option>
                                <option value="bn">বাংলা - Bangla</option>
                                <option value="pt_br">Português - Brazilian Portuguese</option>
                                <option value="bg">Български - Bulgarian</option>
                                <option value="ca">Català - Catalan</option>
                                <option value="zh_cn" selected="selected">中文 - Chinese simplified</option>
                                <option value="zh_tw">中文 - Chinese traditional</option>
                                <option value="cs">Čeština - Czech</option>
                                <option value="da">Dansk - Danish</option>
                                <option value="nl">Nederlands - Dutch</option>
                                <option value="en">English</option>
                                <option value="en_gb">English (United Kingdom)</option>
                                <option value="et">Eesti - Estonian</option>
                                <option value="fi">Suomi - Finnish</option>
                                <option value="fr">Français - French</option>
                                <option value="gl">Galego - Galician</option>
                                <option value="de">Deutsch - German</option>
                                <option value="el">Ελληνικά - Greek</option>
                                <option value="hu">Magyar - Hungarian</option>
                                <option value="id">Bahasa Indonesia - Indonesian</option>
                                <option value="ia">Interlingua</option>
                                <option value="it">Italiano - Italian</option>
                                <option value="ja">日本語 - Japanese</option>
                                <option value="ko">한국어 - Korean</option>
                                <option value="lt">Lietuvių - Lithuanian</option>
                                <option value="nb">Norsk - Norwegian</option>
                                <option value="pl">Polski - Polish</option>
                                <option value="pt">Português - Portuguese</option>
                                <option value="ro">Română - Romanian</option>
                                <option value="ru">Русский - Russian</option>
                                <option value="sr@latin">Srpski - Serbian (latin)</option>
                                <option value="si">සිංහල - Sinhala</option>
                                <option value="sq">Shqip - Slbanian</option>
                                <option value="sk">Slovenčina - Slovak</option>
                                <option value="sl">Slovenščina - Slovenian</option>
                                <option value="es">Español - Spanish</option>
                                <option value="sv">Svenska - Swedish</option>
                                <option value="tr">Türkçe - Turkish</option>
                                <option value="uk">Українська - Ukrainian</option>
                                <option value="vi">Tiếng Việt - Vietnamese</option>
                            </select></form>
                    </li>
                    <li id="li_select_theme" class="no_bullets"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                     title="" alt="" class="icon ic_s_theme">
                        <form name="setTheme" method="get" action="<?= __PABLIC__ . "nbmyadmin" ?>/index.php"
                              class="disableAjax"><input type="hidden" name="token"
                                                         value="858f509a5f75625b4c350f1ca204e1fe"><a
                                    href="<?= __PABLIC__ . "nbmyadmin" ?>/<?= __PABLIC__ . "nbmyadmin" ?>.php"
                                    target="<?= __PABLIC__ . "nbmyadmin" ?>"
                                    class="<?= __PABLIC__ . "nbmyadmin" ?>elect">主题：</a>
                            <select name="set_theme" lang="en" dir="ltr" class="autosubmit">
                                <option value="original">Original</option>
                                <option value="pmahomme" selected="selected">pmahomme</option>
                            </select></form>
                    </li>
                    <li id="li_select_fontsize">
                        <form name="form_fontsize_selection" id="form_fontsize_selection" method="get"
                              action="<?= __PABLIC__ . "nbmyadmin" ?>/index.php" class="disableAjax">
                            <input type="hidden" name="token" value="858f509a5f75625b4c350f1ca204e1fe">
                            <label for="select_fontsize">字号:</label>
                            <select name="set_fontsize" id="select_fontsize" class="autosubmit">
                                <option value="32%">32%</option>
                                <option value="42%">42%</option>
                                <option value="52%">52%</option>
                                <option value="62%">62%</option>
                                <option value="72%">72%</option>
                                <option value="77%">77%</option>
                                <option value="78%">78%</option>
                                <option value="79%">79%</option>
                                <option value="80%">80%</option>
                                <option value="81%">81%</option>
                                <option value="82%" selected="selected">82%</option>
                                <option value="83%">83%</option>
                                <option value="84%">84%</option>
                                <option value="85%">85%</option>
                                <option value="86%">86%</option>
                                <option value="87%">87%</option>
                                <option value="92%">92%</option>
                                <option value="102%">102%</option>
                                <option value="112%">112%</option>
                                <option value="122%">122%</option>
                                <option value="132%">132%</option>
                            </select>
                        </form>
                    </li>
                </ul>
                <ul>
                    <li id="li_user_preferences" class="no_bullets">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/prefs_manage.php?token=858f509a5f75625b4c350f1ca204e1fe">
                            <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_b_tblops">&nbsp;更多设置
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="main_pane_right">
            <div class="group"><h2>数据库服务器</h2>
                <ul>
                    <li id="li_server_info">

                        服务器： Local Databases (127.0.0.1 via TCP/IP)
                    </li>
                    <li id="li_server_type">

                        服务器类型： MySQL
                    </li>
                    <li id="li_server_version">

                        服务器版本： 5.7.14 - MySQL Community Server (GPL)
                    </li>
                    <li id="li_mysql_proto">

                        协议版本： 10
                    </li>
                    <li id="li_user_info">

                        用户： root@localhost
                    </li>
                    <li id="li_select_mysql_charset"> 服务器字符集： <span lang="en" dir="ltr">           UTF-8 Unicode           (utf8)        </span>
                    </li>
                </ul>
            </div>
            <div class="group"><h2>网站服务器</h2>
                <ul>
                    <li id="li_web_server_software">

                        Apache/2.4.23 (Win64) PHP/7.0.10
                    </li>
                    <li id="li_mysql_client_version">

                        数据库客户端版本： libmysql - mysqlnd 5.0.12-dev - 20150407 - $Id:
                        241ae00989d1995ffcbbf63d579943635faf9972 $
                    </li>
                    <li id="li_used_php_extension">

                        PHP 扩展： mysqli<a
                                href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fphp.net%2Fmanual%2Fen%2Fbook.mysqli.php"
                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a> curl<a
                                href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fphp.net%2Fmanual%2Fen%2Fbook.curl.php"
                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a> mbstring<a
                                href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fphp.net%2Fmanual%2Fen%2Fbook.mbstring.php"
                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档"
                                                            alt="文档" class="icon ic_b_help"></a></li>
                    <li id="li_used_php_version">

                        PHP 版本： 7.0.10
                    </li>
                </ul>
            </div>
            <div class="group pmagroup"><h2>phpMyAdmin</h2>
                <ul>
                    <li id="li_pma_version" class="jsversioncheck">

                        版本信息： <span class="version">4.6.4</span></li>
                    <li id="li_pma_docs">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/doc/html/index.html" target="_blank"
                           rel="noopener noreferrer">
                            文档 </a>
                    </li>
                    <li id="li_pma_homepage">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fwww.phpMyAdmin.net%2F"
                           target="_blank" rel="noopener noreferrer">
                            官方主页 </a>
                    </li>
                    <li id="li_pma_contribute">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fcontribute%2F"
                           target="_blank" rel="noopener noreferrer">
                            贡献 </a>
                    </li>
                    <li id="li_pma_support">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fsupport%2F"
                           target="_blank" rel="noopener noreferrer">
                            获取支持 </a>
                    </li>
                    <li id="li_pma_changes">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/changelog.php?token=858f509a5f75625b4c350f1ca204e1fe"
                           target="_blank" rel="noopener noreferrer">
                            更新列表 </a>
                    </li>
                    <li id="li_pma_license">

                        <a href="<?= __PABLIC__ . "nbmyadmin" ?>/license.php?token=858f509a5f75625b4c350f1ca204e1fe"
                           target="_blank" rel="noopener noreferrer">
                            授权 </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div st style=>
<div id="selflink" class="print_ignore"><a
            href="<?= __PABLIC__ . "nbmyadmin" ?>/index.php?db=&amp;table=&amp;server=1&amp;target=&amp;token=858f509a5f75625b4c350f1ca204e1fe"
            title="打开新的 phpMyAdmin 窗口" target="_blank"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                            title="打开新的 phpMyAdmin 窗口" alt="打开新的 phpMyAdmin 窗口"
                                                            class="icon ic_window-new"></a></div>
<div class="clearfloat" id="pma_errors"></div>
<script src="<?= __PABLIC__ . "nbmyadmin" ?>/jquery.1.7.js"></script>
<script>
    $(".hover_show_full").click(function () {
        $(".nb").css("display", "block");
        $(".rng").css("display","block");
//        $("#maincontainer").eq(0).css("display", "none");
//        $(".data").eq(0).css("display", "block");
    });
</script>
</body>
</html>