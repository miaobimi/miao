<?php if (!defined('THINK_PATH')) exit();?><script>
function pic_upload_success(file, data) {
    var json = $.parseJSON(data)
    
    $(this).bjuiajax('ajaxDone', json)
    if (json[BJUI.keys.statusCode] == BJUI.statusCode.ok) {
        $('#j_custom_pic').val(json.file).trigger('validate')
        $('#j_custom_span_pic').html('<a href="'+ json.file +'" width="100" >'+json.filename+'</a>')
    }
}


</script>
<style>
    .table-self tbody tr{
        height: 60px;
    }
</style>
<div class="bjui-pageContent">
    <form action="<?php echo U('save');?>" id="j_form_form" class="pageForm" data-toggle="validate">
        <div style="margin:15px auto 0; width:800px;">
            <fieldset>
                <legend>导入excel考勤表</legend>
                <table class="table table-condensed table-hover table-self">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="right"><label class="label-control">当前年月：</label></td>
                            <td>
                                <input name="mid" type="text" class="input-nm" placeholder="如：2015-06" data-rule="required" >
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><label class="label-control">上传excel文件</label></td>
                            <td>
                                <div style="display: inline-block; vertical-align: middle;">
                                    <div id="j_custom_pic_up" data-toggle="upload" data-uploader="<?php echo U('uploadFile');?>" 
                                        data-file-size-limit="1024000000"
                                        data-file-type-exts="*.xls"
                                        data-multi="true"
                                        data-on-upload-success="pic_upload_success"
                                        data-icon="cloud-upload"></div>
                                    <input type="hidden" name="file" value="" id="j_custom_pic">
                                </div>
                                <span style="margin:0px 0 0 40px;" id="j_custom_span_pic"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><label class="label-control">第几张表：</label></td>
                            <td>
                                <input name="pageno" type="text" class="input-nm" placeholder="请输入数字" data-rule="required" >
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><button type="submit" class="btn-default" data-icon="save">保存</button></td>
                            <td><button type="button" class="btn-close" data-icon="close">关闭</button></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </div>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
    </ul>
</div>