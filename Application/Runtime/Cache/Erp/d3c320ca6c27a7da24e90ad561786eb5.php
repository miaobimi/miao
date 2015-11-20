<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="<?php echo U('detail',array('noid'=>$list['noid']));?>" method="post">
        <input type="hidden" name="noid" value="<?php echo ($list['noid']); ?>">
        <div class="bjui-searchBar">
            <label>年月:</label>
            <select name="mid" data-toggle="selectpicker">
                <option value="2015-04">2015-04</option>
                <option value="2015-05">2015-05</option>
                <option value="2015-06">2015-06</option>
                <option value="2015-07">2015-07</option>
                <option value="2015-08">2015-08</option>
            </select>&nbsp;
            <button type="submit" class="btn-default" data-icon="search">查询</button>
        </div>
    </form>
</div>
<div class="bjui-pageContent">
	<table id="tabledit1" class="table table-bordered table-hover table-striped table-top" data-toggle="tabledit" data-initnum="0" data-action="ajaxDone3.html" data-single-noindex="true">
        <thead>
            <tr>
                <th align="center" colspan="12">4月份考勤表</th>
            </tr>
            <tr>
            	<th colspan="2">日期</th>
            	<th colspan="2">星期</th>
            	<th colspan="6">打卡时间</th>
            </tr>
        </thead>
        <tbody>
        	<?php if(is_array($list['content'])): $k = 0; $__LIST__ = $list['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr data-id="<?php echo ($k); ?>">
	                <td colspan="2" data-id-val="<?php echo ($k); ?>"><?php echo ($list['mid']); ?>-<?php echo ($vo["date"]); ?></td>
	                <td colspan="2"><?php echo (week($vo["week"])); ?></td>
	                <td colspan="8">
                      <?php if(is_array($vo['time'])): $i = 0; $__LIST__ = $vo['time'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>   
                    </td>
	            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<div class="bjui-pageFooter">
    
</div>