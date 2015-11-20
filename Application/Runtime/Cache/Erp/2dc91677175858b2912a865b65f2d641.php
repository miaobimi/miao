<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
//自动有效日期
$(document).on('afterchange.bjui.datepicker', '.j_custom_issuedate', function(e, data) {
    var pattern = 'yyyy-MM-dd'
    var start   = end = data.value
    var $end    = $(this).closest('tr').find('.j_custom_indate')
    
    if ($end.length) {
        end.setFullYear(start.getFullYear() + 10)
        end.setDate(start.getDate() - 1)
        $end.val(end.formatDate(pattern))
    }
})
//上传图片完成回调
function custom_pic_upload_success(file, data, $upload) {
    var json = $.parseJSON(data)
    if (json[BJUI.keys.statusCode] == BJUI.statusCode.ok) {
        var pic = json.navTabId
        
        $upload.next().val(pic).next().html('<img src="'+ pic +'" width="80" />')
    }
}
//删除回调
$('#tabledit1').on('afterdelete.bjui.tabledit', function(e) {
    var $tbody = $(e.relatedTarget)
    
    console.log('你删除了一条数据，还有['+ $tbody.find('> tr').length +']条数据！')
})
</script>
<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="table-edit.html" method="post">
        <input type="hidden" name="pageNum" value="${model.pageNum}">
        <input type="hidden" name="numPerPage" value="${model.numPerPage}">
        <input type="hidden" name="orderField" value="${param.orderField}">
        <input type="hidden" name="orderDirection" value="${param.orderDirection}">
        <div class="bjui-searchBar">
            <label for="">年月：</label>
            <select name="mid" data-toggle="selectpicker">
                <option value="2015-04">2015-04</option>
                <option value="2015-05">2015-05</option>
                <option value="2015-06">2015-06</option>
                <option value="2015-07">2015-07</option>
                <option value="2015-08">2015-08</option>
            </select>
            <label for="">规则：</label>
            <select name="rule" data-toggle="selectpicker">
                <?php if(is_array($rules)): $i = 0; $__LIST__ = $rules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>&nbsp;
            <button type="submit" class="btn-default" data-icon="search">计算</button>
        </div>
    </form>
</div>
<div class="bjui-pageContent">
    <form action="ajaxDone2.html" id="j_custom_form" class="pageForm" data-toggle="validate" method="post">
        <table id="tabledit1" class="table table-bordered table-hover table-striped table-top" data-initnum="0" data-action="ajaxDone3.html" data-single-noindex="true">
            <thead>
                <tr data-idname="customList[#index#].id">
                    <th title="No.">ID</th>
                    <th title="员工号码">员工号码</th>
                    <th title="员工姓名">员工姓名</th>
                    <th title="部门">部门</th>
                    <th title="考勤结果">考勤结果</th>
                    <th width="400">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr data-id="<?php echo ($k); ?>">
                        <td data-id-val="<?php echo ($k); ?>"><?php echo ($k); ?></td>
                        <td><?php echo ($vo["no"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><?php echo ($vo["apartment"]); ?></td>
                        <td>xxx</td>
                        <td>
                            <a class="btn btn-green" data-toggle="navtab" data-title="考勤-<?php echo ($vo["name"]); ?>" data-id="form" href="<?php echo U('Attence/detail',array('noid'=>$vo['no']));?>">查看每月完整考勤</a>
                            <a class="btn btn-green" data-toggle="navtab" data-title="考勤-<?php echo ($vo["name"]); ?>" data-id="form" href="<?php echo U('Attence/detail',array('noid'=>$vo['no']));?>">查看每月自定义考勤</a>
                            <a href="ajaxDone2.html" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要删除该行信息吗？">删</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
        <li><button type="submit" class="btn-default" data-icon="save">全部保存</button></li>
    </ul>
</div>