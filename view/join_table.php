<div id="page_content">
    <a class="hide" id="update_recent_tables"
       href="index.php?ajax_request=1&amp;recent_table=1&amp;token=f2477a8279c2656c827ba2bd27e1f360"></a>
    <div id="page_settings_modal">
        <div class="page_settings">
            <form method="post"
                  action="sql.php?db=1712a&amp;table=oscshop_address&amp;server=1&amp;target=&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                  class="config-form disableAjax"><input type="hidden" name="tab_hash" value=""><input type="hidden"
                                                                                                       name="check_page_refresh"
                                                                                                       id="check_page_refresh"
                                                                                                       value="1">
                <input type="hidden" name="token" value="f2477a8279c2656c827ba2bd27e1f360">
                <input type="hidden" name="submit_save" value="Browse">
                <ul class="tabs">

                    <li class="active">

                        <a href="#Browse">
                            浏览模式 </a>
                    </li>
                </ul>
                <br clear="right">
                <div class="tabs_contents">
                    <fieldset class="optbox" id="Browse" style="display: block;">
                        <legend>浏览模式</legend>
                        <p>自定义浏览模式。</p>
                        <table width="100%" cellspacing="0">
                            <tbody>
                            <tr>
                                <th><label for="TableNavigationLinksMode">表导航条</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_TableNavigationLinksMode"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>仅使用图标、文字或都使用。</small>
                                </th>
                                <td><select name="TableNavigationLinksMode" id="TableNavigationLinksMode">
                                        <option value="icons" selected="selected">图标</option>
                                        <option value="text">文字</option>
                                        <option value="both">都有</option>
                                    </select><a class="restore-default" href="#TableNavigationLinksMode" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="ActionLinksMode">显示动作链接的方式</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_ActionLinksMode"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>仅使用图标、文字或都使用。</small>
                                </th>
                                <td><select name="ActionLinksMode" id="ActionLinksMode">
                                        <option value="icons">图标</option>
                                        <option value="text">文字</option>
                                        <option value="both" selected="selected">都有</option>
                                    </select><a class="restore-default" href="#ActionLinksMode" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="ShowAll">允许显示所有行</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_ShowAll" target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>Whether a user should be displayed a "show all (rows)" button.</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="ShowAll" id="ShowAll"></span><a
                                            class="restore-default" href="#ShowAll" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="MaxRows">显示的最多行数</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_MaxRows" target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>浏览结果集时显示的行数。若结果集总行数超过该值，将会显示 "上一页" 和 "下一页" 的链接。</small>
                                </th>
                                <td><select name="MaxRows" id="MaxRows">
                                        <option value="25" selected="selected">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="250">250</option>
                                        <option value="500">500</option>
                                    </select><a class="restore-default" href="#MaxRows" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="Order">默认排序</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_Order" target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small><kbd>SMART</kbd> - 即对 TIME、DATE、DATETIME 和 TIMESTAMP 类型的字段递减排序，其它字段递增。
                                    </small>
                                </th>
                                <td><select name="Order" id="Order">
                                        <option value="ASC">ASC</option>
                                        <option value="DESC">DESC</option>
                                        <option value="SMART" selected="selected">SMART</option>
                                    </select><a class="restore-default" href="#Order" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="BrowsePointerEnable">高亮指针</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_BrowsePointerEnable"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>高亮鼠标指针所在的行。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="BrowsePointerEnable"
                                                                  id="BrowsePointerEnable" checked="checked"></span><a
                                            class="restore-default" href="#BrowsePointerEnable" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="BrowseMarkerEnable">行标记</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_BrowseMarkerEnable"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>高亮选中的行。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="BrowseMarkerEnable"
                                                                  id="BrowseMarkerEnable" checked="checked"></span><a
                                            class="restore-default" href="#BrowseMarkerEnable" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="GridEditing">单元格编辑：触发操作</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_GridEditing"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span></th>
                                <td><select name="GridEditing" id="GridEditing">
                                        <option value="click">单击</option>
                                        <option value="double-click" selected="selected">双击</option>
                                        <option value="disabled">已禁用</option>
                                    </select><a class="restore-default" href="#GridEditing" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="SaveCellsAtOnce">立刻存储所有已编辑的单元格</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_SaveCellsAtOnce"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span></th>
                                <td><span class="checkbox"><input type="checkbox" name="SaveCellsAtOnce"
                                                                  id="SaveCellsAtOnce"></span><a class="restore-default"
                                                                                                 href="#SaveCellsAtOnce"
                                                                                                 title="还原为默认值"
                                                                                                 style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a></td>
                            </tr>
                            <tr>
                                <th><label for="RepeatCells">重复表头</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_RepeatCells"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>每 X 单元格重复表头，要禁止此功能请设为 <kbd>0</kbd>。</small>
                                </th>
                                <td><input type="number" name="RepeatCells" id="RepeatCells" value="100"><a
                                            class="restore-default" href="#RepeatCells" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="LimitChars">字段字数限制</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_LimitChars" target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>浏览非数字字段时最多显示的字数。</small>
                                </th>
                                <td><input type="number" name="LimitChars" id="LimitChars" value="50"><a
                                            class="restore-default" href="#LimitChars" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="RowActionLinks">表行链接显示位置</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_RowActionLinks" target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>这些是编辑、复制和删除链接。</small>
                                </th>
                                <td><select name="RowActionLinks" id="RowActionLinks">
                                        <option value="none">无</option>
                                        <option value="left" selected="selected">左侧</option>
                                        <option value="right">右侧</option>
                                        <option value="both">都有</option>
                                    </select><a class="restore-default" href="#RowActionLinks" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="RowActionLinksWithoutUnique">始终显示行链接</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_RowActionLinksWithoutUnique"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>缺少唯一键时是否显示行链接。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="RowActionLinksWithoutUnique"
                                                                  id="RowActionLinksWithoutUnique"></span><a
                                            class="restore-default" href="#RowActionLinksWithoutUnique" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="TablePrimaryKeyOrder">主键默认排序</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_TablePrimaryKeyOrder"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>默认用主键为表排序。</small>
                                </th>
                                <td><select name="TablePrimaryKeyOrder" id="TablePrimaryKeyOrder">
                                        <option value="NONE" selected="selected">无</option>
                                        <option value="ASC">递增</option>
                                        <option value="DESC">递减</option>
                                    </select><a class="restore-default" href="#TablePrimaryKeyOrder" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="RememberSorting">记录表排序</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_RememberSorting"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>当浏览表时使用上次的排序方式。</small>
                                </th>
                                <td><span class="checkbox"><input type="checkbox" name="RememberSorting"
                                                                  id="RememberSorting" checked="checked"></span><a
                                            class="restore-default" href="#RememberSorting" title="还原为默认值"
                                            style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
                                                title="" alt=""
                                                class="icon ic_s_reload"
                                                style="display: none;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="RelationalDisplay">关联显示</label><span class="doc"><a
                                                href="./doc/html/config.html#cfg_RelationalDisplay"
                                                target="documentation"><img
                                                    src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档"
                                                    class="icon ic_b_help"></a>
</span>
                                    <small>显示选项</small>
                                </th>
                                <td><select name="RelationalDisplay" id="RelationalDisplay">
                                        <option value="K" selected="selected">键值</option>
                                        <option value="D">显示字段</option>
                                    </select><a class="restore-default" href="#RelationalDisplay" title="还原为默认值"
                                                style="display: inline-block; opacity: 0.25;"><img
                                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif"
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
                    validateField('MaxRows', 'PMA_validatePositiveNumber', true);
                    validateField('RepeatCells', 'PMA_validateNonNegativeNumber', true);
                    validateField('LimitChars', 'PMA_validatePositiveNumber', true);
                    $.extend(PMA_messages, {
                        'error_nan_p': '请输入正数！',
                        'error_nan_nneg': '请输入非负数！',
                        'error_incorrect_port': '请输入有效的端口号！',
                        'error_invalid_value': '值错误！',
                        'error_value_lte': '值应小于或等于 %s！'
                    });
                    $.extend(defaultValues, {
                        'TableNavigationLinksMode': ['icons'],
                        'ActionLinksMode': ['both'],
                        'ShowAll': false,
                        'MaxRows': ['25'],
                        'Order': ['SMART'],
                        'BrowsePointerEnable': true,
                        'BrowseMarkerEnable': true,
                        'GridEditing': ['double-click'],
                        'SaveCellsAtOnce': false,
                        'RepeatCells': '100',
                        'LimitChars': '50',
                        'RowActionLinks': ['left'],
                        'RowActionLinksWithoutUnique': false,
                        'TablePrimaryKeyOrder': ['NONE'],
                        'RememberSorting': true,
                        'RelationalDisplay': ['K']
                    });
                });
                if (typeof configScriptLoaded !== "undefined" && configInlineParams) loadInlineConfig();
            </script>
        </div>
    </div>
    <div class="result_query" style="text-align: left">
        <div class="success"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt=""
                                  class="icon ic_s_success"> MySQL 返回的查询结果为空 (即零行)。
            (查询花费 0.0010 秒。)
        </div>
        <div class="sqlOuter"><code class="sql"><pre style="display: none;">SELECT * FROM <?= $table ?>
</pre>
                <div class="sql-highlight cm-s-default"><span class="cm-keyword"><a target="mysql_doc"
                                                                                    class="cm-sql-doc"
                                                                                    href="./url.php?url=https://dev.mysql.com/doc/refman/5.5/en/select.html">SELECT</a></span>
                    * <span class="cm-keyword">FROM</span> <span class="cm-variable-2"><?= $table ?></span>
                </div>
            </code></div>
        <div class="tools print_ignore">
            <form action="sql.php" method="post"><input type="hidden" name="db" value="1712a"><input type="hidden"
                                                                                                     name="table"
                                                                                                     value="oscshop_address"><input
                        type="hidden" name="token" value="f2477a8279c2656c827ba2bd27e1f360"><input type="hidden"
                                                                                                   name="sql_query"
                                                                                                   value="SELECT * FROM `oscshop_address`"><input
                        type="hidden" name="profiling_form" value="1"><input type="checkbox" name="profiling"
                                                                             class="autosubmit"><label>性能分析</label>
            </form>
            [
            <a href="#" class="inline_edit_sql">编辑内嵌</a>
            ] [
            <a href="tbl_sql.php?db=1712a&amp;table=oscshop_address&amp;sql_query=SELECT+%2A+FROM+%60oscshop_address%60&amp;show_query=1&amp;token=f2477a8279c2656c827ba2bd27e1f360#querybox">编辑</a>
            ] [
            <a href="import.php?db=1712a&amp;table=oscshop_address&amp;sql_query=EXPLAIN+SELECT+%2A+FROM+%60oscshop_address%60&amp;token=f2477a8279c2656c827ba2bd27e1f360">解析
                SQL</a>
            ] [
            <a href="import.php?db=1712a&amp;table=oscshop_address&amp;sql_query=SELECT+%2A+FROM+%60oscshop_address%60&amp;show_query=1&amp;show_as_php=1&amp;token=f2477a8279c2656c827ba2bd27e1f360">创建
                PHP 代码</a>
            ] [
            <a href="import.php?db=1712a&amp;table=oscshop_address&amp;sql_query=SELECT+%2A+FROM+%60oscshop_address%60&amp;show_query=1&amp;token=f2477a8279c2656c827ba2bd27e1f360">刷新</a>
            ]
        </div>
    </div>
    <br><input class="save_cells_at_once" type="hidden" value="">
    <div class="common_hidden_inputs"><input type="hidden" name="db" value="1712a"><input type="hidden" name="table"
                                                                                          value="oscshop_address"><input
                type="hidden" name="token" value="f2477a8279c2656c827ba2bd27e1f360"></div>
    <input class="table_create_time" type="hidden" value="2018-07-09 09:05:28">
    <table class="table_results data ajax" data-uniqueid="1810">
        <thead>
        <tr>
            <th class="column_action print_ignore" colspan="4"></th>
            <?php foreach ($res as $k=>$v):?>
                <th class="draggable right" data-column="address_id"><?= $v['Field'] ?>
                </th>
            <?php endforeach; ?>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($bb as $k=>$value):?>
        <tr class="odd">
            <td class="center print_ignore"><span><input type="checkbox" id="id_rows_to_delete0_left"
                                                         name="rows_to_delete[0]" class="multi_checkbox checkall"
                                                         value="`actor`.`id` = 1"><input type="hidden"
                                                                                         class="condition_array"
                                                                                         value="{&quot;`actor`.`id`&quot;:&quot;= 1&quot;}">    </span>
            </td>
            <td class="edit_row_anchor center print_ignore"><span class="nowrap">
<a href="tbl_change.php?db=db_1712a&amp;table=actor&amp;where_clause=%60actor%60.%60id%60+%3D+1&amp;clause_is_unique=1&amp;sql_query=SELECT+%2A+FROM+%60actor%60&amp;goto=sql.php&amp;default_action=update&amp;token=f2477a8279c2656c827ba2bd27e1f360"><span
            class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="编辑" alt="编辑"
                                class="icon ic_b_edit">&nbsp;编辑</span></a>
<input type="hidden" class="where_clause" value="`actor`.`id` = 1"></span></td>
            <td class="center print_ignore"><span class="nowrap">
<a href="tbl_change.php?db=db_1712a&amp;table=actor&amp;where_clause=%60actor%60.%60id%60+%3D+1&amp;clause_is_unique=1&amp;sql_query=SELECT+%2A+FROM+%60actor%60&amp;goto=sql.php&amp;default_action=insert&amp;token=f2477a8279c2656c827ba2bd27e1f360"><span
            class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="复制" alt="复制"
                                class="icon ic_b_insrow">&nbsp;复制</span></a>
<input type="hidden" class="where_clause" value="`actor`.`id` = 1"></span></td>
            <td class="center print_ignore">
                <a href="sql.php?db=db_1712a&amp;table=actor&amp;sql_query=DELETE+FROM+%60actor%60+WHERE+%60actor%60.%60id%60+%3D+1&amp;message_to_show=%E5%B7%B2%E5%88%A0%E9%99%A4%E8%AF%A5%E8%A1%8C%E3%80%82&amp;goto=sql.php%3Fdb%3Ddb_1712a%26table%3Dactor%26sql_query%3DSELECT%2B%252A%2BFROM%2B%2560actor%2560%26message_to_show%3D%25E5%25B7%25B2%25E5%2588%25A0%25E9%2599%25A4%25E8%25AF%25A5%25E8%25A1%258C%25E3%2580%2582%26goto%3Dtbl_sql.php%26token%3Df2477a8279c2656c827ba2bd27e1f360&amp;token=f2477a8279c2656c827ba2bd27e1f360"
                   class="delete_row requireConfirm ajax"><span class="nowrap"><img
                                src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="删除" alt="删除"
                                class="icon ic_b_drop">&nbsp;删除</span></a>
                <div class="hide">DELETE FROM `actor` WHERE `actor`.`id` = 1</div>
            </td>
        <?php foreach ($value as $y):?>
            <td data-decimals="0" data-type="string" data-originallength="2" class="data grid_edit click2    text "><span><?=$y?></span></td>
                <?php endforeach;?>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <br><br>
    <fieldset class="print_ignore">
        <legend>查询结果操作</legend>
        <span>
<a href="view_create.php?db=1712a&amp;table=oscshop_address&amp;printview=1&amp;sql_query=SELECT+%2A+FROM+%60oscshop_address%60&amp;token=f2477a8279c2656c827ba2bd27e1f360"
   class="create_view ajax"><span class="nowrap"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="新建视图"
                                                      alt="新建视图"
                                                      class="icon ic_b_view_add">&nbsp;新建视图</span></a>
</span>
    </fieldset>
    <br></div>