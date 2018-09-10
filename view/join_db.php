<div id="page_content">
    <div id="page_settings_modal">
        <div class="page_settings">
            <form method="post"
                  action="db_structure.php?db=1712a&amp;table=&amp;server=1&amp;target=&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                  class="config-form disableAjax"><input type="hidden" name="tab_hash" value=""><input type="hidden"
                                                                                                       name="check_page_refresh"
                                                                                                       id="check_page_refresh"
                                                                                                       value="">
                <input type="hidden" name="token" value="f2477a8279c2656c827ba2bd27e1f360">
                <input type="hidden" name="submit_save" value="DbStructure">
                <ul class="tabs">

                    <li class="active">

                        <a href="#DbStructure">
                            数据库结构 </a>
                    </li>
                </ul>
                <br clear="right">
                <div class="tabs_contents">
                    <fieldset class="optbox" id="DbStructure" style="display: block;">
                        <legend>数据库结构</legend>
                        <p>设置在数据库结构（表列表）中显示哪些细节。</p>
                        <table width="100%" cellspacing="0">
                            <tbody>
                            <tr>
                                <th><label for="ShowDbStructureComment">显示表备注</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_ShowDbStructureComment"
                                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                                            class="icon ic_b_help"></a>
</span>
                                    <small>显示或隐藏所有表的备注列。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="ShowDbStructureComment"
                                                                  id="ShowDbStructureComment"></span><a
                                            class="restore-default" href="#ShowDbStructureComment" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                                               title="" alt=""
                                                                                               class="icon ic_s_reload"
                                                                                               style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="ShowDbStructureCreation">显示创建时间</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_ShowDbStructureCreation"
                                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                                            class="icon ic_b_help"></a>
</span>
                                    <small>显示或隐藏所有表的创建时间列。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="ShowDbStructureCreation"
                                                                  id="ShowDbStructureCreation"></span><a
                                            class="restore-default" href="#ShowDbStructureCreation" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                                               title="" alt=""
                                                                                               class="icon ic_s_reload"
                                                                                               style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="ShowDbStructureLastUpdate">显示最后更新时间</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_ShowDbStructureLastUpdate"
                                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                                            class="icon ic_b_help"></a>
</span>
                                    <small>显示或隐藏所有表的最近更新时间列。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="ShowDbStructureLastUpdate"
                                                                  id="ShowDbStructureLastUpdate"></span><a
                                            class="restore-default" href="#ShowDbStructureLastUpdate" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                                               title="" alt=""
                                                                                               class="icon ic_s_reload"
                                                                                               style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="ShowDbStructureLastCheck">显示最近检查时间</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_ShowDbStructureLastCheck"
                                                target="documentation"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                                            class="icon ic_b_help"></a>
</span>
                                    <small>显示或隐藏所有表的最近检查时间列。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="ShowDbStructureLastCheck"
                                                                  id="ShowDbStructureLastCheck"></span><a
                                            class="restore-default" href="#ShowDbStructureLastCheck" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                                                               title="" alt=""
                                                                                               class="icon ic_s_reload"
                                                                                               style="display: none;"></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </form>
            <script type="text/javascript">
                if (typeof configInlineParams === "undefined" || !Array.isArray(configInlineParams)) configInlineParams = [];
                configInlineParams.push(function () {
                    $.extend(PMA_messages, {
                        'error_nan_p': '请输入正数！',
                        'error_nan_nneg': '请输入非负数！',
                        'error_incorrect_port': '请输入有效的端口号！',
                        'error_invalid_value': '值错误！',
                        'error_value_lte': '值应小于或等于 %s！'
                    });
                    $.extend(defaultValues, {
                        'ShowDbStructureComment': false,
                        'ShowDbStructureCreation': false,
                        'ShowDbStructureLastUpdate': false,
                        'ShowDbStructureLastCheck': false
                    });
                });
                if (typeof configScriptLoaded !== "undefined" && configInlineParams) loadInlineConfig();
            </script>
        </div>
    </div>
    <div id="tableslistcontainer">
        <form method="post" action="db_structure.php" name="tablesForm" id="tablesForm">
            <input type="hidden" name="db" value="1712a"><input type="hidden" name="token"
                                                                value="f2477a8279c2656c827ba2bd27e1f360">
            <table class="data">
                <thead>
                <tr>
                    <th class="print_ignore"></th>
                    <th>
                        <a href="db_structure.php?db=1712a&amp;pos=0&amp;sort=table&amp;sort_order=DESC&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="排序" onmouseover="$('.sort_arrow').toggle();" onmouseout="$('.sort_arrow').toggle();">表
                            <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="递增" class="icon ic_s_asc sort_arrow"> <img
                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="递减" class="icon ic_s_desc sort_arrow hide"></a>
                    </th>
                    <th colspan="7" class="print_ignore">
                        操作
                    </th>
                    <!-- larger values are more interesting so default sort order is DESC-->
                    <th>

                        <a href="db_structure.php?db=1712a&amp;pos=0&amp;sort=records&amp;sort_order=DESC&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="排序">行数</a>
                        <span class="pma_hint"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_b_help"><span
                                    class="hide">May be approximate. Click on the number to get the exact count. See <a
                                        href="./doc/html/faq.html#faq3-11"
                                        target="documentation">FAQ 3.11</a>.</span></span></th>
                    <th>
                        <a href="db_structure.php?db=1712a&amp;pos=0&amp;sort=type&amp;sort_order=ASC&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="排序">类型</a>
                    </th>
                    <th>
                        <a href="db_structure.php?db=1712a&amp;pos=0&amp;sort=collation&amp;sort_order=ASC&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="排序">排序规则</a>
                    </th>

                    <!-- larger values are more interesting so default sort order is DESC -->
                    <th>
                        <a href="db_structure.php?db=1712a&amp;pos=0&amp;sort=size&amp;sort_order=DESC&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="排序">大小</a>
                    </th>
                    <!-- larger values are more interesting so default sort order is DESC -->
                    <th>
                        <a href="db_structure.php?db=1712a&amp;pos=0&amp;sort=overhead&amp;sort_order=DESC&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="排序">多余</a>
                    </th>


                </tr>
                </thead>
                <tbody>
                <?php foreach ($hh as $k=>$v):?>
                <tr class="<?php if($k%2!=0):echo "odd";else:echo "even";endif;?>" id="row_tbl_1">
                    <td class="center print_ignore">
                        <input type="checkbox" name="selected_tbl[]" class="checkall" value="oscshop_address"
                               id="checkbox_tbl_1">
                    </td>
                    <th>
                        <a href="sql.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address&amp;pos=0"
                           title="用户收货地址">
                           <?=$v['Tables_in_name']?></a></th>

                    <td class="center print_ignore">
                        <a id="519c24fb16c935bc12611466bbc0a883_favorite_anchor" class="ajax favorite_table_anchor"
                           href="db_structure.php?db=1712a&amp;ajax_request=1&amp;favorite_table=oscshop_address&amp;add_favorite=1&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                           title="Add to Favorites" data-favtargets="50b4c076f5282f540ece04b99874d71f">
                            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                      class="icon ic_b_no_favorite">&nbsp;</span></a></td>

                    <td class="center print_ignore">
                        <a href="sql.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address&amp;pos=0">
                            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="浏览" alt="浏览"
                                                      class="icon ic_bd_browse">&nbsp;浏览</span></a></td>
                    <td class="center print_ignore">
                        <a href="tbl_structure.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address">
                            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="结构" alt="结构" class="icon ic_b_props">&nbsp;结构</span>
                        </a>
                    </td>
                    <td class="center print_ignore">
                        <a href="tbl_select.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address">
                            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="搜索" alt="搜索"
                                                      class="icon ic_bd_select">&nbsp;搜索</span></a></td>

                    <td class="insert_table center print_ignore">
                        <a href="tbl_change.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address"><span
                                    class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="插入" alt="插入"
                                                        class="icon ic_b_insrow">&nbsp;插入</span></a>
                    </td>
                    <td class="center print_ignore"><a class="truncate_table_anchor ajax"
                                                       href="sql.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address&amp;sql_query=TRUNCATE+%60oscshop_address%60&amp;message_to_show=%E5%B7%B2%E6%B8%85%E7%A9%BA%E8%A1%A8+oscshop_address%E3%80%82">
                            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="清空" alt="清空" class="icon ic_bd_empty">&nbsp;清空</span></a>
                    </td>
                    <td class="center print_ignore">
                        <a class="ajax drop_table_anchor "
                           href="sql.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address&amp;reload=1&amp;purge=1&amp;sql_query=DROP+TABLE+%60oscshop_address%60&amp;message_to_show=%E5%B7%B2%E5%88%A0%E9%99%A4%E8%A1%A8+oscshop_address%E3%80%82">
                            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="删除" alt="删除" class="icon ic_b_drop">&nbsp;删除</span>
                        </a>
                    </td>


                    <td class="value tbl_rows" data-table="oscshop_address">
                        0
                    </td>

                    <td class="nowrap">
                        InnoDB
                    </td>
                    <td class="nowrap">
                        <dfn title="Unicode (多语言), 不区分大小写">utf8_general_ci</dfn></td>

                    <td class="value tbl_size">
                        <a href="tbl_structure.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php&amp;table=oscshop_address#showusage">
                            <span>32</span>
                            <span class="unit">KB</span>
                        </a>
                    </td>
                    <td class="value tbl_overhead">
                        -
                    </td>


                </tr>
                <?php endforeach;?>
                </tbody>
                <tbody id="tbl_summary_row">
                <tr>
                    <th class="print_ignore"></th>
                    <th class="tbl_num nowrap">
                        42 张表
                    </th>
                    <th colspan="7" class="print_ignore">总计</th>
                    <th class="value tbl_rows">6,482</th>
                    <th class="center">
                        <dfn title="MyISAM 是该 MySQL 服务器的默认存储引擎。">MyISAM</dfn>
                    </th>
                    <th>
                        <dfn title="Unicode (多语言), 不区分大小写 (默认)">
                            utf8_general_ci </dfn>
                    </th>
                    <th class="value tbl_size">1.3 MB</th>
                    <th class="value tbl_overhead">0 字节</th>
                </tr>
                </tbody>
            </table>
            <div class="clearfloat print_ignore">
                <img class="selectallarrow" src="./<?= __PABLIC__ . "nbmyadmin" ?>/pmahomme/img/arrow_ltr.png" width="38" height="22" alt="">
                <input type="checkbox" id="tablesForm_checkall" class="checkall_box" title="全选">
                <label for="tablesForm_checkall">全选</label>
                <select name="submit_mult" style="margin: 0 3em 0 3em;">
                    <option value="选中项：" selected="selected">选中项：</option>
                    <option value="copy_tbl">Copy table</option>
                    <option value="show_create">Show create</option>
                    <option value="export">导出</option>
                    <optgroup label="删除数据或数据表">
                        <option value="empty_tbl">清空</option>
                        <option value="drop_tbl">删除</option>
                    </optgroup>
                    <optgroup label="表维护">
                        <option value="analyze_tbl">分析表</option>
                        <option value="check_tbl">检查表</option>
                        <option value="checksum_tbl">Checksum table</option>
                        <option value="optimize_tbl">优化表</option>
                        <option value="repair_tbl">修复表</option>
                    </optgroup>
                    <optgroup label="Prefix">
                        <option value="add_prefix_tbl">添加表前缀</option>
                        <option value="replace_prefix_tbl">修改表前缀</option>
                        <option value="copy_tbl_change_prefix">复制表为新前缀</option>
                    </optgroup>
                </select>
            </div>
        </form>
    </div>
    <hr>
    <p class="print_ignore">
        <a href="#" id="printView">
            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="打印" alt="打印" class="icon ic_b_print">&nbsp;打印</span>
        </a>
        <a href="db_datadict.php?db=1712a&amp;token=f2477a8279c2656c827ba2bd27e1f360&amp;goto=db_structure.php"
           target="print_view">
            <span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="Data dictionary" alt="Data dictionary"
                                      class="icon ic_b_tblanalyse">&nbsp;Data dictionary</span></a>
    </p>
    <form id="create_table_form_minimal" method="post" action="tbl_create.php" class="lock-page">
        <fieldset>
            <legend>
                <img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_b_table_add">&nbsp;
                新建数据表
            </legend>
            <input type="hidden" name="db" value="1712a"><input type="hidden" name="token"
                                                                value="f2477a8279c2656c827ba2bd27e1f360">
            <div class="formelement">
                名字:
                <input type="text" name="table" maxlength="64" size="30" required="required">
            </div>
            <div class="formelement">
                字段数:
                <input type="number" min="1" name="num_fields" value="4" required="required">
            </div>
            <div class="clearfloat"></div>
        </fieldset>
        <fieldset class="tblFooters">
            <input type="submit" value="执行">
        </fieldset>
    </form>
</div>