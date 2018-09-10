var PMA_messages = new Array();
PMA_messages['strNoDropDatabases'] = "已禁用“删除数据库”语句。";
PMA_messages['strConfirm'] = "确认";
PMA_messages['strDoYouReally'] = "您真的要执行“%s”吗？";
PMA_messages['strDropDatabaseStrongWarning'] = "您将要完全删除一个数据库！";
PMA_messages['strDropTableStrongWarning'] = "您将要完全删除一个表！";
PMA_messages['strTruncateTableStrongWarning'] = "您将要完全清空一个表！";
PMA_messages['strDeleteTrackingData'] = "删除该表的追踪数据？";
PMA_messages['strDeleteTrackingDataMultiple'] = "删除这些表的追踪数据？";
PMA_messages['strDeleteTrackingVersion'] = "删除该版本的追踪数据？";
PMA_messages['strDeleteTrackingVersionMultiple'] = "删除这些版本的追踪数据？";
PMA_messages['strDeletingTrackingEntry'] = "从追踪报告中删除条目？";
PMA_messages['strDeletingTrackingData'] = "正在删除追踪数据";
PMA_messages['strDroppingPrimaryKeyIndex'] = "正在删除主键";
PMA_messages['strDroppingForeignKey'] = "删除外键。";
PMA_messages['strOperationTakesLongTime'] = "该操作可能需要较长时间执行。是否继续？";
PMA_messages['strDropUserGroupWarning'] = "您真的要删除用户组“%s”吗？";
PMA_messages['strConfirmDeleteQBESearch'] = "您真的要删除搜索“%s”吗？";
PMA_messages['strConfirmNavigation'] = "您已修改了一些数据但尚未保存。您真的要放弃保存并离开吗？";
PMA_messages['strDropUserWarning'] = "您真的要删除选择的用户吗？";
PMA_messages['strDeleteCentralColumnWarning'] = "您真的要删除此中心列吗？";
PMA_messages['strDropRTEitems'] = "您真的要删除所选择的项目吗？";
PMA_messages['strDropPartitionWarning'] = "您真的要删除所选的分区吗？这也将删除所有与之相关的数据！";
PMA_messages['strTruncatePartitionWarning'] = "您真的要清空所选择的分区吗？";
PMA_messages['strRemovePartitioningWarning'] = "您真的要移除分区吗？";
PMA_messages['strResetSlaveWarning'] = "您真的要执行“RESET SLAVE”吗？";
PMA_messages['strChangeColumnCollation'] = "此操作将会尝试将您的数据转换为新的排序规则。在某些罕见的情况下，尤其是当出现某些字符在新的排序规则中不存在时，这一操作可能会导致数据在新的排序规则之下显示错误。若出现这种情况我们建议您将数据重新恢复为原来的排序规则，然后参考以下提示： <a href=\"%s\" target=\"garbled_data_wiki\">乱码数据</a>.<br/><br/>您确定您希望改变排序规则并进行数据转换吗？";
PMA_messages['strChangeAllColumnCollationsWarning'] = "通过这一操作，MySQL将会尝试映射不同排序规则之间的数据值。若字符集不兼容，可能会出现数据损失，而且这些损失可能<b>无法</b>简单地通过转换回原有的列排序规则来进行恢复。<b>若要转换已经存在的数据，建议您使用表结构的页面上的列编辑功能（“修改”链接）。</b><br/><br/>您确定希望修改所有的列排序规则并且转换数据吗？";
PMA_messages['strSaveAndClose'] = "保存并关闭";
PMA_messages['strReset'] = "重置";
PMA_messages['strResetAll'] = "重置";
PMA_messages['strFormEmpty'] = "表单内缺少值！";
PMA_messages['strRadioUnchecked'] = "请至少选择一项！";
PMA_messages['strEnterValidNumber'] = "请输入一个有效的数字！";
PMA_messages['strEnterValidLength'] = "请输入一个有效的长度！";
PMA_messages['strAddIndex'] = "添加索引";
PMA_messages['strEditIndex'] = "编辑索引";
PMA_messages['strAddToIndex'] = "添加 %s 个字段至索引";
PMA_messages['strCreateSingleColumnIndex'] = "创建单列索引";
PMA_messages['strCreateCompositeIndex'] = "创建复合索引";
PMA_messages['strCompositeWith'] = "复合对象：";
PMA_messages['strMissingColumn'] = "请为索引选择列。";
PMA_messages['strLeastColumnError'] = "至少要添加一个字段。";
PMA_messages['strPreviewSQL'] = "预览 SQL 语句";
PMA_messages['strSimulateDML'] = "模拟查询";
PMA_messages['strMatchedRows'] = "受影响的行数：";
PMA_messages['strSQLQuery'] = "SQL 查询：";
PMA_messages['strYValues'] = "纵轴值";
PMA_messages['strHostEmpty'] = "主机名不能为空！";
PMA_messages['strUserEmpty'] = "用户名不能为空！";
PMA_messages['strPasswordEmpty'] = "密码不能为空！";
PMA_messages['strPasswordNotSame'] = "两次密码不一致！";
PMA_messages['strRemovingSelectedUsers'] = "正在删除选中的用户";
PMA_messages['strClose'] = "关闭";
PMA_messages['strTemplateCreated'] = "模板已被创建。";
PMA_messages['strTemplateLoaded'] = "模板已被加载。";
PMA_messages['strTemplateUpdated'] = "模板己被更新。";
PMA_messages['strTemplateDeleted'] = "模板已被删除。";
PMA_messages['strOther'] = "其它";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "连接 / 进程";
PMA_messages['strIncompatibleMonitorConfig'] = "本地监控设置不兼容！";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "您浏览器本地存储中的图表设置不兼容于新版的监控对话框。所以您当前的设置可能不再有效。请通过<i>设置</i>菜单恢复默认设置。";
PMA_messages['strQueryCacheEfficiency'] = "查询缓存效率";
PMA_messages['strQueryCacheUsage'] = "查询缓存使用";
PMA_messages['strQueryCacheUsed'] = "已用查询缓存";
PMA_messages['strSystemCPUUsage'] = "系统 CPU 使用";
PMA_messages['strSystemMemory'] = "系统内存";
PMA_messages['strSystemSwap'] = "系统交换空间";
PMA_messages['strAverageLoad'] = "平均负载";
PMA_messages['strTotalMemory'] = "内存总量";
PMA_messages['strCachedMemory'] = "已缓存的内存";
PMA_messages['strBufferedMemory'] = "已缓冲的内存";
PMA_messages['strFreeMemory'] = "空闲内存";
PMA_messages['strUsedMemory'] = "已用内存";
PMA_messages['strTotalSwap'] = "交换空间总量";
PMA_messages['strCachedSwap'] = "已缓存的交换空间";
PMA_messages['strUsedSwap'] = "已用交换空间";
PMA_messages['strFreeSwap'] = "空闲交换空间";
PMA_messages['strBytesSent'] = "已发送字节数";
PMA_messages['strBytesReceived'] = "已接收字节数";
PMA_messages['strConnections'] = "连接";
PMA_messages['strProcesses'] = "进程";
PMA_messages['strB'] = "字节";
PMA_messages['strKiB'] = "KB";
PMA_messages['strMiB'] = "MB";
PMA_messages['strGiB'] = "GB";
PMA_messages['strTiB'] = "TB";
PMA_messages['strPiB'] = "PB";
PMA_messages['strEiB'] = "EB";
PMA_messages['strNTables'] = "%d 张表";
PMA_messages['strQuestions'] = "内部查询";
PMA_messages['strTraffic'] = "流量";
PMA_messages['strSettings'] = "设置";
PMA_messages['strAddChart'] = "添加图表";
PMA_messages['strAddOneSeriesWarning'] = "请至少添加一个数据！";
PMA_messages['strNone'] = "无";
PMA_messages['strResumeMonitor'] = "继续监控";
PMA_messages['strPauseMonitor'] = "暂停监控";
PMA_messages['strStartRefresh'] = "开启自动刷新";
PMA_messages['strStopRefresh'] = "停止自动刷新";
PMA_messages['strBothLogOn'] = "已启用 general_log 和 slow_query_log。";
PMA_messages['strGenLogOn'] = "已启用 general_log。";
PMA_messages['strSlowLogOn'] = "已启用 slow_query_log。";
PMA_messages['strBothLogOff'] = "未启用 slow_query_log 和 general_log。";
PMA_messages['strLogOutNotTable'] = "未设置 log_output 为 TABLE。";
PMA_messages['strLogOutIsTable'] = "已设置 log_output 为 TABLE。";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "已启用 slow_query_log，但服务器仅记录查询时间超过 %d 秒的查询。请根据您的系统适当设置  long_query_time 为 0-2 秒。";
PMA_messages['strLongQueryTimeSet'] = "已设置 long_query_time 为 %d 秒。";
PMA_messages['strSettingsAppliedGlobal'] = "下列设置将被应用到整个服务器直到服务器重新启动：";
PMA_messages['strSetLogOutput'] = "设置 log_output 为 %s";
PMA_messages['strEnableVar'] = "启用 %s";
PMA_messages['strDisableVar'] = "禁用 %s";
PMA_messages['setSetLongQueryTime'] = "设置 long_query_time 为 %d 秒。";
PMA_messages['strNoSuperUser'] = "无法修改这些变量。请以 root 登录或联系数据库管理员。";
PMA_messages['strChangeSettings'] = "修改设置";
PMA_messages['strCurrentSettings'] = "当前设置";
PMA_messages['strChartTitle'] = "图表标题";
PMA_messages['strDifferential'] = "差异";
PMA_messages['strDividedBy'] = "除以 %s";
PMA_messages['strUnit'] = "单位";
PMA_messages['strFromSlowLog'] = "从慢查询日志";
PMA_messages['strFromGeneralLog'] = "从常规日志";
PMA_messages['strServerLogError'] = "本次查询使用的数据库名称在服务器日志中未知。";
PMA_messages['strAnalysingLogsTitle'] = "正在分析日志";
PMA_messages['strAnalysingLogs'] = "正在分析并加载日志。请稍候。";
PMA_messages['strCancelRequest'] = "取消请求";
PMA_messages['strCountColumnExplanation'] = "该列显示了已分组的相同查询数量。然而只有 SQL 查询本身被作为分组依据，所以查询的其它属性，如开始时间可能不同。";
PMA_messages['strMoreCountColumnExplanation'] = "因选择了分组 INSERT 查询，对相同表的 INSERT 查询将忽略插入的数据而被分为一组。";
PMA_messages['strLogDataLoaded'] = "已加载日志数据。该时间段执行的查询：";
PMA_messages['strJumpToTable'] = "转到日志表";
PMA_messages['strNoDataFoundTitle'] = "未找到数据";
PMA_messages['strNoDataFound'] = "已分析日志，但在该时间段内没有找到数据。";
PMA_messages['strAnalyzing'] = "正在分析…";
PMA_messages['strExplainOutput'] = "解析输出";
PMA_messages['strStatus'] = "状态";
PMA_messages['strTime'] = "时间";
PMA_messages['strTotalTime'] = "总时间：";
PMA_messages['strProfilingResults'] = "性能分析结果";
PMA_messages['strTable'] = "表格";
PMA_messages['strChart'] = "图表";
PMA_messages['strFiltersForLogTable'] = "日志表筛选选项";
PMA_messages['strFilter'] = "筛选";
PMA_messages['strFilterByWordRegexp'] = "根据内容/正则表达式筛选：";
PMA_messages['strIgnoreWhereAndGroup'] = "忽略 WHERE 从句中的变量值对查询分组";
PMA_messages['strSumRows'] = "分组后的行数：";
PMA_messages['strTotal'] = "总数：";
PMA_messages['strLoadingLogs'] = "正在加载日志";
PMA_messages['strRefreshFailed'] = "刷新监控失败";
PMA_messages['strInvalidResponseExplanation'] = "请求新图表数据时服务器返回了无效数据。这很可能是因为您的会话已过期所造成的。请尝试重新载入页面并重新登录。";
PMA_messages['strReloadPage'] = "重新载入页面";
PMA_messages['strAffectedRows'] = "影响的行数：";
PMA_messages['strFailedParsingConfig'] = "解析配置文件失败。它似乎不是有效的 JSON 代码。";
PMA_messages['strFailedBuildingGrid'] = "使用导入的设置建立图表失败。正在重设为默认设置…";
PMA_messages['strImport'] = "导入";
PMA_messages['strImportDialogTitle'] = "导入监控设置";
PMA_messages['strImportDialogMessage'] = "请选择您要导入的文件。";
PMA_messages['strNoImportFile'] = "服务器上没有可用文件来导入！";
PMA_messages['strAnalyzeQuery'] = "分析查询";
PMA_messages['strAdvisorSystem'] = "建议系统";
PMA_messages['strPerformanceIssues'] = "可能存在的性能问题";
PMA_messages['strIssuse'] = "问题";
PMA_messages['strRecommendation'] = "建议";
PMA_messages['strRuleDetails'] = "规则细节";
PMA_messages['strJustification'] = "现状";
PMA_messages['strFormula'] = "使用的变量/公式";
PMA_messages['strTest'] = "检验";
PMA_messages['strFormatting'] = "正在格式化SQL……";
PMA_messages['strNoParam'] = "未找到参数！";
PMA_messages['strGo'] = "执行";
PMA_messages['strCancel'] = "取消";
PMA_messages['strPageSettings'] = "页面相关设置";
PMA_messages['strApply'] = "应用";
PMA_messages['strLoading'] = "正在加载…";
PMA_messages['strAbortedRequest'] = "请求已放弃！！";
PMA_messages['strProcessingRequest'] = "正在处理请求";
PMA_messages['strRequestFailed'] = "请求失败！！";
PMA_messages['strErrorProcessingRequest'] = "处理请求时的错误";
PMA_messages['strErrorCode'] = "错误代码：%s";
PMA_messages['strErrorText'] = "错误信息：%s";
PMA_messages['strNoDatabasesSelected'] = "没有已选择的数据库。";
PMA_messages['strDroppingColumn'] = "正在删除字段";
PMA_messages['strAddingPrimaryKey'] = "正在添加主键";
PMA_messages['strOK'] = "确定";
PMA_messages['strDismiss'] = "点击隐藏该提示";
PMA_messages['strRenamingDatabases'] = "正在重命名数据库";
PMA_messages['strCopyingDatabase'] = "正在复制数据库";
PMA_messages['strChangingCharset'] = "正在修改字符集";
PMA_messages['strNo'] = "否";
PMA_messages['strForeignKeyCheck'] = "启用外键约束";
PMA_messages['strErrorRealRowCount'] = "获取实际行数失败。";
PMA_messages['strSearching'] = "正在搜索";
PMA_messages['strHideSearchResults'] = "隐藏搜索结果";
PMA_messages['strShowSearchResults'] = "显示搜索结果";
PMA_messages['strBrowsing'] = "正在浏览";
PMA_messages['strDeleting'] = "正在删除";
PMA_messages['MissingReturn'] = "函数定义中必须包含 RETURN 语句！";
PMA_messages['strExport'] = "导出";
PMA_messages['enum_editor'] = "ENUM/SET 编辑器";
PMA_messages['enum_columnVals'] = "字段 %s 的值";
PMA_messages['enum_newColumnVals'] = "新字段的值";
PMA_messages['enum_hint'] = "每个输入框一个值。";
PMA_messages['enum_addValue'] = "添加 %d 个值";
PMA_messages['strImportCSV'] = "注意：如果文件包含多张表，它们将会被合并到一起。";
PMA_messages['strHideQueryBox'] = "隐藏查询框";
PMA_messages['strShowQueryBox'] = "显示查询框";
PMA_messages['strEdit'] = "编辑";
PMA_messages['strDelete'] = "删除";
PMA_messages['strNotValidRowNumber'] = "%d 不是有效行数。";
PMA_messages['strBrowseForeignValues'] = "浏览不相关的值";
PMA_messages['strNoAutoSavedQuery'] = "不自动保存查询";
PMA_messages['strBookmarkVariable'] = "变量 %d：";
PMA_messages['pickColumn'] = "检出";
PMA_messages['pickColumnTitle'] = "列选择器";
PMA_messages['searchList'] = "在该列表中搜索";
PMA_messages['strEmptyCentralList'] = "中心列表中没有列。请确保数据库  %s 的中心列表存在没有显示在当前表中的列。";
PMA_messages['seeMore'] = "显示更多";
PMA_messages['confirmTitle'] = "请核实信息？";
PMA_messages['makeConsistentMessage'] = "该操作有可能影响一些列的定义<br/>你确认做此更改吗？";
PMA_messages['strContinue'] = "继续";
PMA_messages['strAddPrimaryKey'] = "添加主键";
PMA_messages['strPrimaryKeyAdded'] = "主键已添加。";
PMA_messages['strToNextStep'] = "等待进入下一步…";
PMA_messages['strFinishMsg'] = "表“%s”标准化过程的第一步已经完成。";
PMA_messages['strEndStep'] = "完成";
PMA_messages['str2NFNormalization'] = "标准化第二步（2NF）";
PMA_messages['strDone'] = "完成";
PMA_messages['strConfirmPd'] = "确认局部依赖";
PMA_messages['strSelectedPd'] = "下面是已经选择的局部依赖：";
PMA_messages['strPdHintNote'] = "注意： a, b -> d,f 表示a和b两列结合起来决定d和f两列的值。";
PMA_messages['strNoPdSelected'] = "没有已选择的局部依赖！";
PMA_messages['strBack'] = "返回";
PMA_messages['strShowPossiblePd'] = "显示基于表中数据可能的局部依赖";
PMA_messages['strHidePd'] = "隐藏局部依赖列表";
PMA_messages['strWaitForPd'] = "坐好啦！取决于数据大小和表的列数，这可能需要几秒钟。";
PMA_messages['strStep'] = "步骤";
PMA_messages['strMoveRepeatingGroup'] = "<ol><b>下列操作将被执行：</b><li>将列 %s 从表 %s 中删除</li><li>创建下列表</li>";
    PMA_messages['strNewTablePlaceholder'] = "Enter new table name";
    PMA_messages['strNewColumnPlaceholder'] = "Enter column name";
    PMA_messages['str3NFNormalization'] = "标准化第三步（3NF）";
    PMA_messages['strConfirmTd'] = "确认传递依赖";
    PMA_messages['strSelectedTd'] = "下面是已经选择的依赖：";
    PMA_messages['strNoTdSelected'] = "没有已选择的依赖！";
    PMA_messages['strSave'] = "保存";
    PMA_messages['strHideSearchCriteria'] = "隐藏搜索条件";
    PMA_messages['strShowSearchCriteria'] = "显示搜索条件";
    PMA_messages['strRangeSearch'] = "范围搜索";
    PMA_messages['strColumnMax'] = "最大列数目:";
    PMA_messages['strColumnMin'] = "最小列数目:";
    PMA_messages['strMinValue'] = "最小值：";
    PMA_messages['strMaxValue'] = "最大值：";
    PMA_messages['strHideFindNReplaceCriteria'] = "隐藏搜索替换条件";
    PMA_messages['strShowFindNReplaceCriteria'] = "显示搜索替换条件";
    PMA_messages['strDisplayHelp'] = "<ul><li>每个点代表一个数据行。</li><li>悬浮至一个点上会显示它的标签。</li><li>要放大，请用鼠标选择图表的一块区域。</li><li>点击重置缩放按钮以回到初始状态。</li><li>点击数据点以查看或编辑数据行。</li><li>拖拽右下角以改变图表大小。</li></ul>";
    PMA_messages['strHelpTitle'] = "Zoom search instructions";
    PMA_messages['strInputNull'] = "<strong>选择两列</strong>";
    PMA_messages['strSameInputs'] = "<strong>选择两个不同的列</strong>";
    PMA_messages['strDataPointContent'] = "数据点内容";
    PMA_messages['strIgnore'] = "忽略";
    PMA_messages['strCopy'] = "复制";
    PMA_messages['strX'] = "X";
    PMA_messages['strY'] = "Y";
    PMA_messages['strPoint'] = "点";
    PMA_messages['strPointN'] = "点 %d";
    PMA_messages['strLineString'] = "线";
    PMA_messages['strPolygon'] = "多边形";
    PMA_messages['strGeometry'] = "几何体";
    PMA_messages['strInnerRing'] = "内环";
    PMA_messages['strOuterRing'] = "外环";
    PMA_messages['strAddPoint'] = "添加点";
    PMA_messages['strAddInnerRing'] = "添加内环";
    PMA_messages['strYes'] = "是";
    PMA_messages['strCopyEncryptionKey'] = "是否要复制加密密匙？";
    PMA_messages['strEncryptionKey'] = "加密密匙";
    PMA_messages['strLockToolTip'] = "检测到您已经对页面做出了修改。因此在您放弃改动时会提示您确认";
    PMA_messages['strSelectReferencedKey'] = "选择外键";
    PMA_messages['strSelectForeignKey'] = "选择外键";
    PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "请选择主键或唯一键！";
    PMA_messages['strChangeDisplay'] = "选择要显示的字段";
    PMA_messages['strLeavingDesigner'] = "尚未保存当前布局。如果继续将会丢失本次的修改。是否继续？";
    PMA_messages['strPageName'] = "页面名称";
    PMA_messages['strSavePage'] = "保存页面";
    PMA_messages['strSavePageAs'] = "保存页面为";
    PMA_messages['strOpenPage'] = "打开页面";
    PMA_messages['strDeletePage'] = "删除页面";
    PMA_messages['strUntitled'] = "未命名";
    PMA_messages['strSelectPage'] = "请选择一个页面";
    PMA_messages['strEnterValidPageName'] = "请输入有效页面名称";
    PMA_messages['strLeavingPage'] = "是否保存对该页面的更改？";
    PMA_messages['strSuccessfulPageDelete'] = "成功删除页面";
    PMA_messages['strExportRelationalSchema'] = "导出关系模式";
    PMA_messages['strModificationSaved'] = "已保存修改";
    PMA_messages['strAddOption'] = "给字段“%s”添加选项。";
    PMA_messages['strObjectsCreated'] = "已创建 %d 个对象。";
    PMA_messages['strSubmit'] = "提交";
    PMA_messages['strCellEditHint'] = "按 Esc 键取消编辑。";
    PMA_messages['strSaveCellWarning'] = "您已修改了一些数据但尚未保存。您真的要放弃保存并离开吗？";
    PMA_messages['strColOrderHint'] = "拖拽以调整顺序。";
    PMA_messages['strSortHint'] = "点此排序此列的结果。";
    PMA_messages['strMultiSortHint'] = "点击的同时按下 Shift 键即可将此列添加到 ORDER BY 语句中或是切换升序和降序。<br />使用 Ctrl+Click 或者 Alt+Click （Mac：Shift+Option+Click ）即可将列从 ORDER BY 语句中移除";
    PMA_messages['strColMarkHint'] = "点击以标记/取消标记。";
    PMA_messages['strColNameCopyHint'] = "双击以复制字段名。";
    PMA_messages['strColVisibHint'] = "点击下箭头<br />以设置显示的字段。";
    PMA_messages['strShowAllCol'] = "显示全部";
    PMA_messages['strAlertNonUnique'] = "该表没有唯一字段。在保存后单元格编辑、多选、编辑、复制和删除等功能可能无法正常使用。";
    PMA_messages['strEnterValidHex'] = "请输入一个有效的十六进制字符串。只有0-9和A-F为有效字符。";
    PMA_messages['strShowAllRowsWarning'] = "您真的想要查看所有的行吗？若表过大可能会导致浏览器崩溃。";
    PMA_messages['strOriginalLength'] = "原始长度";
    PMA_messages['dropImportMessageCancel'] = "取消";
    PMA_messages['dropImportMessageAborted'] = "已取消";
    PMA_messages['dropImportMessageFailed'] = "失败";
    PMA_messages['dropImportMessageSuccess'] = "成功";
    PMA_messages['dropImportImportResultHeader'] = "导入状态";
    PMA_messages['dropImportDropFiles'] = "将文件拖动至此";
    PMA_messages['dropImportSelectDB'] = "先选择数据库";
    PMA_messages['print'] = "打印";
    PMA_messages['back'] = "返回";
    PMA_messages['strGridEditFeatureHint'] = "您可以直接双击大部分<br />单元格以修改其值。";
    PMA_messages['strGoToLink'] = "前往：";
    PMA_messages['strColNameCopyTitle'] = "复制字段名。";
    PMA_messages['strColNameCopyText'] = "在字段名上右键以复制到剪贴板。";
    PMA_messages['strGeneratePassword'] = "生成密码";
    PMA_messages['strGenerate'] = "生成";
    PMA_messages['strChangePassword'] = "修改密码";
    PMA_messages['strMore'] = "更多";
    PMA_messages['strShowPanel'] = "显示导航面板";
    PMA_messages['strHidePanel'] = "隐藏导航面板";
    PMA_messages['strUnhideNavItem'] = "显示隐藏的导航树节点。";
    PMA_messages['linkWithMain'] = "与主面板链接";
    PMA_messages['unlinkWithMain'] = "从主面板取消链接";
    PMA_messages['strInvalidPage'] = "没有在历史记录中找到所请求的页面，页面可能已过期。";
    PMA_messages['strNewerVersion'] = "phpMyAdmin 有新版本了，请您考虑升级。最新的版本是 %s，于 %s 发布。";
    PMA_messages['strLatestAvailable'] = "，最新稳定版本：";
    PMA_messages['strUpToDate'] = "已更新";
    PMA_messages['strCreateView'] = "新建视图";
    PMA_messages['strSendErrorReport'] = "发送错误报告";
    PMA_messages['strSubmitErrorReport'] = "提交错误报告";
    PMA_messages['strErrorOccurred'] = "发生致命JavaScript错误。是否发送错误报告？";
    PMA_messages['strChangeReportSettings'] = "更改报告设置";
    PMA_messages['strShowReportDetails'] = "显示报告详细信息";
    PMA_messages['strTimeOutError'] = "由于PHP设置的执行限制时间过低，您的导入未能完成！";
    PMA_messages['strTooManyInputs'] = "警告：当前表单包含的字段多于 %d，受限于 PHP 中 max_input_vars 值的配置，该次提交有可能忽略其中一部分。";
    PMA_messages['phpErrorsFound'] = "<div class=\"error\">在服务上检测到错误！<br/>请查看此窗口的底部。<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"忽略\" class=\"floatright\" style=\"margin-top: 20px;\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"忽略全部\" class=\"floatright\" style=\"margin-top: 20px;\"></div></div>";
    PMA_messages['phpErrorsBeingSubmitted'] = "<div class=\"error\">在服务上检测到错误！<br/>正在提交您的设置，请耐心等待。<br/><img src=\"./themes/pmahomme/img/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"/></div>";
    PMA_messages['strConsoleRequeryConfirm'] = "再次执行该查询？";
    PMA_messages['strConsoleDeleteBookmarkConfirm'] = "您真的要删除该书签吗？";
    PMA_messages['strConsoleDebugError'] = "获取SQL调试信息时出错。";
    PMA_messages['strConsoleDebugSummary'] = "%s查询已执行%s次，耗时%s秒。";
    PMA_messages['strConsoleDebugArgsSummary'] = "%s 个参数已传递";
    PMA_messages['strConsoleDebugShowArgs'] = "显示注释";
    PMA_messages['strConsoleDebugHideArgs'] = "隐藏注释";
    PMA_messages['strConsoleDebugTimeTaken'] = "用时：";
    PMA_messages['strNoLocalStorage'] = "There was a problem accessing your browser storage, some features may not work properly for you. It is likely that the browser doesn\'t support storage or the quota limit has been reached. In Firefox, corrupted storage can also cause such a problem, clearing your \"Offline Website Data\" might help. In Safari, such problem is commonly caused by \"Private Mode Browsing\".";
    PMA_messages['strCopyTablesTo'] = "复制数据表到";
    PMA_messages['strAddPrefix'] = "添加表前缀";
    PMA_messages['strReplacePrefix'] = "替换表前缀";
    PMA_messages['strCopyPrefix'] = "复制表为新前缀";
    var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
    var pmaThemeImage = './themes/pmahomme/img/';
    var mysql_doc_template = './url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html';
    var maxInputVars = 2500;
    if ($.datepicker) {
    $.datepicker.regional['']['closeText'] = "完成";
    $.datepicker.regional['']['prevText'] = "上个月";
    $.datepicker.regional['']['nextText'] = "下个月";
    $.datepicker.regional['']['currentText'] = "今天";
    $.datepicker.regional['']['monthNames'] = ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月",];
    $.datepicker.regional['']['monthNamesShort'] = ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月",];
    $.datepicker.regional['']['dayNames'] = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六",];
    $.datepicker.regional['']['dayNamesShort'] = ["周日","周一","周二","周三","周四","周五","周六",];
    $.datepicker.regional['']['dayNamesMin'] = ["日","一","二","三","四","五","六",];
    $.datepicker.regional['']['weekHeader'] = "周";
    $.datepicker.regional['']['showMonthAfterYear'] = true;
    $.datepicker.regional['']['yearSuffix'] = "年";
    $.extend($.datepicker._defaults, $.datepicker.regional['']);
    } /* if ($.datepicker) */

    if ($.timepicker) {
    $.timepicker.regional['']['timeText'] = "时间";
    $.timepicker.regional['']['hourText'] = "时";
    $.timepicker.regional['']['minuteText'] = "分";
    $.timepicker.regional['']['secondText'] = "秒";
    $.extend($.timepicker._defaults, $.timepicker.regional['']);
    } /* if ($.timepicker) */

    function extendingValidatorMessages() {
    $.extend($.validator.messages, {
    required: "此字段为必须字段", remote: "请修改这个字段", email: "请输入有效的Email地址", url: "请输入一个有效的链接地址", date: "请输入有效的日期", dateISO: "请输入有效的日期（ISO标准格式）", number: "请输入一个有效的数字", creditcard: "请输入一个有效的银行卡号码", digits: "请输入纯数字", equalTo: "请重输一遍", maxlength: $.validator.format("请输入不超过{0}位字符"), minlength: $.validator.format("请输入大于{0}位字符"), rangelength: $.validator.format("请输入一个 {0} 和 {1} 字符长度之间的值"), range: $.validator.format("请输入 {0} 和 {1}之间的一个值"), max: $.validator.format("请输入一个小于或等于 {0} 的值"), min: $.validator.format("请输入一个大于或等于 {0} 的值"), validationFunctionForDateTime: $.validator.format("请输入有效的日期或时间"), validationFunctionForHex: $.validator.format("请输入一个有效的HEX值"), validationFunctionForFuns: $.validator.format("错误")
    });
    } /* if ($.validator) */