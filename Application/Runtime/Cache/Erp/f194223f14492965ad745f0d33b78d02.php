<?php if (!defined('THINK_PATH')) exit();?><style>
    .table-self tbody tr{
        height: 60px;
    }
</style>
<div class="bjui-pageContent">
    <form action="<?php echo U('build');?>" id="j_form_form" class="pageForm" data-toggle="validate">
        <div style="margin:15px auto 0; width:800px;">
            <fieldset>
                <legend>计算考勤</legend>
                <table class="table table-condensed table-hover table-self">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="right"><label class="label-control">选择年月：</label></td>
                            <td>
                               <select name="mid" data-toggle="selectpicker">
                                    <option value="2015-04">2015-04</option>
                                    <option value="2015-05">2015-05</option>
                                    <option value="2015-06">2015-06</option>
                                    <option value="2015-07">2015-07</option>
                                    <option value="2015-08">2015-08</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><label class="label-control">选择规则：</label></td>
                            <td>
                                <select name="rule" data-toggle="selectpicker">
                                    <?php if(is_array($rules)): $i = 0; $__LIST__ = $rules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><button type="submit" class="btn-default" data-icon="save">开始计算，请耐心等待...</button></td>
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