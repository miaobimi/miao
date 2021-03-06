<?php if (!defined('THINK_PATH')) exit();?><style>
    .table-self tbody tr{
        height: 60px;
    }
</style>

<div class="bjui-pageContent">
    <form action="<?php echo U('saverules');?>" id="j_form_form" class="pageForm" data-toggle="validate">
        <div style="margin:15px auto 0; width:800px;">
            <fieldset>
                <legend>新增模版规则</legend>
                <table class="table table-condensed table-hover table-self">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td align="right"><label class="label-control">规则名称：</label></td>
                            <td>
                                <input name="rulename" type="text" class="input-nm" placeholder="如：四月份考勤规则01" data-rule="required" >
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="right"><label class="label-control">过滤条件：</label></td>
                            <td>
                                <input type="checkbox" name="sat" id="j_custom_sat" data-toggle="icheck" value="6" data-label="每周六" >
                                <input type="checkbox" name="sun" id="j_custom_sun" data-toggle="icheck" value="0" data-label="每周日" checked>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="right"><label class="label-control"></label></td>
                            <td>
                                <input class="input-nm" type="text" name="startdate" id="j_custom_indate" value="2015-06-01" data-toggle="datepicker" data-rule="date" size="15">-<input class="input-nm" type="text" name="enddate" id="j_custom_indate" value="2015-06-01" data-toggle="datepicker" data-rule="date" size="15">
                            </td>
                            <td>时间范围 过滤连续几天（如法定节假日）</td>
                        </tr>
                        <tr>
                            <td align="right"><label class="label-control"></label></td>
                            <td>
                                <textarea name="days" id="" cols="30" rows="10"></textarea>
                            </td>
                            <td>1、具体某一天(如：2015-06-01) <br>
                            	2、多天以‘，’隔开(如：2016-09-01,2016-09-10)</td>
                        </tr>
                        <tr>
                            <td align="right"></td>
                            <td><button type="submit" class="btn-default" data-icon="save">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn-close" data-icon="close">关闭</button></td>
                            <td></td>
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