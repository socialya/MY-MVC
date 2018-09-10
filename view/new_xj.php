<!--<script src="--><?//=__PABLIC__ . 'dialog/'?><!--js/jquery.js"></script>-->
<script src="<?=__PABLIC__ . 'dialog/'?>js/dialog.js"></script>

<div id="page_content">
    <form method="post" action="goXj" class="create_table_form ajax lock-page">
        <input type="hidden" name="db" value="demo"><input type="hidden" name="reload" value="1"><input type="hidden"
                                                                                                         name="orig_num_fields"
                                                                                                         value="4"><input
                type="hidden" name="orig_field_where" value=""><input type="hidden" name="orig_after_field"
                                                                      value=""><input type="hidden" name="token"
                                                                                      value="fa808fc1d046dfa8661bc8c4ef560dda">
        <!-- happens when an index has been set on a column -->
        <!-- and a column is added to the table creation dialog -->
        <!-- This contains a JSON-encoded string -->
        <input type="hidden" name="primary_indexes" value="[]">
        <input type="hidden" name="unique_indexes" value="[]">
        <input type="hidden" name="indexes" value="[]">
        <input type="hidden" name="fulltext_indexes" value="[]">
        <input type="hidden" name="spatial_indexes" value="[]">

        <div id="table_name_col_no_outer">
            <table id="table_name_col_no">
                <tbody>
                <tr class="vmiddle floatleft">
                    <td>数据表名:&nbsp;
                        <input type="text" name="table" size="40" maxlength="64" value="" class="textfield" autofocus=""
                               required="">
                    </td>
                    <td>
                        Add
                        <input type="number" id="added_fields" name="added_fields" size="2" value="1" min="1"
                               onfocus="this.select()">
                        column(s)
                        <input type="button" name="submit_num_fields" value="执行">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <table id="table_columns" class="noclick">
            <caption class="tblHeaders">
                结构 <a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Fcreate-table.html"
                      target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a>
            </caption>
            <tbody id="createTable">
            <tr>
                <th>
                    名字
                </th>
                <th>
                    类型<a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Fdata-types.html"
                         target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a>
                </th>
                <th>
                    长度/值<span class="pma_hint"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_b_help"><span
                                class="hide">如字段类型是“enum”或“set”，请使用以下格式输入：'a','b','c'…<br>如果需要输入反斜杠(“\”)或单引号(“'”)，请在前面加上反斜杠(如 '\\xyz' 或 'a\'b')。</span></span>
                </th>
                <th>
                    默认<span class="pma_hint"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="" alt="" class="icon ic_b_help"><span
                                class="hide">对于默认值，请只输入单个值，不要加反斜杠或引号，请用此格式：a</span></span></th>
                <th>
                    排序规则
                </th>
                <th>
                    属性
                </th>
                <th>
                    空
                </th>

                <!-- Only for 'Edit' Column(s) -->

                <th>
                    索引
                </th>

                <th>
                    <abbr title="AUTO_INCREMENT">A_I</abbr>
                </th>
                <th>
                    注释
                </th>

                <th>
                    Virtuality
                </th>


            </tr>
            <tr class="odd">

                <td class="center">
                    <!-- column name -->
                    <input id="field_0_1" type="text" name="field_name[0]" maxlength="64" class="textfield" title="字段"
                           size="10" value="">

                </td>
                <td class="center">
                    <!-- column type -->
                    <select class="column_type" name="field_type[0]" id="field_0_2">
                        <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                        <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                        <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                        <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                        <optgroup label="数字">
                            <option title="1 字节整数，有符号范围从 -128 到 127，无符号范围从 0 到 255">TINYINT</option>
                            <option title="2 字节整数，有符号范围从 -32768 到 32767，无符号范围从 0 到 65535">SMALLINT</option>
                            <option title="3 字节整数，有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215">MEDIUMINT</option>
                            <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                            <option title="8 字节整数，有符号范围从 -9223372036854775808 到 9223372036854775807，无符号范围从 0 到 18446744073709551615">
                                BIGINT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="定点数（M，D）- 整数部分（M）最大为 65（默认 10），小数部分（D）最大为 30（默认 0）">DECIMAL</option>
                            <option title="单精度浮点数，取值范围从 -3.402823466E+38 到 -1.175494351E-38、0 以及从 1.175494351E-38 到 3.402823466E+38">
                                FLOAT
                            </option>
                            <option title="双精度浮点数，取值范围从 -1.7976931348623157E+308 到 -2.2250738585072014E-308、0 以及从 2.2250738585072014E-308 到 1.7976931348623157E+308">
                                DOUBLE
                            </option>
                            <option title="DOUBLE 的别名（例外：REAL_AS_FLOAT SQL 模式时它是 FLOAT 的别名）">REAL</option>
                            <option disabled="disabled">-</option>
                            <option title="位类型（M），每个值存储 M 位（默认为 1，最大为 64）">BIT</option>
                            <option title="TINYINT(1) 的别名，零值表示假，非零值表示真">BOOLEAN</option>
                            <option title="BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE 的别名">SERIAL</option>
                        </optgroup>
                        <optgroup label="日期与时间">
                            <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                            <option title="日期与时间，支持的范围从 1000-01-01 00:00:00 到 9999-12-31 23:59:59">DATETIME</option>
                            <option title="时间戳，范围从 1970-01-01 00:00:01 UTC 到 2038-01-09 03:14:07 UTC，存储为自纪元（1970-01-01 00:00:00 UTC）起的秒数">
                                TIMESTAMP
                            </option>
                            <option title="时间，范围从 -838:59:59 到 838:59:59">TIME</option>
                            <option title="四位数（4，默认）或两位数（2）的年份，取值范围从 70（1970）到 69（2069）或从 1901 到 2155 以及 0000">YEAR
                            </option>
                        </optgroup>
                        <optgroup label="文本">
                            <option title="定长（0-255，默认 1）字符串，存储时会向右边补足空格到指定长度">CHAR</option>
                            <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的文本字段，存储时在内容前使用 1 字节表示内容的字节数">TINYTEXT</option>
                            <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMTEXT</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的文本字段，存储时在内容前使用 4 字节表示内容的字节数">LONGTEXT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="类似于 CHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">BINARY</option>
                            <option title="类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">VARBINARY</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的 BLOB 字段，存储时在内容前使用 1 字节表示内容的字节数">TINYBLOB</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的 BLOB 字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMBLOB
                            </option>
                            <option title="最多存储 65535（2^16 - 1）字节的 BLOB 字段，存储时在内容前使用 2 字节表示内容的字节数">BLOB</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的 BLOB 字段，存储时在内容前使用 4 字节表示内容的字节数">LONGBLOB
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="枚举，可从最多 65535 个值的列表中选择或特殊的错误值 ''">ENUM</option>
                            <option title="可从最多 64 个成员中选择集合为一个值">SET</option>
                        </optgroup>
                        <optgroup label="空间">
                            <option title="一种能存储任意类型几何体的类型">GEOMETRY</option>
                            <option title="二维空间中的点">POINT</option>
                            <option title="点之间的线性插值曲线">LINESTRING</option>
                            <option title="多边形">POLYGON</option>
                            <option title="点的集合">MULTIPOINT</option>
                            <option title="点之间的线性插值曲线的集合">MULTILINESTRING</option>
                            <option title="多边形的集合">MULTIPOLYGON</option>
                            <option title="任意类型几何体对象的集合">GEOMETRYCOLLECTION</option>
                        </optgroup>
                        <optgroup label="JSON">
                            <option title="存储并可高效访问 JSON （JavaScript 对象） 文档中的数据">JSON</option>
                        </optgroup>
                    </select></td>
                <td class="center">
                    <!-- column length -->
                    <input id="field_0_3" type="text" name="field_length[0]" size="8" value="" class="textfield">
                    <p class="enum_notice" id="enum_notice_0_3" style="display: none;">
                        <a href="#" class="open_enum_editor">
                            Edit ENUM/SET values </a>
                    </p></td>
                <td class="center">
                    <!-- column default -->

                    <select name="field_default_type[0]" id="field_0_4" class="default_type">
                        <option value="NONE">
                            无
                        </option>
                        <option value="USER_DEFINED">
                            定义：
                        </option>
                        <option value="NULL">
                            NULL
                        </option>
                        <option value="CURRENT_TIMESTAMP">
                            CURRENT_TIMESTAMP
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_default_value[0]" size="12" value="" class="textfield default_value"
                           style="display: none;">
                </td>
                <td class="center">
                    <!-- column collation -->
                    <select lang="en" dir="ltr" name="field_collation[0]" id="field_0_5">
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="亚美尼亚语, 二进制">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="亚美尼亚语, 不区分大小写">armscii8_general_ci</option>
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
                            <option value="cp1250_general_ci" title="中欧 (多语言), 不区分大小写">cp1250_general_ci</option>
                            <option value="cp1250_polish_ci" title="波兰语, 不区分大小写">cp1250_polish_ci</option>
                        </optgroup>
                        <optgroup label="cp1251" title="Windows Cyrillic">
                            <option value="cp1251_bin" title="西里尔语 (多语言), 二进制">cp1251_bin</option>
                            <option value="cp1251_bulgarian_ci" title="保加利亚语, 不区分大小写">cp1251_bulgarian_ci</option>
                            <option value="cp1251_general_ci" title="西里尔语 (多语言), 不区分大小写">cp1251_general_ci</option>
                            <option value="cp1251_general_cs" title="西里尔语 (多语言), 区分大小写">cp1251_general_cs</option>
                            <option value="cp1251_ukrainian_ci" title="乌克兰语, 不区分大小写">cp1251_ukrainian_ci</option>
                        </optgroup>
                        <optgroup label="cp1256" title="Windows Arabic">
                            <option value="cp1256_bin" title="阿拉伯语, 二进制">cp1256_bin</option>
                            <option value="cp1256_general_ci" title="阿拉伯语, 不区分大小写">cp1256_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1257" title="Windows Baltic">
                            <option value="cp1257_bin" title="巴拉克语 (多语言), 二进制">cp1257_bin</option>
                            <option value="cp1257_general_ci" title="巴拉克语 (多语言), 不区分大小写">cp1257_general_ci</option>
                            <option value="cp1257_lithuanian_ci" title="立陶宛语, 不区分大小写">cp1257_lithuanian_ci</option>
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
                            <option value="gb18030_unicode_520_ci" title="Unicode (多语言)">gb18030_unicode_520_ci</option>
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
                            <option value="keybcs2_general_ci" title="捷克斯洛伐克语, 不区分大小写">keybcs2_general_ci</option>
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
                            <option value="latin1_general_ci" title="西欧 (多语言), 不区分大小写">latin1_general_ci</option>
                            <option value="latin1_general_cs" title="西欧 (多语言), 区分大小写">latin1_general_cs</option>
                            <option value="latin1_german1_ci" title="德语 (字典), 不区分大小写">latin1_german1_ci</option>
                            <option value="latin1_german2_ci" title="德语 (电话本), 不区分大小写">latin1_german2_ci</option>
                            <option value="latin1_spanish_ci" title="西班牙语, 不区分大小写">latin1_spanish_ci</option>
                            <option value="latin1_swedish_ci" title="瑞典语, 不区分大小写">latin1_swedish_ci</option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_bin" title="中欧 (多语言), 二进制">latin2_bin</option>
                            <option value="latin2_croatian_ci" title="克罗地亚语, 不区分大小写">latin2_croatian_ci</option>
                            <option value="latin2_czech_cs" title="捷克语, 区分大小写">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="中欧 (多语言), 不区分大小写">latin2_general_ci</option>
                            <option value="latin2_hungarian_ci" title="匈牙利语, 不区分大小写">latin2_hungarian_ci</option>
                        </optgroup>
                        <optgroup label="latin5" title="ISO 8859-9 Turkish">
                            <option value="latin5_bin" title="土耳其语, 二进制">latin5_bin</option>
                            <option value="latin5_turkish_ci" title="土耳其语, 不区分大小写">latin5_turkish_ci</option>
                        </optgroup>
                        <optgroup label="latin7" title="ISO 8859-13 Baltic">
                            <option value="latin7_bin" title="巴拉克语 (多语言), 二进制">latin7_bin</option>
                            <option value="latin7_estonian_cs" title="爱沙尼亚语, 区分大小写">latin7_estonian_cs</option>
                            <option value="latin7_general_ci" title="巴拉克语 (多语言), 不区分大小写">latin7_general_ci</option>
                            <option value="latin7_general_cs" title="巴拉克语 (多语言), 区分大小写">latin7_general_cs</option>
                        </optgroup>
                        <optgroup label="macce" title="Mac Central European">
                            <option value="macce_bin" title="中欧 (多语言), 二进制">macce_bin</option>
                            <option value="macce_general_ci" title="中欧 (多语言), 不区分大小写">macce_general_ci</option>
                        </optgroup>
                        <optgroup label="macroman" title="Mac West European">
                            <option value="macroman_bin" title="西欧 (多语言), 二进制">macroman_bin</option>
                            <option value="macroman_general_ci" title="西欧 (多语言), 不区分大小写">macroman_general_ci</option>
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
                            <option value="ucs2_general_ci" title="Unicode (多语言), 不区分大小写">ucs2_general_ci</option>
                            <option value="ucs2_general_mysql500_ci" title="Unicode (多语言)">ucs2_general_mysql500_ci
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
                            <option value="ucs2_unicode_520_ci" title="Unicode (多语言)">ucs2_unicode_520_ci</option>
                            <option value="ucs2_unicode_ci" title="Unicode (多语言), 不区分大小写">ucs2_unicode_ci</option>
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
                            <option value="utf16_lithuanian_ci" title="立陶宛语, 不区分大小写">utf16_lithuanian_ci</option>
                            <option value="utf16_persian_ci" title="波斯语, 不区分大小写">utf16_persian_ci</option>
                            <option value="utf16_polish_ci" title="波兰语, 不区分大小写">utf16_polish_ci</option>
                            <option value="utf16_roman_ci" title="西欧, 不区分大小写">utf16_roman_ci</option>
                            <option value="utf16_romanian_ci" title="罗马尼亚语, 不区分大小写">utf16_romanian_ci</option>
                            <option value="utf16_sinhala_ci" title="僧伽罗语, 不区分大小写">utf16_sinhala_ci</option>
                            <option value="utf16_slovak_ci" title="斯洛伐克语, 不区分大小写">utf16_slovak_ci</option>
                            <option value="utf16_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf16_slovenian_ci</option>
                            <option value="utf16_spanish2_ci" title="传统西班牙语, 不区分大小写">utf16_spanish2_ci</option>
                            <option value="utf16_spanish_ci" title="西班牙语, 不区分大小写">utf16_spanish_ci</option>
                            <option value="utf16_swedish_ci" title="瑞典语, 不区分大小写">utf16_swedish_ci</option>
                            <option value="utf16_turkish_ci" title="土耳其语, 不区分大小写">utf16_turkish_ci</option>
                            <option value="utf16_unicode_520_ci" title="Unicode (多语言)">utf16_unicode_520_ci</option>
                            <option value="utf16_unicode_ci" title="Unicode (多语言), 不区分大小写">utf16_unicode_ci</option>
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
                            <option value="utf32_lithuanian_ci" title="立陶宛语, 不区分大小写">utf32_lithuanian_ci</option>
                            <option value="utf32_persian_ci" title="波斯语, 不区分大小写">utf32_persian_ci</option>
                            <option value="utf32_polish_ci" title="波兰语, 不区分大小写">utf32_polish_ci</option>
                            <option value="utf32_roman_ci" title="西欧, 不区分大小写">utf32_roman_ci</option>
                            <option value="utf32_romanian_ci" title="罗马尼亚语, 不区分大小写">utf32_romanian_ci</option>
                            <option value="utf32_sinhala_ci" title="僧伽罗语, 不区分大小写">utf32_sinhala_ci</option>
                            <option value="utf32_slovak_ci" title="斯洛伐克语, 不区分大小写">utf32_slovak_ci</option>
                            <option value="utf32_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf32_slovenian_ci</option>
                            <option value="utf32_spanish2_ci" title="传统西班牙语, 不区分大小写">utf32_spanish2_ci</option>
                            <option value="utf32_spanish_ci" title="西班牙语, 不区分大小写">utf32_spanish_ci</option>
                            <option value="utf32_swedish_ci" title="瑞典语, 不区分大小写">utf32_swedish_ci</option>
                            <option value="utf32_turkish_ci" title="土耳其语, 不区分大小写">utf32_turkish_ci</option>
                            <option value="utf32_unicode_520_ci" title="Unicode (多语言)">utf32_unicode_520_ci</option>
                            <option value="utf32_unicode_ci" title="Unicode (多语言), 不区分大小写">utf32_unicode_ci</option>
                            <option value="utf32_vietnamese_ci" title="越南语, 不区分大小写">utf32_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_bin" title="Unicode (多语言), 二进制">utf8_bin</option>
                            <option value="utf8_croatian_ci" title="克罗地亚语, 不区分大小写">utf8_croatian_ci</option>
                            <option value="utf8_czech_ci" title="捷克语, 不区分大小写">utf8_czech_ci</option>
                            <option value="utf8_danish_ci" title="丹麦语, 不区分大小写">utf8_danish_ci</option>
                            <option value="utf8_esperanto_ci" title="世界语, 不区分大小写">utf8_esperanto_ci</option>
                            <option value="utf8_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8_estonian_ci</option>
                            <option value="utf8_general_ci" title="Unicode (多语言), 不区分大小写">utf8_general_ci</option>
                            <option value="utf8_general_mysql500_ci" title="Unicode (多语言)">utf8_general_mysql500_ci
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
                            <option value="utf8_unicode_520_ci" title="Unicode (多语言)">utf8_unicode_520_ci</option>
                            <option value="utf8_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8_unicode_ci</option>
                            <option value="utf8_vietnamese_ci" title="越南语, 不区分大小写">utf8_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8mb4" title="UTF-8 Unicode">
                            <option value="utf8mb4_bin" title="Unicode (多语言), 二进制">utf8mb4_bin</option>
                            <option value="utf8mb4_croatian_ci" title="克罗地亚语, 不区分大小写">utf8mb4_croatian_ci</option>
                            <option value="utf8mb4_czech_ci" title="捷克语, 不区分大小写">utf8mb4_czech_ci</option>
                            <option value="utf8mb4_danish_ci" title="丹麦语, 不区分大小写">utf8mb4_danish_ci</option>
                            <option value="utf8mb4_esperanto_ci" title="世界语, 不区分大小写">utf8mb4_esperanto_ci</option>
                            <option value="utf8mb4_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8mb4_estonian_ci</option>
                            <option value="utf8mb4_general_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_general_ci</option>
                            <option value="utf8mb4_german2_ci" title="德语 (电话本), 不区分大小写">utf8mb4_german2_ci</option>
                            <option value="utf8mb4_hungarian_ci" title="匈牙利语, 不区分大小写">utf8mb4_hungarian_ci</option>
                            <option value="utf8mb4_icelandic_ci" title="冰岛语, 不区分大小写">utf8mb4_icelandic_ci</option>
                            <option value="utf8mb4_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8mb4_latvian_ci</option>
                            <option value="utf8mb4_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8mb4_lithuanian_ci</option>
                            <option value="utf8mb4_persian_ci" title="波斯语, 不区分大小写">utf8mb4_persian_ci</option>
                            <option value="utf8mb4_polish_ci" title="波兰语, 不区分大小写">utf8mb4_polish_ci</option>
                            <option value="utf8mb4_roman_ci" title="西欧, 不区分大小写">utf8mb4_roman_ci</option>
                            <option value="utf8mb4_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8mb4_romanian_ci</option>
                            <option value="utf8mb4_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8mb4_sinhala_ci</option>
                            <option value="utf8mb4_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8mb4_slovak_ci</option>
                            <option value="utf8mb4_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8mb4_slovenian_ci</option>
                            <option value="utf8mb4_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8mb4_spanish2_ci</option>
                            <option value="utf8mb4_spanish_ci" title="西班牙语, 不区分大小写">utf8mb4_spanish_ci</option>
                            <option value="utf8mb4_swedish_ci" title="瑞典语, 不区分大小写">utf8mb4_swedish_ci</option>
                            <option value="utf8mb4_turkish_ci" title="土耳其语, 不区分大小写">utf8mb4_turkish_ci</option>
                            <option value="utf8mb4_unicode_520_ci" title="Unicode (多语言)">utf8mb4_unicode_520_ci</option>
                            <option value="utf8mb4_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_unicode_ci</option>
                            <option value="utf8mb4_vietnamese_ci" title="越南语, 不区分大小写">utf8mb4_vietnamese_ci</option>
                        </optgroup>
                    </select>
                </td>
                <td class="center">
                    <!-- column attribute -->
                    <select style="width: 7em;" name="field_attribute[0]" id="field_0_5">
                        <option value="" selected="selected">
                        </option>
                        <option value="BINARY">
                            BINARY
                        </option>
                        <option value="UNSIGNED">
                            UNSIGNED
                        </option>
                        <option value="UNSIGNED ZEROFILL">
                            UNSIGNED ZEROFILL
                        </option>
                        <option value="on update CURRENT_TIMESTAMP">
                            on update CURRENT_TIMESTAMP
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column NULL -->
                    <input name="field_null[0]" id="field_0_6" type="checkbox" value="NULL" class="allow_null"></td>
                <!-- column indexes, See my other comment about  this 'if'. -->
                <td class="center">
                    <select name="field_key[0]" id="field_0_7" data-index="">
                        <option value="none_0">---</option>
                        <option value="primary_0" title="主键">
                            PRIMARY
                        </option>
                        <option value="unique_0" title="唯一">
                            UNIQUE
                        </option>
                        <option value="index_0" title="索引">
                            INDEX
                        </option>
                        <option value="fulltext_0" title="全文搜索">
                            FULLTEXT
                        </option>
                        <option value="spatial_0" title="空间">
                            SPATIAL
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column auto_increment -->
                    <input name="field_extra[0]" id="field_0_8" type="checkbox" value="AUTO_INCREMENT"></td>
                <td class="center">
                    <!-- column comments -->
                    <input id="field_0_9" type="text" name="field_comments[0]" size="12" maxlength="1024" value=""
                           class="textfield"></td>
                <!-- column virtuality -->
                <td class="center">

                    <select name="field_virtuality[0]" id="field_0_10" class="virtuality">
                        <option value="">
                        </option>
                        <option value="VIRTUAL">
                            VIRTUAL
                        </option>
                        <option value="STORED">
                            STORED
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_expression[0]" size="12" value="" placeholder="Expression"
                           class="textfield expression" style="display: none;">
                </td>
                <!-- move column -->

            </tr>
            <tr class="even">

                <td class="center">
                    <!-- column name -->
                    <input id="field_1_1" type="text" name="field_name[1]" maxlength="64" class="textfield" title="字段"
                           size="10" value="">

                </td>
                <td class="center">
                    <!-- column type -->
                    <select class="column_type" name="field_type[1]" id="field_1_2">
                        <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                        <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                        <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                        <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                        <optgroup label="数字">
                            <option title="1 字节整数，有符号范围从 -128 到 127，无符号范围从 0 到 255">TINYINT</option>
                            <option title="2 字节整数，有符号范围从 -32768 到 32767，无符号范围从 0 到 65535">SMALLINT</option>
                            <option title="3 字节整数，有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215">MEDIUMINT</option>
                            <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                            <option title="8 字节整数，有符号范围从 -9223372036854775808 到 9223372036854775807，无符号范围从 0 到 18446744073709551615">
                                BIGINT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="定点数（M，D）- 整数部分（M）最大为 65（默认 10），小数部分（D）最大为 30（默认 0）">DECIMAL</option>
                            <option title="单精度浮点数，取值范围从 -3.402823466E+38 到 -1.175494351E-38、0 以及从 1.175494351E-38 到 3.402823466E+38">
                                FLOAT
                            </option>
                            <option title="双精度浮点数，取值范围从 -1.7976931348623157E+308 到 -2.2250738585072014E-308、0 以及从 2.2250738585072014E-308 到 1.7976931348623157E+308">
                                DOUBLE
                            </option>
                            <option title="DOUBLE 的别名（例外：REAL_AS_FLOAT SQL 模式时它是 FLOAT 的别名）">REAL</option>
                            <option disabled="disabled">-</option>
                            <option title="位类型（M），每个值存储 M 位（默认为 1，最大为 64）">BIT</option>
                            <option title="TINYINT(1) 的别名，零值表示假，非零值表示真">BOOLEAN</option>
                            <option title="BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE 的别名">SERIAL</option>
                        </optgroup>
                        <optgroup label="日期与时间">
                            <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                            <option title="日期与时间，支持的范围从 1000-01-01 00:00:00 到 9999-12-31 23:59:59">DATETIME</option>
                            <option title="时间戳，范围从 1970-01-01 00:00:01 UTC 到 2038-01-09 03:14:07 UTC，存储为自纪元（1970-01-01 00:00:00 UTC）起的秒数">
                                TIMESTAMP
                            </option>
                            <option title="时间，范围从 -838:59:59 到 838:59:59">TIME</option>
                            <option title="四位数（4，默认）或两位数（2）的年份，取值范围从 70（1970）到 69（2069）或从 1901 到 2155 以及 0000">YEAR
                            </option>
                        </optgroup>
                        <optgroup label="文本">
                            <option title="定长（0-255，默认 1）字符串，存储时会向右边补足空格到指定长度">CHAR</option>
                            <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的文本字段，存储时在内容前使用 1 字节表示内容的字节数">TINYTEXT</option>
                            <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMTEXT</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的文本字段，存储时在内容前使用 4 字节表示内容的字节数">LONGTEXT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="类似于 CHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">BINARY</option>
                            <option title="类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">VARBINARY</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的 BLOB 字段，存储时在内容前使用 1 字节表示内容的字节数">TINYBLOB</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的 BLOB 字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMBLOB
                            </option>
                            <option title="最多存储 65535（2^16 - 1）字节的 BLOB 字段，存储时在内容前使用 2 字节表示内容的字节数">BLOB</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的 BLOB 字段，存储时在内容前使用 4 字节表示内容的字节数">LONGBLOB
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="枚举，可从最多 65535 个值的列表中选择或特殊的错误值 ''">ENUM</option>
                            <option title="可从最多 64 个成员中选择集合为一个值">SET</option>
                        </optgroup>
                        <optgroup label="空间">
                            <option title="一种能存储任意类型几何体的类型">GEOMETRY</option>
                            <option title="二维空间中的点">POINT</option>
                            <option title="点之间的线性插值曲线">LINESTRING</option>
                            <option title="多边形">POLYGON</option>
                            <option title="点的集合">MULTIPOINT</option>
                            <option title="点之间的线性插值曲线的集合">MULTILINESTRING</option>
                            <option title="多边形的集合">MULTIPOLYGON</option>
                            <option title="任意类型几何体对象的集合">GEOMETRYCOLLECTION</option>
                        </optgroup>
                        <optgroup label="JSON">
                            <option title="存储并可高效访问 JSON （JavaScript 对象） 文档中的数据">JSON</option>
                        </optgroup>
                    </select></td>
                <td class="center">
                    <!-- column length -->
                    <input id="field_1_3" type="text" name="field_length[1]" size="8" value="" class="textfield">
                    <p class="enum_notice" id="enum_notice_1_3" style="display: none;">
                        <a href="#" class="open_enum_editor">
                            Edit ENUM/SET values </a>
                    </p></td>
                <td class="center">
                    <!-- column default -->

                    <select name="field_default_type[1]" id="field_1_4" class="default_type">
                        <option value="NONE">
                            无
                        </option>
                        <option value="USER_DEFINED">
                            定义：
                        </option>
                        <option value="NULL">
                            NULL
                        </option>
                        <option value="CURRENT_TIMESTAMP">
                            CURRENT_TIMESTAMP
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_default_value[1]" size="12" value="" class="textfield default_value"
                           style="display: none;">
                </td>
                <td class="center">
                    <!-- column collation -->
                    <select lang="en" dir="ltr" name="field_collation[1]" id="field_1_5">
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="亚美尼亚语, 二进制">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="亚美尼亚语, 不区分大小写">armscii8_general_ci</option>
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
                            <option value="cp1250_general_ci" title="中欧 (多语言), 不区分大小写">cp1250_general_ci</option>
                            <option value="cp1250_polish_ci" title="波兰语, 不区分大小写">cp1250_polish_ci</option>
                        </optgroup>
                        <optgroup label="cp1251" title="Windows Cyrillic">
                            <option value="cp1251_bin" title="西里尔语 (多语言), 二进制">cp1251_bin</option>
                            <option value="cp1251_bulgarian_ci" title="保加利亚语, 不区分大小写">cp1251_bulgarian_ci</option>
                            <option value="cp1251_general_ci" title="西里尔语 (多语言), 不区分大小写">cp1251_general_ci</option>
                            <option value="cp1251_general_cs" title="西里尔语 (多语言), 区分大小写">cp1251_general_cs</option>
                            <option value="cp1251_ukrainian_ci" title="乌克兰语, 不区分大小写">cp1251_ukrainian_ci</option>
                        </optgroup>
                        <optgroup label="cp1256" title="Windows Arabic">
                            <option value="cp1256_bin" title="阿拉伯语, 二进制">cp1256_bin</option>
                            <option value="cp1256_general_ci" title="阿拉伯语, 不区分大小写">cp1256_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1257" title="Windows Baltic">
                            <option value="cp1257_bin" title="巴拉克语 (多语言), 二进制">cp1257_bin</option>
                            <option value="cp1257_general_ci" title="巴拉克语 (多语言), 不区分大小写">cp1257_general_ci</option>
                            <option value="cp1257_lithuanian_ci" title="立陶宛语, 不区分大小写">cp1257_lithuanian_ci</option>
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
                            <option value="gb18030_unicode_520_ci" title="Unicode (多语言)">gb18030_unicode_520_ci</option>
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
                            <option value="keybcs2_general_ci" title="捷克斯洛伐克语, 不区分大小写">keybcs2_general_ci</option>
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
                            <option value="latin1_general_ci" title="西欧 (多语言), 不区分大小写">latin1_general_ci</option>
                            <option value="latin1_general_cs" title="西欧 (多语言), 区分大小写">latin1_general_cs</option>
                            <option value="latin1_german1_ci" title="德语 (字典), 不区分大小写">latin1_german1_ci</option>
                            <option value="latin1_german2_ci" title="德语 (电话本), 不区分大小写">latin1_german2_ci</option>
                            <option value="latin1_spanish_ci" title="西班牙语, 不区分大小写">latin1_spanish_ci</option>
                            <option value="latin1_swedish_ci" title="瑞典语, 不区分大小写">latin1_swedish_ci</option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_bin" title="中欧 (多语言), 二进制">latin2_bin</option>
                            <option value="latin2_croatian_ci" title="克罗地亚语, 不区分大小写">latin2_croatian_ci</option>
                            <option value="latin2_czech_cs" title="捷克语, 区分大小写">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="中欧 (多语言), 不区分大小写">latin2_general_ci</option>
                            <option value="latin2_hungarian_ci" title="匈牙利语, 不区分大小写">latin2_hungarian_ci</option>
                        </optgroup>
                        <optgroup label="latin5" title="ISO 8859-9 Turkish">
                            <option value="latin5_bin" title="土耳其语, 二进制">latin5_bin</option>
                            <option value="latin5_turkish_ci" title="土耳其语, 不区分大小写">latin5_turkish_ci</option>
                        </optgroup>
                        <optgroup label="latin7" title="ISO 8859-13 Baltic">
                            <option value="latin7_bin" title="巴拉克语 (多语言), 二进制">latin7_bin</option>
                            <option value="latin7_estonian_cs" title="爱沙尼亚语, 区分大小写">latin7_estonian_cs</option>
                            <option value="latin7_general_ci" title="巴拉克语 (多语言), 不区分大小写">latin7_general_ci</option>
                            <option value="latin7_general_cs" title="巴拉克语 (多语言), 区分大小写">latin7_general_cs</option>
                        </optgroup>
                        <optgroup label="macce" title="Mac Central European">
                            <option value="macce_bin" title="中欧 (多语言), 二进制">macce_bin</option>
                            <option value="macce_general_ci" title="中欧 (多语言), 不区分大小写">macce_general_ci</option>
                        </optgroup>
                        <optgroup label="macroman" title="Mac West European">
                            <option value="macroman_bin" title="西欧 (多语言), 二进制">macroman_bin</option>
                            <option value="macroman_general_ci" title="西欧 (多语言), 不区分大小写">macroman_general_ci</option>
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
                            <option value="ucs2_general_ci" title="Unicode (多语言), 不区分大小写">ucs2_general_ci</option>
                            <option value="ucs2_general_mysql500_ci" title="Unicode (多语言)">ucs2_general_mysql500_ci
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
                            <option value="ucs2_unicode_520_ci" title="Unicode (多语言)">ucs2_unicode_520_ci</option>
                            <option value="ucs2_unicode_ci" title="Unicode (多语言), 不区分大小写">ucs2_unicode_ci</option>
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
                            <option value="utf16_lithuanian_ci" title="立陶宛语, 不区分大小写">utf16_lithuanian_ci</option>
                            <option value="utf16_persian_ci" title="波斯语, 不区分大小写">utf16_persian_ci</option>
                            <option value="utf16_polish_ci" title="波兰语, 不区分大小写">utf16_polish_ci</option>
                            <option value="utf16_roman_ci" title="西欧, 不区分大小写">utf16_roman_ci</option>
                            <option value="utf16_romanian_ci" title="罗马尼亚语, 不区分大小写">utf16_romanian_ci</option>
                            <option value="utf16_sinhala_ci" title="僧伽罗语, 不区分大小写">utf16_sinhala_ci</option>
                            <option value="utf16_slovak_ci" title="斯洛伐克语, 不区分大小写">utf16_slovak_ci</option>
                            <option value="utf16_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf16_slovenian_ci</option>
                            <option value="utf16_spanish2_ci" title="传统西班牙语, 不区分大小写">utf16_spanish2_ci</option>
                            <option value="utf16_spanish_ci" title="西班牙语, 不区分大小写">utf16_spanish_ci</option>
                            <option value="utf16_swedish_ci" title="瑞典语, 不区分大小写">utf16_swedish_ci</option>
                            <option value="utf16_turkish_ci" title="土耳其语, 不区分大小写">utf16_turkish_ci</option>
                            <option value="utf16_unicode_520_ci" title="Unicode (多语言)">utf16_unicode_520_ci</option>
                            <option value="utf16_unicode_ci" title="Unicode (多语言), 不区分大小写">utf16_unicode_ci</option>
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
                            <option value="utf32_lithuanian_ci" title="立陶宛语, 不区分大小写">utf32_lithuanian_ci</option>
                            <option value="utf32_persian_ci" title="波斯语, 不区分大小写">utf32_persian_ci</option>
                            <option value="utf32_polish_ci" title="波兰语, 不区分大小写">utf32_polish_ci</option>
                            <option value="utf32_roman_ci" title="西欧, 不区分大小写">utf32_roman_ci</option>
                            <option value="utf32_romanian_ci" title="罗马尼亚语, 不区分大小写">utf32_romanian_ci</option>
                            <option value="utf32_sinhala_ci" title="僧伽罗语, 不区分大小写">utf32_sinhala_ci</option>
                            <option value="utf32_slovak_ci" title="斯洛伐克语, 不区分大小写">utf32_slovak_ci</option>
                            <option value="utf32_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf32_slovenian_ci</option>
                            <option value="utf32_spanish2_ci" title="传统西班牙语, 不区分大小写">utf32_spanish2_ci</option>
                            <option value="utf32_spanish_ci" title="西班牙语, 不区分大小写">utf32_spanish_ci</option>
                            <option value="utf32_swedish_ci" title="瑞典语, 不区分大小写">utf32_swedish_ci</option>
                            <option value="utf32_turkish_ci" title="土耳其语, 不区分大小写">utf32_turkish_ci</option>
                            <option value="utf32_unicode_520_ci" title="Unicode (多语言)">utf32_unicode_520_ci</option>
                            <option value="utf32_unicode_ci" title="Unicode (多语言), 不区分大小写">utf32_unicode_ci</option>
                            <option value="utf32_vietnamese_ci" title="越南语, 不区分大小写">utf32_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_bin" title="Unicode (多语言), 二进制">utf8_bin</option>
                            <option value="utf8_croatian_ci" title="克罗地亚语, 不区分大小写">utf8_croatian_ci</option>
                            <option value="utf8_czech_ci" title="捷克语, 不区分大小写">utf8_czech_ci</option>
                            <option value="utf8_danish_ci" title="丹麦语, 不区分大小写">utf8_danish_ci</option>
                            <option value="utf8_esperanto_ci" title="世界语, 不区分大小写">utf8_esperanto_ci</option>
                            <option value="utf8_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8_estonian_ci</option>
                            <option value="utf8_general_ci" title="Unicode (多语言), 不区分大小写">utf8_general_ci</option>
                            <option value="utf8_general_mysql500_ci" title="Unicode (多语言)">utf8_general_mysql500_ci
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
                            <option value="utf8_unicode_520_ci" title="Unicode (多语言)">utf8_unicode_520_ci</option>
                            <option value="utf8_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8_unicode_ci</option>
                            <option value="utf8_vietnamese_ci" title="越南语, 不区分大小写">utf8_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8mb4" title="UTF-8 Unicode">
                            <option value="utf8mb4_bin" title="Unicode (多语言), 二进制">utf8mb4_bin</option>
                            <option value="utf8mb4_croatian_ci" title="克罗地亚语, 不区分大小写">utf8mb4_croatian_ci</option>
                            <option value="utf8mb4_czech_ci" title="捷克语, 不区分大小写">utf8mb4_czech_ci</option>
                            <option value="utf8mb4_danish_ci" title="丹麦语, 不区分大小写">utf8mb4_danish_ci</option>
                            <option value="utf8mb4_esperanto_ci" title="世界语, 不区分大小写">utf8mb4_esperanto_ci</option>
                            <option value="utf8mb4_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8mb4_estonian_ci</option>
                            <option value="utf8mb4_general_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_general_ci</option>
                            <option value="utf8mb4_german2_ci" title="德语 (电话本), 不区分大小写">utf8mb4_german2_ci</option>
                            <option value="utf8mb4_hungarian_ci" title="匈牙利语, 不区分大小写">utf8mb4_hungarian_ci</option>
                            <option value="utf8mb4_icelandic_ci" title="冰岛语, 不区分大小写">utf8mb4_icelandic_ci</option>
                            <option value="utf8mb4_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8mb4_latvian_ci</option>
                            <option value="utf8mb4_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8mb4_lithuanian_ci</option>
                            <option value="utf8mb4_persian_ci" title="波斯语, 不区分大小写">utf8mb4_persian_ci</option>
                            <option value="utf8mb4_polish_ci" title="波兰语, 不区分大小写">utf8mb4_polish_ci</option>
                            <option value="utf8mb4_roman_ci" title="西欧, 不区分大小写">utf8mb4_roman_ci</option>
                            <option value="utf8mb4_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8mb4_romanian_ci</option>
                            <option value="utf8mb4_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8mb4_sinhala_ci</option>
                            <option value="utf8mb4_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8mb4_slovak_ci</option>
                            <option value="utf8mb4_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8mb4_slovenian_ci</option>
                            <option value="utf8mb4_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8mb4_spanish2_ci</option>
                            <option value="utf8mb4_spanish_ci" title="西班牙语, 不区分大小写">utf8mb4_spanish_ci</option>
                            <option value="utf8mb4_swedish_ci" title="瑞典语, 不区分大小写">utf8mb4_swedish_ci</option>
                            <option value="utf8mb4_turkish_ci" title="土耳其语, 不区分大小写">utf8mb4_turkish_ci</option>
                            <option value="utf8mb4_unicode_520_ci" title="Unicode (多语言)">utf8mb4_unicode_520_ci</option>
                            <option value="utf8mb4_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_unicode_ci</option>
                            <option value="utf8mb4_vietnamese_ci" title="越南语, 不区分大小写">utf8mb4_vietnamese_ci</option>
                        </optgroup>
                    </select>
                </td>
                <td class="center">
                    <!-- column attribute -->
                    <select style="width: 7em;" name="field_attribute[1]" id="field_1_5">
                        <option value="" selected="selected">
                        </option>
                        <option value="BINARY">
                            BINARY
                        </option>
                        <option value="UNSIGNED">
                            UNSIGNED
                        </option>
                        <option value="UNSIGNED ZEROFILL">
                            UNSIGNED ZEROFILL
                        </option>
                        <option value="on update CURRENT_TIMESTAMP">
                            on update CURRENT_TIMESTAMP
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column NULL -->
                    <input name="field_null[1]" id="field_1_6" type="checkbox" value="NULL" class="allow_null"></td>
                <!-- column indexes, See my other comment about  this 'if'. -->
                <td class="center">
                    <select name="field_key[1]" id="field_1_7" data-index="">
                        <option value="none_1">---</option>
                        <option value="primary_1" title="主键">
                            PRIMARY
                        </option>
                        <option value="unique_1" title="唯一">
                            UNIQUE
                        </option>
                        <option value="index_1" title="索引">
                            INDEX
                        </option>
                        <option value="fulltext_1" title="全文搜索">
                            FULLTEXT
                        </option>
                        <option value="spatial_1" title="空间">
                            SPATIAL
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column auto_increment -->
                    <input name="field_extra[1]" id="field_1_8" type="checkbox" value="AUTO_INCREMENT"></td>
                <td class="center">
                    <!-- column comments -->
                    <input id="field_1_9" type="text" name="field_comments[1]" size="12" maxlength="1024" value=""
                           class="textfield"></td>
                <!-- column virtuality -->
                <td class="center">

                    <select name="field_virtuality[1]" id="field_1_10" class="virtuality">
                        <option value="">
                        </option>
                        <option value="VIRTUAL">
                            VIRTUAL
                        </option>
                        <option value="STORED">
                            STORED
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_expression[1]" size="12" value="" placeholder="Expression"
                           class="textfield expression" style="display: none;">
                </td>
                <!-- move column -->

            </tr>
            <tr class="odd">

                <td class="center">
                    <!-- column name -->
                    <input id="field_2_1" type="text" name="field_name[2]" maxlength="64" class="textfield" title="字段"
                           size="10" value="">

                </td>
                <td class="center">
                    <!-- column type -->
                    <select class="column_type" name="field_type[2]" id="field_2_2">
                        <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                        <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                        <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                        <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                        <optgroup label="数字">
                            <option title="1 字节整数，有符号范围从 -128 到 127，无符号范围从 0 到 255">TINYINT</option>
                            <option title="2 字节整数，有符号范围从 -32768 到 32767，无符号范围从 0 到 65535">SMALLINT</option>
                            <option title="3 字节整数，有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215">MEDIUMINT</option>
                            <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                            <option title="8 字节整数，有符号范围从 -9223372036854775808 到 9223372036854775807，无符号范围从 0 到 18446744073709551615">
                                BIGINT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="定点数（M，D）- 整数部分（M）最大为 65（默认 10），小数部分（D）最大为 30（默认 0）">DECIMAL</option>
                            <option title="单精度浮点数，取值范围从 -3.402823466E+38 到 -1.175494351E-38、0 以及从 1.175494351E-38 到 3.402823466E+38">
                                FLOAT
                            </option>
                            <option title="双精度浮点数，取值范围从 -1.7976931348623157E+308 到 -2.2250738585072014E-308、0 以及从 2.2250738585072014E-308 到 1.7976931348623157E+308">
                                DOUBLE
                            </option>
                            <option title="DOUBLE 的别名（例外：REAL_AS_FLOAT SQL 模式时它是 FLOAT 的别名）">REAL</option>
                            <option disabled="disabled">-</option>
                            <option title="位类型（M），每个值存储 M 位（默认为 1，最大为 64）">BIT</option>
                            <option title="TINYINT(1) 的别名，零值表示假，非零值表示真">BOOLEAN</option>
                            <option title="BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE 的别名">SERIAL</option>
                        </optgroup>
                        <optgroup label="日期与时间">
                            <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                            <option title="日期与时间，支持的范围从 1000-01-01 00:00:00 到 9999-12-31 23:59:59">DATETIME</option>
                            <option title="时间戳，范围从 1970-01-01 00:00:01 UTC 到 2038-01-09 03:14:07 UTC，存储为自纪元（1970-01-01 00:00:00 UTC）起的秒数">
                                TIMESTAMP
                            </option>
                            <option title="时间，范围从 -838:59:59 到 838:59:59">TIME</option>
                            <option title="四位数（4，默认）或两位数（2）的年份，取值范围从 70（1970）到 69（2069）或从 1901 到 2155 以及 0000">YEAR
                            </option>
                        </optgroup>
                        <optgroup label="文本">
                            <option title="定长（0-255，默认 1）字符串，存储时会向右边补足空格到指定长度">CHAR</option>
                            <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的文本字段，存储时在内容前使用 1 字节表示内容的字节数">TINYTEXT</option>
                            <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMTEXT</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的文本字段，存储时在内容前使用 4 字节表示内容的字节数">LONGTEXT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="类似于 CHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">BINARY</option>
                            <option title="类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">VARBINARY</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的 BLOB 字段，存储时在内容前使用 1 字节表示内容的字节数">TINYBLOB</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的 BLOB 字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMBLOB
                            </option>
                            <option title="最多存储 65535（2^16 - 1）字节的 BLOB 字段，存储时在内容前使用 2 字节表示内容的字节数">BLOB</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的 BLOB 字段，存储时在内容前使用 4 字节表示内容的字节数">LONGBLOB
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="枚举，可从最多 65535 个值的列表中选择或特殊的错误值 ''">ENUM</option>
                            <option title="可从最多 64 个成员中选择集合为一个值">SET</option>
                        </optgroup>
                        <optgroup label="空间">
                            <option title="一种能存储任意类型几何体的类型">GEOMETRY</option>
                            <option title="二维空间中的点">POINT</option>
                            <option title="点之间的线性插值曲线">LINESTRING</option>
                            <option title="多边形">POLYGON</option>
                            <option title="点的集合">MULTIPOINT</option>
                            <option title="点之间的线性插值曲线的集合">MULTILINESTRING</option>
                            <option title="多边形的集合">MULTIPOLYGON</option>
                            <option title="任意类型几何体对象的集合">GEOMETRYCOLLECTION</option>
                        </optgroup>
                        <optgroup label="JSON">
                            <option title="存储并可高效访问 JSON （JavaScript 对象） 文档中的数据">JSON</option>
                        </optgroup>
                    </select></td>
                <td class="center">
                    <!-- column length -->
                    <input id="field_2_3" type="text" name="field_length[2]" size="8" value="" class="textfield">
                    <p class="enum_notice" id="enum_notice_2_3" style="display: none;">
                        <a href="#" class="open_enum_editor">
                            Edit ENUM/SET values </a>
                    </p></td>
                <td class="center">
                    <!-- column default -->

                    <select name="field_default_type[2]" id="field_2_4" class="default_type">
                        <option value="NONE">
                            无
                        </option>
                        <option value="USER_DEFINED">
                            定义：
                        </option>
                        <option value="NULL">
                            NULL
                        </option>
                        <option value="CURRENT_TIMESTAMP">
                            CURRENT_TIMESTAMP
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_default_value[2]" size="12" value="" class="textfield default_value"
                           style="display: none;">
                </td>
                <td class="center">
                    <!-- column collation -->
                    <select lang="en" dir="ltr" name="field_collation[2]" id="field_2_5">
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="亚美尼亚语, 二进制">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="亚美尼亚语, 不区分大小写">armscii8_general_ci</option>
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
                            <option value="cp1250_general_ci" title="中欧 (多语言), 不区分大小写">cp1250_general_ci</option>
                            <option value="cp1250_polish_ci" title="波兰语, 不区分大小写">cp1250_polish_ci</option>
                        </optgroup>
                        <optgroup label="cp1251" title="Windows Cyrillic">
                            <option value="cp1251_bin" title="西里尔语 (多语言), 二进制">cp1251_bin</option>
                            <option value="cp1251_bulgarian_ci" title="保加利亚语, 不区分大小写">cp1251_bulgarian_ci</option>
                            <option value="cp1251_general_ci" title="西里尔语 (多语言), 不区分大小写">cp1251_general_ci</option>
                            <option value="cp1251_general_cs" title="西里尔语 (多语言), 区分大小写">cp1251_general_cs</option>
                            <option value="cp1251_ukrainian_ci" title="乌克兰语, 不区分大小写">cp1251_ukrainian_ci</option>
                        </optgroup>
                        <optgroup label="cp1256" title="Windows Arabic">
                            <option value="cp1256_bin" title="阿拉伯语, 二进制">cp1256_bin</option>
                            <option value="cp1256_general_ci" title="阿拉伯语, 不区分大小写">cp1256_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1257" title="Windows Baltic">
                            <option value="cp1257_bin" title="巴拉克语 (多语言), 二进制">cp1257_bin</option>
                            <option value="cp1257_general_ci" title="巴拉克语 (多语言), 不区分大小写">cp1257_general_ci</option>
                            <option value="cp1257_lithuanian_ci" title="立陶宛语, 不区分大小写">cp1257_lithuanian_ci</option>
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
                            <option value="gb18030_unicode_520_ci" title="Unicode (多语言)">gb18030_unicode_520_ci</option>
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
                            <option value="keybcs2_general_ci" title="捷克斯洛伐克语, 不区分大小写">keybcs2_general_ci</option>
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
                            <option value="latin1_general_ci" title="西欧 (多语言), 不区分大小写">latin1_general_ci</option>
                            <option value="latin1_general_cs" title="西欧 (多语言), 区分大小写">latin1_general_cs</option>
                            <option value="latin1_german1_ci" title="德语 (字典), 不区分大小写">latin1_german1_ci</option>
                            <option value="latin1_german2_ci" title="德语 (电话本), 不区分大小写">latin1_german2_ci</option>
                            <option value="latin1_spanish_ci" title="西班牙语, 不区分大小写">latin1_spanish_ci</option>
                            <option value="latin1_swedish_ci" title="瑞典语, 不区分大小写">latin1_swedish_ci</option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_bin" title="中欧 (多语言), 二进制">latin2_bin</option>
                            <option value="latin2_croatian_ci" title="克罗地亚语, 不区分大小写">latin2_croatian_ci</option>
                            <option value="latin2_czech_cs" title="捷克语, 区分大小写">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="中欧 (多语言), 不区分大小写">latin2_general_ci</option>
                            <option value="latin2_hungarian_ci" title="匈牙利语, 不区分大小写">latin2_hungarian_ci</option>
                        </optgroup>
                        <optgroup label="latin5" title="ISO 8859-9 Turkish">
                            <option value="latin5_bin" title="土耳其语, 二进制">latin5_bin</option>
                            <option value="latin5_turkish_ci" title="土耳其语, 不区分大小写">latin5_turkish_ci</option>
                        </optgroup>
                        <optgroup label="latin7" title="ISO 8859-13 Baltic">
                            <option value="latin7_bin" title="巴拉克语 (多语言), 二进制">latin7_bin</option>
                            <option value="latin7_estonian_cs" title="爱沙尼亚语, 区分大小写">latin7_estonian_cs</option>
                            <option value="latin7_general_ci" title="巴拉克语 (多语言), 不区分大小写">latin7_general_ci</option>
                            <option value="latin7_general_cs" title="巴拉克语 (多语言), 区分大小写">latin7_general_cs</option>
                        </optgroup>
                        <optgroup label="macce" title="Mac Central European">
                            <option value="macce_bin" title="中欧 (多语言), 二进制">macce_bin</option>
                            <option value="macce_general_ci" title="中欧 (多语言), 不区分大小写">macce_general_ci</option>
                        </optgroup>
                        <optgroup label="macroman" title="Mac West European">
                            <option value="macroman_bin" title="西欧 (多语言), 二进制">macroman_bin</option>
                            <option value="macroman_general_ci" title="西欧 (多语言), 不区分大小写">macroman_general_ci</option>
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
                            <option value="ucs2_general_ci" title="Unicode (多语言), 不区分大小写">ucs2_general_ci</option>
                            <option value="ucs2_general_mysql500_ci" title="Unicode (多语言)">ucs2_general_mysql500_ci
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
                            <option value="ucs2_unicode_520_ci" title="Unicode (多语言)">ucs2_unicode_520_ci</option>
                            <option value="ucs2_unicode_ci" title="Unicode (多语言), 不区分大小写">ucs2_unicode_ci</option>
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
                            <option value="utf16_lithuanian_ci" title="立陶宛语, 不区分大小写">utf16_lithuanian_ci</option>
                            <option value="utf16_persian_ci" title="波斯语, 不区分大小写">utf16_persian_ci</option>
                            <option value="utf16_polish_ci" title="波兰语, 不区分大小写">utf16_polish_ci</option>
                            <option value="utf16_roman_ci" title="西欧, 不区分大小写">utf16_roman_ci</option>
                            <option value="utf16_romanian_ci" title="罗马尼亚语, 不区分大小写">utf16_romanian_ci</option>
                            <option value="utf16_sinhala_ci" title="僧伽罗语, 不区分大小写">utf16_sinhala_ci</option>
                            <option value="utf16_slovak_ci" title="斯洛伐克语, 不区分大小写">utf16_slovak_ci</option>
                            <option value="utf16_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf16_slovenian_ci</option>
                            <option value="utf16_spanish2_ci" title="传统西班牙语, 不区分大小写">utf16_spanish2_ci</option>
                            <option value="utf16_spanish_ci" title="西班牙语, 不区分大小写">utf16_spanish_ci</option>
                            <option value="utf16_swedish_ci" title="瑞典语, 不区分大小写">utf16_swedish_ci</option>
                            <option value="utf16_turkish_ci" title="土耳其语, 不区分大小写">utf16_turkish_ci</option>
                            <option value="utf16_unicode_520_ci" title="Unicode (多语言)">utf16_unicode_520_ci</option>
                            <option value="utf16_unicode_ci" title="Unicode (多语言), 不区分大小写">utf16_unicode_ci</option>
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
                            <option value="utf32_lithuanian_ci" title="立陶宛语, 不区分大小写">utf32_lithuanian_ci</option>
                            <option value="utf32_persian_ci" title="波斯语, 不区分大小写">utf32_persian_ci</option>
                            <option value="utf32_polish_ci" title="波兰语, 不区分大小写">utf32_polish_ci</option>
                            <option value="utf32_roman_ci" title="西欧, 不区分大小写">utf32_roman_ci</option>
                            <option value="utf32_romanian_ci" title="罗马尼亚语, 不区分大小写">utf32_romanian_ci</option>
                            <option value="utf32_sinhala_ci" title="僧伽罗语, 不区分大小写">utf32_sinhala_ci</option>
                            <option value="utf32_slovak_ci" title="斯洛伐克语, 不区分大小写">utf32_slovak_ci</option>
                            <option value="utf32_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf32_slovenian_ci</option>
                            <option value="utf32_spanish2_ci" title="传统西班牙语, 不区分大小写">utf32_spanish2_ci</option>
                            <option value="utf32_spanish_ci" title="西班牙语, 不区分大小写">utf32_spanish_ci</option>
                            <option value="utf32_swedish_ci" title="瑞典语, 不区分大小写">utf32_swedish_ci</option>
                            <option value="utf32_turkish_ci" title="土耳其语, 不区分大小写">utf32_turkish_ci</option>
                            <option value="utf32_unicode_520_ci" title="Unicode (多语言)">utf32_unicode_520_ci</option>
                            <option value="utf32_unicode_ci" title="Unicode (多语言), 不区分大小写">utf32_unicode_ci</option>
                            <option value="utf32_vietnamese_ci" title="越南语, 不区分大小写">utf32_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_bin" title="Unicode (多语言), 二进制">utf8_bin</option>
                            <option value="utf8_croatian_ci" title="克罗地亚语, 不区分大小写">utf8_croatian_ci</option>
                            <option value="utf8_czech_ci" title="捷克语, 不区分大小写">utf8_czech_ci</option>
                            <option value="utf8_danish_ci" title="丹麦语, 不区分大小写">utf8_danish_ci</option>
                            <option value="utf8_esperanto_ci" title="世界语, 不区分大小写">utf8_esperanto_ci</option>
                            <option value="utf8_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8_estonian_ci</option>
                            <option value="utf8_general_ci" title="Unicode (多语言), 不区分大小写">utf8_general_ci</option>
                            <option value="utf8_general_mysql500_ci" title="Unicode (多语言)">utf8_general_mysql500_ci
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
                            <option value="utf8_unicode_520_ci" title="Unicode (多语言)">utf8_unicode_520_ci</option>
                            <option value="utf8_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8_unicode_ci</option>
                            <option value="utf8_vietnamese_ci" title="越南语, 不区分大小写">utf8_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8mb4" title="UTF-8 Unicode">
                            <option value="utf8mb4_bin" title="Unicode (多语言), 二进制">utf8mb4_bin</option>
                            <option value="utf8mb4_croatian_ci" title="克罗地亚语, 不区分大小写">utf8mb4_croatian_ci</option>
                            <option value="utf8mb4_czech_ci" title="捷克语, 不区分大小写">utf8mb4_czech_ci</option>
                            <option value="utf8mb4_danish_ci" title="丹麦语, 不区分大小写">utf8mb4_danish_ci</option>
                            <option value="utf8mb4_esperanto_ci" title="世界语, 不区分大小写">utf8mb4_esperanto_ci</option>
                            <option value="utf8mb4_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8mb4_estonian_ci</option>
                            <option value="utf8mb4_general_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_general_ci</option>
                            <option value="utf8mb4_german2_ci" title="德语 (电话本), 不区分大小写">utf8mb4_german2_ci</option>
                            <option value="utf8mb4_hungarian_ci" title="匈牙利语, 不区分大小写">utf8mb4_hungarian_ci</option>
                            <option value="utf8mb4_icelandic_ci" title="冰岛语, 不区分大小写">utf8mb4_icelandic_ci</option>
                            <option value="utf8mb4_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8mb4_latvian_ci</option>
                            <option value="utf8mb4_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8mb4_lithuanian_ci</option>
                            <option value="utf8mb4_persian_ci" title="波斯语, 不区分大小写">utf8mb4_persian_ci</option>
                            <option value="utf8mb4_polish_ci" title="波兰语, 不区分大小写">utf8mb4_polish_ci</option>
                            <option value="utf8mb4_roman_ci" title="西欧, 不区分大小写">utf8mb4_roman_ci</option>
                            <option value="utf8mb4_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8mb4_romanian_ci</option>
                            <option value="utf8mb4_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8mb4_sinhala_ci</option>
                            <option value="utf8mb4_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8mb4_slovak_ci</option>
                            <option value="utf8mb4_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8mb4_slovenian_ci</option>
                            <option value="utf8mb4_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8mb4_spanish2_ci</option>
                            <option value="utf8mb4_spanish_ci" title="西班牙语, 不区分大小写">utf8mb4_spanish_ci</option>
                            <option value="utf8mb4_swedish_ci" title="瑞典语, 不区分大小写">utf8mb4_swedish_ci</option>
                            <option value="utf8mb4_turkish_ci" title="土耳其语, 不区分大小写">utf8mb4_turkish_ci</option>
                            <option value="utf8mb4_unicode_520_ci" title="Unicode (多语言)">utf8mb4_unicode_520_ci</option>
                            <option value="utf8mb4_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_unicode_ci</option>
                            <option value="utf8mb4_vietnamese_ci" title="越南语, 不区分大小写">utf8mb4_vietnamese_ci</option>
                        </optgroup>
                    </select>
                </td>
                <td class="center">
                    <!-- column attribute -->
                    <select style="width: 7em;" name="field_attribute[2]" id="field_2_5">
                        <option value="" selected="selected">
                        </option>
                        <option value="BINARY">
                            BINARY
                        </option>
                        <option value="UNSIGNED">
                            UNSIGNED
                        </option>
                        <option value="UNSIGNED ZEROFILL">
                            UNSIGNED ZEROFILL
                        </option>
                        <option value="on update CURRENT_TIMESTAMP">
                            on update CURRENT_TIMESTAMP
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column NULL -->
                    <input name="field_null[2]" id="field_2_6" type="checkbox" value="NULL" class="allow_null"></td>
                <!-- column indexes, See my other comment about  this 'if'. -->
                <td class="center">
                    <select name="field_key[2]" id="field_2_7" data-index="">
                        <option value="none_2">---</option>
                        <option value="primary_2" title="主键">
                            PRIMARY
                        </option>
                        <option value="unique_2" title="唯一">
                            UNIQUE
                        </option>
                        <option value="index_2" title="索引">
                            INDEX
                        </option>
                        <option value="fulltext_2" title="全文搜索">
                            FULLTEXT
                        </option>
                        <option value="spatial_2" title="空间">
                            SPATIAL
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column auto_increment -->
                    <input name="field_extra[2]" id="field_2_8" type="checkbox" value="AUTO_INCREMENT"></td>
                <td class="center">
                    <!-- column comments -->
                    <input id="field_2_9" type="text" name="field_comments[2]" size="12" maxlength="1024" value=""
                           class="textfield"></td>
                <!-- column virtuality -->
                <td class="center">

                    <select name="field_virtuality[2]" id="field_2_10" class="virtuality">
                        <option value="">
                        </option>
                        <option value="VIRTUAL">
                            VIRTUAL
                        </option>
                        <option value="STORED">
                            STORED
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_expression[2]" size="12" value="" placeholder="Expression"
                           class="textfield expression" style="display: none;">
                </td>
                <!-- move column -->

            </tr>
            <tr class="even">

                <td class="center">
                    <!-- column name -->
                    <input id="field_3_1" type="text" name="field_name[3]" maxlength="64" class="textfield" title="字段"
                           size="10" value="">

                </td>
                <td class="center">
                    <!-- column type -->
                    <select class="column_type" name="field_type[3]" id="field_3_2">
                        <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                        <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                        <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                        <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                        <optgroup label="数字">
                            <option title="1 字节整数，有符号范围从 -128 到 127，无符号范围从 0 到 255">TINYINT</option>
                            <option title="2 字节整数，有符号范围从 -32768 到 32767，无符号范围从 0 到 65535">SMALLINT</option>
                            <option title="3 字节整数，有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215">MEDIUMINT</option>
                            <option title="4 字节整数，有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295">INT</option>
                            <option title="8 字节整数，有符号范围从 -9223372036854775808 到 9223372036854775807，无符号范围从 0 到 18446744073709551615">
                                BIGINT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="定点数（M，D）- 整数部分（M）最大为 65（默认 10），小数部分（D）最大为 30（默认 0）">DECIMAL</option>
                            <option title="单精度浮点数，取值范围从 -3.402823466E+38 到 -1.175494351E-38、0 以及从 1.175494351E-38 到 3.402823466E+38">
                                FLOAT
                            </option>
                            <option title="双精度浮点数，取值范围从 -1.7976931348623157E+308 到 -2.2250738585072014E-308、0 以及从 2.2250738585072014E-308 到 1.7976931348623157E+308">
                                DOUBLE
                            </option>
                            <option title="DOUBLE 的别名（例外：REAL_AS_FLOAT SQL 模式时它是 FLOAT 的别名）">REAL</option>
                            <option disabled="disabled">-</option>
                            <option title="位类型（M），每个值存储 M 位（默认为 1，最大为 64）">BIT</option>
                            <option title="TINYINT(1) 的别名，零值表示假，非零值表示真">BOOLEAN</option>
                            <option title="BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE 的别名">SERIAL</option>
                        </optgroup>
                        <optgroup label="日期与时间">
                            <option title="日期，支持的范围从 1000-01-01 到 9999-12-31">DATE</option>
                            <option title="日期与时间，支持的范围从 1000-01-01 00:00:00 到 9999-12-31 23:59:59">DATETIME</option>
                            <option title="时间戳，范围从 1970-01-01 00:00:01 UTC 到 2038-01-09 03:14:07 UTC，存储为自纪元（1970-01-01 00:00:00 UTC）起的秒数">
                                TIMESTAMP
                            </option>
                            <option title="时间，范围从 -838:59:59 到 838:59:59">TIME</option>
                            <option title="四位数（4，默认）或两位数（2）的年份，取值范围从 70（1970）到 69（2069）或从 1901 到 2155 以及 0000">YEAR
                            </option>
                        </optgroup>
                        <optgroup label="文本">
                            <option title="定长（0-255，默认 1）字符串，存储时会向右边补足空格到指定长度">CHAR</option>
                            <option title="变长（0-65,535）字符串，最大有效长度取决于最大行大小">VARCHAR</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的文本字段，存储时在内容前使用 1 字节表示内容的字节数">TINYTEXT</option>
                            <option title="最多存储 65535（2^16 - 1）字节的文本字段，存储时在内容前使用 2 字节表示内容的字节数">TEXT</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMTEXT</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的文本字段，存储时在内容前使用 4 字节表示内容的字节数">LONGTEXT
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="类似于 CHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">BINARY</option>
                            <option title="类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串">VARBINARY</option>
                            <option disabled="disabled">-</option>
                            <option title="最多存储 255（2^8 - 1）字节的 BLOB 字段，存储时在内容前使用 1 字节表示内容的字节数">TINYBLOB</option>
                            <option title="最多存储 16777215（2^24 - 1）字节的 BLOB 字段，存储时在内容前使用 3 字节表示内容的字节数">MEDIUMBLOB
                            </option>
                            <option title="最多存储 65535（2^16 - 1）字节的 BLOB 字段，存储时在内容前使用 2 字节表示内容的字节数">BLOB</option>
                            <option title="最多存储 4294967295 字节即 4GB（2^32 - 1）的 BLOB 字段，存储时在内容前使用 4 字节表示内容的字节数">LONGBLOB
                            </option>
                            <option disabled="disabled">-</option>
                            <option title="枚举，可从最多 65535 个值的列表中选择或特殊的错误值 ''">ENUM</option>
                            <option title="可从最多 64 个成员中选择集合为一个值">SET</option>
                        </optgroup>
                        <optgroup label="空间">
                            <option title="一种能存储任意类型几何体的类型">GEOMETRY</option>
                            <option title="二维空间中的点">POINT</option>
                            <option title="点之间的线性插值曲线">LINESTRING</option>
                            <option title="多边形">POLYGON</option>
                            <option title="点的集合">MULTIPOINT</option>
                            <option title="点之间的线性插值曲线的集合">MULTILINESTRING</option>
                            <option title="多边形的集合">MULTIPOLYGON</option>
                            <option title="任意类型几何体对象的集合">GEOMETRYCOLLECTION</option>
                        </optgroup>
                        <optgroup label="JSON">
                            <option title="存储并可高效访问 JSON （JavaScript 对象） 文档中的数据">JSON</option>
                        </optgroup>
                    </select></td>
                <td class="center">
                    <!-- column length -->
                    <input id="field_3_3" type="text" name="field_length[3]" size="8" value="" class="textfield">
                    <p class="enum_notice" id="enum_notice_3_3" style="display: none;">
                        <a href="#" class="open_enum_editor">
                            Edit ENUM/SET values </a>
                    </p></td>
                <td class="center">
                    <!-- column default -->

                    <select name="field_default_type[3]" id="field_3_4" class="default_type">
                        <option value="NONE">
                            无
                        </option>
                        <option value="USER_DEFINED">
                            定义：
                        </option>
                        <option value="NULL">
                            NULL
                        </option>
                        <option value="CURRENT_TIMESTAMP">
                            CURRENT_TIMESTAMP
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_default_value[3]" size="12" value="" class="textfield default_value"
                           style="display: none;">
                </td>
                <td class="center">
                    <!-- column collation -->
                    <select lang="en" dir="ltr" name="field_collation[3]" id="field_3_5">
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="亚美尼亚语, 二进制">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="亚美尼亚语, 不区分大小写">armscii8_general_ci</option>
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
                            <option value="cp1250_general_ci" title="中欧 (多语言), 不区分大小写">cp1250_general_ci</option>
                            <option value="cp1250_polish_ci" title="波兰语, 不区分大小写">cp1250_polish_ci</option>
                        </optgroup>
                        <optgroup label="cp1251" title="Windows Cyrillic">
                            <option value="cp1251_bin" title="西里尔语 (多语言), 二进制">cp1251_bin</option>
                            <option value="cp1251_bulgarian_ci" title="保加利亚语, 不区分大小写">cp1251_bulgarian_ci</option>
                            <option value="cp1251_general_ci" title="西里尔语 (多语言), 不区分大小写">cp1251_general_ci</option>
                            <option value="cp1251_general_cs" title="西里尔语 (多语言), 区分大小写">cp1251_general_cs</option>
                            <option value="cp1251_ukrainian_ci" title="乌克兰语, 不区分大小写">cp1251_ukrainian_ci</option>
                        </optgroup>
                        <optgroup label="cp1256" title="Windows Arabic">
                            <option value="cp1256_bin" title="阿拉伯语, 二进制">cp1256_bin</option>
                            <option value="cp1256_general_ci" title="阿拉伯语, 不区分大小写">cp1256_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1257" title="Windows Baltic">
                            <option value="cp1257_bin" title="巴拉克语 (多语言), 二进制">cp1257_bin</option>
                            <option value="cp1257_general_ci" title="巴拉克语 (多语言), 不区分大小写">cp1257_general_ci</option>
                            <option value="cp1257_lithuanian_ci" title="立陶宛语, 不区分大小写">cp1257_lithuanian_ci</option>
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
                            <option value="gb18030_unicode_520_ci" title="Unicode (多语言)">gb18030_unicode_520_ci</option>
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
                            <option value="keybcs2_general_ci" title="捷克斯洛伐克语, 不区分大小写">keybcs2_general_ci</option>
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
                            <option value="latin1_general_ci" title="西欧 (多语言), 不区分大小写">latin1_general_ci</option>
                            <option value="latin1_general_cs" title="西欧 (多语言), 区分大小写">latin1_general_cs</option>
                            <option value="latin1_german1_ci" title="德语 (字典), 不区分大小写">latin1_german1_ci</option>
                            <option value="latin1_german2_ci" title="德语 (电话本), 不区分大小写">latin1_german2_ci</option>
                            <option value="latin1_spanish_ci" title="西班牙语, 不区分大小写">latin1_spanish_ci</option>
                            <option value="latin1_swedish_ci" title="瑞典语, 不区分大小写">latin1_swedish_ci</option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_bin" title="中欧 (多语言), 二进制">latin2_bin</option>
                            <option value="latin2_croatian_ci" title="克罗地亚语, 不区分大小写">latin2_croatian_ci</option>
                            <option value="latin2_czech_cs" title="捷克语, 区分大小写">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="中欧 (多语言), 不区分大小写">latin2_general_ci</option>
                            <option value="latin2_hungarian_ci" title="匈牙利语, 不区分大小写">latin2_hungarian_ci</option>
                        </optgroup>
                        <optgroup label="latin5" title="ISO 8859-9 Turkish">
                            <option value="latin5_bin" title="土耳其语, 二进制">latin5_bin</option>
                            <option value="latin5_turkish_ci" title="土耳其语, 不区分大小写">latin5_turkish_ci</option>
                        </optgroup>
                        <optgroup label="latin7" title="ISO 8859-13 Baltic">
                            <option value="latin7_bin" title="巴拉克语 (多语言), 二进制">latin7_bin</option>
                            <option value="latin7_estonian_cs" title="爱沙尼亚语, 区分大小写">latin7_estonian_cs</option>
                            <option value="latin7_general_ci" title="巴拉克语 (多语言), 不区分大小写">latin7_general_ci</option>
                            <option value="latin7_general_cs" title="巴拉克语 (多语言), 区分大小写">latin7_general_cs</option>
                        </optgroup>
                        <optgroup label="macce" title="Mac Central European">
                            <option value="macce_bin" title="中欧 (多语言), 二进制">macce_bin</option>
                            <option value="macce_general_ci" title="中欧 (多语言), 不区分大小写">macce_general_ci</option>
                        </optgroup>
                        <optgroup label="macroman" title="Mac West European">
                            <option value="macroman_bin" title="西欧 (多语言), 二进制">macroman_bin</option>
                            <option value="macroman_general_ci" title="西欧 (多语言), 不区分大小写">macroman_general_ci</option>
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
                            <option value="ucs2_general_ci" title="Unicode (多语言), 不区分大小写">ucs2_general_ci</option>
                            <option value="ucs2_general_mysql500_ci" title="Unicode (多语言)">ucs2_general_mysql500_ci
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
                            <option value="ucs2_unicode_520_ci" title="Unicode (多语言)">ucs2_unicode_520_ci</option>
                            <option value="ucs2_unicode_ci" title="Unicode (多语言), 不区分大小写">ucs2_unicode_ci</option>
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
                            <option value="utf16_lithuanian_ci" title="立陶宛语, 不区分大小写">utf16_lithuanian_ci</option>
                            <option value="utf16_persian_ci" title="波斯语, 不区分大小写">utf16_persian_ci</option>
                            <option value="utf16_polish_ci" title="波兰语, 不区分大小写">utf16_polish_ci</option>
                            <option value="utf16_roman_ci" title="西欧, 不区分大小写">utf16_roman_ci</option>
                            <option value="utf16_romanian_ci" title="罗马尼亚语, 不区分大小写">utf16_romanian_ci</option>
                            <option value="utf16_sinhala_ci" title="僧伽罗语, 不区分大小写">utf16_sinhala_ci</option>
                            <option value="utf16_slovak_ci" title="斯洛伐克语, 不区分大小写">utf16_slovak_ci</option>
                            <option value="utf16_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf16_slovenian_ci</option>
                            <option value="utf16_spanish2_ci" title="传统西班牙语, 不区分大小写">utf16_spanish2_ci</option>
                            <option value="utf16_spanish_ci" title="西班牙语, 不区分大小写">utf16_spanish_ci</option>
                            <option value="utf16_swedish_ci" title="瑞典语, 不区分大小写">utf16_swedish_ci</option>
                            <option value="utf16_turkish_ci" title="土耳其语, 不区分大小写">utf16_turkish_ci</option>
                            <option value="utf16_unicode_520_ci" title="Unicode (多语言)">utf16_unicode_520_ci</option>
                            <option value="utf16_unicode_ci" title="Unicode (多语言), 不区分大小写">utf16_unicode_ci</option>
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
                            <option value="utf32_lithuanian_ci" title="立陶宛语, 不区分大小写">utf32_lithuanian_ci</option>
                            <option value="utf32_persian_ci" title="波斯语, 不区分大小写">utf32_persian_ci</option>
                            <option value="utf32_polish_ci" title="波兰语, 不区分大小写">utf32_polish_ci</option>
                            <option value="utf32_roman_ci" title="西欧, 不区分大小写">utf32_roman_ci</option>
                            <option value="utf32_romanian_ci" title="罗马尼亚语, 不区分大小写">utf32_romanian_ci</option>
                            <option value="utf32_sinhala_ci" title="僧伽罗语, 不区分大小写">utf32_sinhala_ci</option>
                            <option value="utf32_slovak_ci" title="斯洛伐克语, 不区分大小写">utf32_slovak_ci</option>
                            <option value="utf32_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf32_slovenian_ci</option>
                            <option value="utf32_spanish2_ci" title="传统西班牙语, 不区分大小写">utf32_spanish2_ci</option>
                            <option value="utf32_spanish_ci" title="西班牙语, 不区分大小写">utf32_spanish_ci</option>
                            <option value="utf32_swedish_ci" title="瑞典语, 不区分大小写">utf32_swedish_ci</option>
                            <option value="utf32_turkish_ci" title="土耳其语, 不区分大小写">utf32_turkish_ci</option>
                            <option value="utf32_unicode_520_ci" title="Unicode (多语言)">utf32_unicode_520_ci</option>
                            <option value="utf32_unicode_ci" title="Unicode (多语言), 不区分大小写">utf32_unicode_ci</option>
                            <option value="utf32_vietnamese_ci" title="越南语, 不区分大小写">utf32_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_bin" title="Unicode (多语言), 二进制">utf8_bin</option>
                            <option value="utf8_croatian_ci" title="克罗地亚语, 不区分大小写">utf8_croatian_ci</option>
                            <option value="utf8_czech_ci" title="捷克语, 不区分大小写">utf8_czech_ci</option>
                            <option value="utf8_danish_ci" title="丹麦语, 不区分大小写">utf8_danish_ci</option>
                            <option value="utf8_esperanto_ci" title="世界语, 不区分大小写">utf8_esperanto_ci</option>
                            <option value="utf8_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8_estonian_ci</option>
                            <option value="utf8_general_ci" title="Unicode (多语言), 不区分大小写">utf8_general_ci</option>
                            <option value="utf8_general_mysql500_ci" title="Unicode (多语言)">utf8_general_mysql500_ci
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
                            <option value="utf8_unicode_520_ci" title="Unicode (多语言)">utf8_unicode_520_ci</option>
                            <option value="utf8_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8_unicode_ci</option>
                            <option value="utf8_vietnamese_ci" title="越南语, 不区分大小写">utf8_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8mb4" title="UTF-8 Unicode">
                            <option value="utf8mb4_bin" title="Unicode (多语言), 二进制">utf8mb4_bin</option>
                            <option value="utf8mb4_croatian_ci" title="克罗地亚语, 不区分大小写">utf8mb4_croatian_ci</option>
                            <option value="utf8mb4_czech_ci" title="捷克语, 不区分大小写">utf8mb4_czech_ci</option>
                            <option value="utf8mb4_danish_ci" title="丹麦语, 不区分大小写">utf8mb4_danish_ci</option>
                            <option value="utf8mb4_esperanto_ci" title="世界语, 不区分大小写">utf8mb4_esperanto_ci</option>
                            <option value="utf8mb4_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8mb4_estonian_ci</option>
                            <option value="utf8mb4_general_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_general_ci</option>
                            <option value="utf8mb4_german2_ci" title="德语 (电话本), 不区分大小写">utf8mb4_german2_ci</option>
                            <option value="utf8mb4_hungarian_ci" title="匈牙利语, 不区分大小写">utf8mb4_hungarian_ci</option>
                            <option value="utf8mb4_icelandic_ci" title="冰岛语, 不区分大小写">utf8mb4_icelandic_ci</option>
                            <option value="utf8mb4_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8mb4_latvian_ci</option>
                            <option value="utf8mb4_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8mb4_lithuanian_ci</option>
                            <option value="utf8mb4_persian_ci" title="波斯语, 不区分大小写">utf8mb4_persian_ci</option>
                            <option value="utf8mb4_polish_ci" title="波兰语, 不区分大小写">utf8mb4_polish_ci</option>
                            <option value="utf8mb4_roman_ci" title="西欧, 不区分大小写">utf8mb4_roman_ci</option>
                            <option value="utf8mb4_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8mb4_romanian_ci</option>
                            <option value="utf8mb4_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8mb4_sinhala_ci</option>
                            <option value="utf8mb4_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8mb4_slovak_ci</option>
                            <option value="utf8mb4_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8mb4_slovenian_ci</option>
                            <option value="utf8mb4_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8mb4_spanish2_ci</option>
                            <option value="utf8mb4_spanish_ci" title="西班牙语, 不区分大小写">utf8mb4_spanish_ci</option>
                            <option value="utf8mb4_swedish_ci" title="瑞典语, 不区分大小写">utf8mb4_swedish_ci</option>
                            <option value="utf8mb4_turkish_ci" title="土耳其语, 不区分大小写">utf8mb4_turkish_ci</option>
                            <option value="utf8mb4_unicode_520_ci" title="Unicode (多语言)">utf8mb4_unicode_520_ci</option>
                            <option value="utf8mb4_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_unicode_ci</option>
                            <option value="utf8mb4_vietnamese_ci" title="越南语, 不区分大小写">utf8mb4_vietnamese_ci</option>
                        </optgroup>
                    </select>
                </td>
                <td class="center">
                    <!-- column attribute -->
                    <select style="width: 7em;" name="field_attribute[3]" id="field_3_5">
                        <option value="" selected="selected">
                        </option>
                        <option value="BINARY">
                            BINARY
                        </option>
                        <option value="UNSIGNED">
                            UNSIGNED
                        </option>
                        <option value="UNSIGNED ZEROFILL">
                            UNSIGNED ZEROFILL
                        </option>
                        <option value="on update CURRENT_TIMESTAMP">
                            on update CURRENT_TIMESTAMP
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column NULL -->
                    <input name="field_null[3]" id="field_3_6" type="checkbox" value="NULL" class="allow_null"></td>
                <!-- column indexes, See my other comment about  this 'if'. -->
                <td class="center">
                    <select name="field_key[3]" id="field_3_7" data-index="">
                        <option value="none_3">---</option>
                        <option value="primary_3" title="主键">
                            PRIMARY
                        </option>
                        <option value="unique_3" title="唯一">
                            UNIQUE
                        </option>
                        <option value="index_3" title="索引">
                            INDEX
                        </option>
                        <option value="fulltext_3" title="全文搜索">
                            FULLTEXT
                        </option>
                        <option value="spatial_3" title="空间">
                            SPATIAL
                        </option>
                    </select></td>
                <td class="center">
                    <!-- column auto_increment -->
                    <input name="field_extra[3]" id="field_3_8" type="checkbox" value="AUTO_INCREMENT"></td>
                <td class="center">
                    <!-- column comments -->
                    <input id="field_3_9" type="text" name="field_comments[3]" size="12" maxlength="1024" value=""
                           class="textfield"></td>
                <!-- column virtuality -->
                <td class="center">

                    <select name="field_virtuality[3]" id="field_3_10" class="virtuality">
                        <option value="">
                        </option>
                        <option value="VIRTUAL">
                            VIRTUAL
                        </option>
                        <option value="STORED">
                            STORED
                        </option>
                    </select>
                    <br>
                    <input type="text" name="field_expression[3]" size="12" value="" placeholder="Expression"
                           class="textfield expression" style="display: none;">
                </td>
                <!-- move column -->

            </tr>
            </tbody>
        </table>
        <br>
        <table>
            <tbody>
            <tr class="vtop">
                <th>
                    表注释：
                </th>
                <td width="25">&nbsp;</td>
                <th>
                    Collation:
                </th>
                <td width="25">&nbsp;</td>
                <th>
                    存储引擎: <a
                            href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Fstorage-engines.html"
                            target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a>
                </th>
                <td width="25">&nbsp;</td>
                <th style="display: none;">
                    Connection: <a
                            href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Ffederated-create-connection.html"
                            target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a>
                </th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="comment" size="40" maxlength="60" value="" class="textfield">
                </td>
                <td width="25">&nbsp;</td>
                <td>
                    <select lang="en" dir="ltr" name="tbl_collation">
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="亚美尼亚语, 二进制">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="亚美尼亚语, 不区分大小写">armscii8_general_ci</option>
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
                            <option value="cp1250_general_ci" title="中欧 (多语言), 不区分大小写">cp1250_general_ci</option>
                            <option value="cp1250_polish_ci" title="波兰语, 不区分大小写">cp1250_polish_ci</option>
                        </optgroup>
                        <optgroup label="cp1251" title="Windows Cyrillic">
                            <option value="cp1251_bin" title="西里尔语 (多语言), 二进制">cp1251_bin</option>
                            <option value="cp1251_bulgarian_ci" title="保加利亚语, 不区分大小写">cp1251_bulgarian_ci</option>
                            <option value="cp1251_general_ci" title="西里尔语 (多语言), 不区分大小写">cp1251_general_ci</option>
                            <option value="cp1251_general_cs" title="西里尔语 (多语言), 区分大小写">cp1251_general_cs</option>
                            <option value="cp1251_ukrainian_ci" title="乌克兰语, 不区分大小写">cp1251_ukrainian_ci</option>
                        </optgroup>
                        <optgroup label="cp1256" title="Windows Arabic">
                            <option value="cp1256_bin" title="阿拉伯语, 二进制">cp1256_bin</option>
                            <option value="cp1256_general_ci" title="阿拉伯语, 不区分大小写">cp1256_general_ci</option>
                        </optgroup>
                        <optgroup label="cp1257" title="Windows Baltic">
                            <option value="cp1257_bin" title="巴拉克语 (多语言), 二进制">cp1257_bin</option>
                            <option value="cp1257_general_ci" title="巴拉克语 (多语言), 不区分大小写">cp1257_general_ci</option>
                            <option value="cp1257_lithuanian_ci" title="立陶宛语, 不区分大小写">cp1257_lithuanian_ci</option>
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
                            <option value="gb18030_unicode_520_ci" title="Unicode (多语言)">gb18030_unicode_520_ci</option>
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
                            <option value="keybcs2_general_ci" title="捷克斯洛伐克语, 不区分大小写">keybcs2_general_ci</option>
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
                            <option value="latin1_general_ci" title="西欧 (多语言), 不区分大小写">latin1_general_ci</option>
                            <option value="latin1_general_cs" title="西欧 (多语言), 区分大小写">latin1_general_cs</option>
                            <option value="latin1_german1_ci" title="德语 (字典), 不区分大小写">latin1_german1_ci</option>
                            <option value="latin1_german2_ci" title="德语 (电话本), 不区分大小写">latin1_german2_ci</option>
                            <option value="latin1_spanish_ci" title="西班牙语, 不区分大小写">latin1_spanish_ci</option>
                            <option value="latin1_swedish_ci" title="瑞典语, 不区分大小写">latin1_swedish_ci</option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_bin" title="中欧 (多语言), 二进制">latin2_bin</option>
                            <option value="latin2_croatian_ci" title="克罗地亚语, 不区分大小写">latin2_croatian_ci</option>
                            <option value="latin2_czech_cs" title="捷克语, 区分大小写">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="中欧 (多语言), 不区分大小写">latin2_general_ci</option>
                            <option value="latin2_hungarian_ci" title="匈牙利语, 不区分大小写">latin2_hungarian_ci</option>
                        </optgroup>
                        <optgroup label="latin5" title="ISO 8859-9 Turkish">
                            <option value="latin5_bin" title="土耳其语, 二进制">latin5_bin</option>
                            <option value="latin5_turkish_ci" title="土耳其语, 不区分大小写">latin5_turkish_ci</option>
                        </optgroup>
                        <optgroup label="latin7" title="ISO 8859-13 Baltic">
                            <option value="latin7_bin" title="巴拉克语 (多语言), 二进制">latin7_bin</option>
                            <option value="latin7_estonian_cs" title="爱沙尼亚语, 区分大小写">latin7_estonian_cs</option>
                            <option value="latin7_general_ci" title="巴拉克语 (多语言), 不区分大小写">latin7_general_ci</option>
                            <option value="latin7_general_cs" title="巴拉克语 (多语言), 区分大小写">latin7_general_cs</option>
                        </optgroup>
                        <optgroup label="macce" title="Mac Central European">
                            <option value="macce_bin" title="中欧 (多语言), 二进制">macce_bin</option>
                            <option value="macce_general_ci" title="中欧 (多语言), 不区分大小写">macce_general_ci</option>
                        </optgroup>
                        <optgroup label="macroman" title="Mac West European">
                            <option value="macroman_bin" title="西欧 (多语言), 二进制">macroman_bin</option>
                            <option value="macroman_general_ci" title="西欧 (多语言), 不区分大小写">macroman_general_ci</option>
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
                            <option value="ucs2_general_ci" title="Unicode (多语言), 不区分大小写">ucs2_general_ci</option>
                            <option value="ucs2_general_mysql500_ci" title="Unicode (多语言)">ucs2_general_mysql500_ci
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
                            <option value="ucs2_unicode_520_ci" title="Unicode (多语言)">ucs2_unicode_520_ci</option>
                            <option value="ucs2_unicode_ci" title="Unicode (多语言), 不区分大小写">ucs2_unicode_ci</option>
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
                            <option value="utf16_lithuanian_ci" title="立陶宛语, 不区分大小写">utf16_lithuanian_ci</option>
                            <option value="utf16_persian_ci" title="波斯语, 不区分大小写">utf16_persian_ci</option>
                            <option value="utf16_polish_ci" title="波兰语, 不区分大小写">utf16_polish_ci</option>
                            <option value="utf16_roman_ci" title="西欧, 不区分大小写">utf16_roman_ci</option>
                            <option value="utf16_romanian_ci" title="罗马尼亚语, 不区分大小写">utf16_romanian_ci</option>
                            <option value="utf16_sinhala_ci" title="僧伽罗语, 不区分大小写">utf16_sinhala_ci</option>
                            <option value="utf16_slovak_ci" title="斯洛伐克语, 不区分大小写">utf16_slovak_ci</option>
                            <option value="utf16_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf16_slovenian_ci</option>
                            <option value="utf16_spanish2_ci" title="传统西班牙语, 不区分大小写">utf16_spanish2_ci</option>
                            <option value="utf16_spanish_ci" title="西班牙语, 不区分大小写">utf16_spanish_ci</option>
                            <option value="utf16_swedish_ci" title="瑞典语, 不区分大小写">utf16_swedish_ci</option>
                            <option value="utf16_turkish_ci" title="土耳其语, 不区分大小写">utf16_turkish_ci</option>
                            <option value="utf16_unicode_520_ci" title="Unicode (多语言)">utf16_unicode_520_ci</option>
                            <option value="utf16_unicode_ci" title="Unicode (多语言), 不区分大小写">utf16_unicode_ci</option>
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
                            <option value="utf32_lithuanian_ci" title="立陶宛语, 不区分大小写">utf32_lithuanian_ci</option>
                            <option value="utf32_persian_ci" title="波斯语, 不区分大小写">utf32_persian_ci</option>
                            <option value="utf32_polish_ci" title="波兰语, 不区分大小写">utf32_polish_ci</option>
                            <option value="utf32_roman_ci" title="西欧, 不区分大小写">utf32_roman_ci</option>
                            <option value="utf32_romanian_ci" title="罗马尼亚语, 不区分大小写">utf32_romanian_ci</option>
                            <option value="utf32_sinhala_ci" title="僧伽罗语, 不区分大小写">utf32_sinhala_ci</option>
                            <option value="utf32_slovak_ci" title="斯洛伐克语, 不区分大小写">utf32_slovak_ci</option>
                            <option value="utf32_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf32_slovenian_ci</option>
                            <option value="utf32_spanish2_ci" title="传统西班牙语, 不区分大小写">utf32_spanish2_ci</option>
                            <option value="utf32_spanish_ci" title="西班牙语, 不区分大小写">utf32_spanish_ci</option>
                            <option value="utf32_swedish_ci" title="瑞典语, 不区分大小写">utf32_swedish_ci</option>
                            <option value="utf32_turkish_ci" title="土耳其语, 不区分大小写">utf32_turkish_ci</option>
                            <option value="utf32_unicode_520_ci" title="Unicode (多语言)">utf32_unicode_520_ci</option>
                            <option value="utf32_unicode_ci" title="Unicode (多语言), 不区分大小写">utf32_unicode_ci</option>
                            <option value="utf32_vietnamese_ci" title="越南语, 不区分大小写">utf32_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_bin" title="Unicode (多语言), 二进制">utf8_bin</option>
                            <option value="utf8_croatian_ci" title="克罗地亚语, 不区分大小写">utf8_croatian_ci</option>
                            <option value="utf8_czech_ci" title="捷克语, 不区分大小写">utf8_czech_ci</option>
                            <option value="utf8_danish_ci" title="丹麦语, 不区分大小写">utf8_danish_ci</option>
                            <option value="utf8_esperanto_ci" title="世界语, 不区分大小写">utf8_esperanto_ci</option>
                            <option value="utf8_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8_estonian_ci</option>
                            <option value="utf8_general_ci" title="Unicode (多语言), 不区分大小写">utf8_general_ci</option>
                            <option value="utf8_general_mysql500_ci" title="Unicode (多语言)">utf8_general_mysql500_ci
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
                            <option value="utf8_unicode_520_ci" title="Unicode (多语言)">utf8_unicode_520_ci</option>
                            <option value="utf8_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8_unicode_ci</option>
                            <option value="utf8_vietnamese_ci" title="越南语, 不区分大小写">utf8_vietnamese_ci</option>
                        </optgroup>
                        <optgroup label="utf8mb4" title="UTF-8 Unicode">
                            <option value="utf8mb4_bin" title="Unicode (多语言), 二进制">utf8mb4_bin</option>
                            <option value="utf8mb4_croatian_ci" title="克罗地亚语, 不区分大小写">utf8mb4_croatian_ci</option>
                            <option value="utf8mb4_czech_ci" title="捷克语, 不区分大小写">utf8mb4_czech_ci</option>
                            <option value="utf8mb4_danish_ci" title="丹麦语, 不区分大小写">utf8mb4_danish_ci</option>
                            <option value="utf8mb4_esperanto_ci" title="世界语, 不区分大小写">utf8mb4_esperanto_ci</option>
                            <option value="utf8mb4_estonian_ci" title="爱沙尼亚语, 不区分大小写">utf8mb4_estonian_ci</option>
                            <option value="utf8mb4_general_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_general_ci</option>
                            <option value="utf8mb4_german2_ci" title="德语 (电话本), 不区分大小写">utf8mb4_german2_ci</option>
                            <option value="utf8mb4_hungarian_ci" title="匈牙利语, 不区分大小写">utf8mb4_hungarian_ci</option>
                            <option value="utf8mb4_icelandic_ci" title="冰岛语, 不区分大小写">utf8mb4_icelandic_ci</option>
                            <option value="utf8mb4_latvian_ci" title="拉脱维亚语, 不区分大小写">utf8mb4_latvian_ci</option>
                            <option value="utf8mb4_lithuanian_ci" title="立陶宛语, 不区分大小写">utf8mb4_lithuanian_ci</option>
                            <option value="utf8mb4_persian_ci" title="波斯语, 不区分大小写">utf8mb4_persian_ci</option>
                            <option value="utf8mb4_polish_ci" title="波兰语, 不区分大小写">utf8mb4_polish_ci</option>
                            <option value="utf8mb4_roman_ci" title="西欧, 不区分大小写">utf8mb4_roman_ci</option>
                            <option value="utf8mb4_romanian_ci" title="罗马尼亚语, 不区分大小写">utf8mb4_romanian_ci</option>
                            <option value="utf8mb4_sinhala_ci" title="僧伽罗语, 不区分大小写">utf8mb4_sinhala_ci</option>
                            <option value="utf8mb4_slovak_ci" title="斯洛伐克语, 不区分大小写">utf8mb4_slovak_ci</option>
                            <option value="utf8mb4_slovenian_ci" title="斯洛文尼亚语, 不区分大小写">utf8mb4_slovenian_ci</option>
                            <option value="utf8mb4_spanish2_ci" title="传统西班牙语, 不区分大小写">utf8mb4_spanish2_ci</option>
                            <option value="utf8mb4_spanish_ci" title="西班牙语, 不区分大小写">utf8mb4_spanish_ci</option>
                            <option value="utf8mb4_swedish_ci" title="瑞典语, 不区分大小写">utf8mb4_swedish_ci</option>
                            <option value="utf8mb4_turkish_ci" title="土耳其语, 不区分大小写">utf8mb4_turkish_ci</option>
                            <option value="utf8mb4_unicode_520_ci" title="Unicode (多语言)">utf8mb4_unicode_520_ci</option>
                            <option value="utf8mb4_unicode_ci" title="Unicode (多语言), 不区分大小写">utf8mb4_unicode_ci</option>
                            <option value="utf8mb4_vietnamese_ci" title="越南语, 不区分大小写">utf8mb4_vietnamese_ci</option>
                        </optgroup>
                    </select>
                </td>
                <td width="25">&nbsp;</td>
                <td>
                    <select name="tbl_storage_engine">
                        <option value="InnoDB" title="Supports transactions, row-level locking, and foreign keys">
                            InnoDB
                        </option>
                        <option value="MRG_MYISAM" title="Collection of identical MyISAM tables">
                            MRG_MYISAM
                        </option>
                        <option value="MEMORY" title="Hash based, stored in memory, useful for temporary tables">
                            MEMORY
                        </option>
                        <option value="BLACKHOLE"
                                title="/dev/null storage engine (anything you write to it disappears)">
                            BLACKHOLE
                        </option>
                        <option value="MyISAM" title="MyISAM storage engine" selected="selected">
                            MyISAM
                        </option>
                        <option value="CSV" title="CSV storage engine">
                            CSV
                        </option>
                        <option value="ARCHIVE" title="Archive storage engine">
                            ARCHIVE
                        </option>
                    </select>
                </td>
                <td width="25">&nbsp;</td>
                <td style="display: none;">
                    <input type="text" name="connection" size="40" value=""
                           placeholder="scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name"
                           class="textfield" required="required" disabled="">
                </td>
            </tr>
            <tr class="vtop">
                <th colspan="5">
                    PARTITION definition: &nbsp;
                    <a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Fpartitioning.html"
                       target="mysql_doc"><img src="<?= __PABLIC__ . "nbmyadmin" ?>/dot.gif" title="文档" alt="文档" class="icon ic_b_help"></a></th>
            </tr>
            <tr>
                <td colspan="5">

                    <table id="partition_table">
                        <tbody>
                        <tr class="vmiddle">
                            <td><label for="partition_by">Partition by:</label></td>
                            <td>
                                <select name="partition_by" id="partition_by">
                                    <option value="" selected="selected">
                                    </option>
                                    <option value="HASH">
                                        HASH
                                    </option>
                                    <option value="LINEAR HASH">
                                        LINEAR HASH
                                    </option>
                                    <option value="KEY">
                                        KEY
                                    </option>
                                    <option value="LINEAR KEY">
                                        LINEAR KEY
                                    </option>
                                    <option value="RANGE">
                                        RANGE
                                    </option>
                                    <option value="LIST">
                                        LIST
                                    </option>
                                </select>
                            </td>
                            <td>(
                                <input name="partition_expr" type="text" placeholder="Expression or column list"
                                       value="">
                                )
                            </td>
                        </tr>
                        <tr class="vmiddle">
                            <td><label for="partition_count">Partitions:</label></td>
                            <td>
                                <input name="partition_count" type="number" min="2" value="">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            </tbody>
        </table>
        <br>
        <fieldset class="tblFooters">
            <input class="preview_sql"  onclick="javascript:$('body').dialog({type:'primary',showBoxShadow:true,buttons:[{name: '确定',className: 'defalut'}],discription:'也许有点问题!',animateIn:'rotateInUpLeft-hastrans',animateOut:'rotateOutUpLeft-hastrans'})" type="button" value="预览SQL语句" id="show_table_list" database="<?=$database?>">
            <input type="submit" name="do_save_data" value="保存" database="<?=$table?>" table="<?=$table?>">
        </fieldset>
        <div id="properties_message">
        </div>
    </form>
</div>