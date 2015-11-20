<?php
namespace Erp\Controller;
use Think\Controller;
class AttenceController extends Controller {

    Public function index(){

        $staff = M('staff');
        $count      = $staff->count();
        $Page       = new \Think\Page($count,25);
        $show       = $Page->show();
        $list = $staff->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $rules = M('attence_rules')->field('id,name')->select();
        $this->rules = $rules;
        // p($list);die;
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display(); 
    }

    Public function detail(){
        $mid = I('mid');
        if(!empty($mid)){
            $where = array('noid'=>I('noid'),'mid'=>$mid);
        }else{
            $where = array('noid'=>I('noid'));
        }
        // p($where);die;
        $data = M('attence')->where($where)->find();
        $data['content'] = unserialize($data['content']);
        // p($data);die;
        $this->list = $data;
        $this->display();
    }


    /**
     *   创建规则
     * @return [type] [description]
     */
    Public function rule(){

        $this->display();
    }

    Public function saveRules(){
        if(IS_POST){
            $condition = array(
                'week' => array(
                    'sat' => I('sat','','intval'),
                    'sun' => I('sun','','intval')
                ),
                'range' => array(
                    'startdate' => I('startdate'),
                    'enddate' => I('enddate')
                ),
                'days' => I('days')
            );
            $data = array(
                'name' => I('rulename','','trim'),
                'condition' => serialize($condition),
                'add_time' => time()
            );
            if(M('attence_rules')->add($data)){
                $msg = array(
                    'statusCode' => '200',
                    'message' => '保存成功'
                );
                $this->ajaxReturn($msg);
            }else{
                $msg = array(
                    'statusCode' => '300',
                    'message' => '保存，请重试'
                );
                $this->ajaxReturn($msg);
            }
        }
    }


    /**
     * 计算考勤
     * @return [type] [description]
     */
    Public function build(){

        if(IS_POST){

            $nine =strtotime('09:00');
            $twelve = strtotime('12:00');
            $t_1315 = strtotime('13:15');
            $t_1330 = strtotime('13:30');
            $six = strtotime('18:00');

            $data = M('attence')->where(array('mid'=>I('mid')))->select();
            $rule = M('attence_rules')->where(array('id'=>I('rule')))->field('condition')->find();
            $rule['condition'] = unserialize($rule['condition']);
            foreach ($data as $k=>$v) {
                $data[$k]['content'] = unserialize($v['content']); 
                foreach ($data[$k]['content'] as $kk=>$vv) {
                    $key = $data[$k]['content'][$kk]['time'];

                    foreach ($key as $vvv) {
                        
                        if(empty($vvv)){
                            continue;
                        }
                        $lit = strtotime($vvv);
                        if($lit<=$nine){
                            if(empty($key['one']) && !isset($key['one'])){
                                $key['one'] = $vvv;
                            }

                        }
                        if($lit>=$twelve && $lit <= $t_1315){
                            if(empty($key['two']) && !isset($key['two'])){
                                $key['two'] = $vvv;
                            }
                        }
                        if(($t_1315<=$lit) && ($lit<=$t_1330)){
                            if(empty($key['three']) && !isset($key['three'])){
                                $key['three'] = $vvv;
                            }
                        }
                        if($lit>=$six){
                            if(empty($key['four']) && !isset($key['four'])){
                                $key['four'] = $vvv;
                            }
                        }
                    }

                    $data[$k]['content'][$kk]['time'] = $key;
                }
                $data[$k]['content'] = serialize($data[$k]['content']);
                p($data);
            }
            // p($data);die;
        }else{
            $rules = M('attence_rules')->field('id,name')->select();
            $this->rules = $rules;
            $this->display();
        }
    }


    Public function indexsss(){
        $nine =strtotime('09:00');
        $twelve = strtotime('12:00');
        $t_1315 = strtotime('13:15');
        $t_1330 = strtotime('13:30');
        $six = strtotime('18:00');

        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        //要导入的xls文件，位于根目录下的Public文件夹
        $filename="./Public/2.xls";
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new \PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类
        import("Org.Util.PHPExcel.Reader.Excel5");
        //如果excel文件后缀名为.xlsx，导入这下类
        //import("Org.Util.PHPExcel.Reader.Excel2007");
        //$PHPReader=new \PHPExcel_Reader_Excel2007();

        $PHPReader=new \PHPExcel_Reader_Excel5();
        //载入文件
        $PHPExcel=$PHPReader->load($filename);
        //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet=$PHPExcel->getSheet(2);
        //获取总列数
        $allColumn=$currentSheet->getHighestColumn();
        //获取总行数
        $allRow=$currentSheet->getHighestRow();

        $columnName = array('A','B','C','D','E','F','G','H','I','J','K',
            'L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
            'AA','AB','AC','AD');

        $count = ceil(($allRow-5)/2);
        // p($count);die;
        $currentRow = 5;
        $total = array();
        for($z=0;$z<$count;$z++){

            $number = $currentSheet->getCell('C'.$currentRow)->getValue();
            $name = $currentSheet->getCell('K'.$currentRow)->getValue();
            $apartment = $currentSheet->getCell('U'.$currentRow)->getValue();
            // p($number);p($name);p($apartment);die;
            $member = array();
            $time = array();
            $broke = array();
            $full = array();
        
            for($i=0; $i<count($columnName); $i++){
                //数据坐标
                $col = $currentRow+1;
                $address=$columnName[$i].$col;
                // p($address);
                $val = $currentSheet->getCell($address)->getValue();
                $val = str_split($val,5);
                $nowTime = array();
                $nowTime['date'] = $i+1;
                if(strlen($nowTime['date'])==1){
                    $nowTime['date'] = '0'.$nowTime['date'];
                }
                $str = '2015-04-'.$nowTime['date'].' 00:00:00';
                $nowTime['week'] = date('w',strtotime($str));
                foreach ($val as $v) {
                    if(empty($v)){
                        continue;
                    }
                    $lit = strtotime($v);
                    if($lit<=$nine){
                        if(empty($nowTime['time']['one']) && !isset($nowTime['time']['one'])){
                            $nowTime['time']['one'] = $v;
                        }
                    }
                    if($lit>=$twelve && $lit <= $t_1315){
                        if(empty($nowTime['time']['two']) && !isset($nowTime['time']['two'])){
                            $nowTime['time']['two'] = $v;
                        }
                    }
                    if(($t_1315<=$lit) && ($lit<=$t_1330)){
                        if(empty($nowTime['time']['three']) && !isset($nowTime['time']['three'])){
                            $nowTime['time']['three'] = $v;
                        }
                    }
                    if($lit>=$six){
                        if(empty($nowTime['time']['four']) && !isset($nowTime['time']['four'])){
                            $nowTime['time']['four'] = $v;
                        }
                    }
                }
                if(count($nowTime['time']) < 4 && $nowTime['week'] != 0){
                    array_push($broke, $nowTime);
                }else{
                    array_push($full, $nowTime);
                }
                array_push($time,$nowTime);
            }

            $member = array(
                'number' => $number,
                'name' => $name,
                'apartment' => $apartment,
                'broke' => $broke,
                'full' => $full,
                'time' => $time
            );

            array_push($total, $member);

            $currentRow += 2;
        }
        p($total);die;
        $this->list = $total;
        $this->display();
        //09:00  12:00 13:15-13:30 18:00
    }

    Public function detailss(){
        $nine =strtotime('09:00');
        $twelve = strtotime('12:00');
        $t_1315 = strtotime('13:15');
        $t_1330 = strtotime('13:30');
        $six = strtotime('18:00');

        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        //要导入的xls文件，位于根目录下的Public文件夹
        $filename="./Public/2.xls";
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new \PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类
        import("Org.Util.PHPExcel.Reader.Excel5");
        //如果excel文件后缀名为.xlsx，导入这下类
        //import("Org.Util.PHPExcel.Reader.Excel2007");
        //$PHPReader=new \PHPExcel_Reader_Excel2007();

        $PHPReader=new \PHPExcel_Reader_Excel5();
        //载入文件
        $PHPExcel=$PHPReader->load($filename);
        //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet=$PHPExcel->getSheet(2);
        //获取总列数
        $allColumn=$currentSheet->getHighestColumn();
        //获取总行数
        $allRow=$currentSheet->getHighestRow();

        $columnName = array('A','B','C','D','E','F','G','H','I','J','K',
            'L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
            'AA','AB','AC','AD');

        $count = ceil(($allRow-5)/2);
        // p($count);die;
        $currentRow = 5;
        $total = array();
        for($z=0;$z<$count;$z++){

            $number = $currentSheet->getCell('C'.$currentRow)->getValue();
            $name = $currentSheet->getCell('K'.$currentRow)->getValue();
            $apartment = $currentSheet->getCell('U'.$currentRow)->getValue();
            // p($number);p($name);p($apartment);die;
            $member = array();
            $time = array();
            $broke = array();
            $full = array();
        
            for($i=0; $i<count($columnName); $i++){
                //数据坐标
                $col = $currentRow+1;
                $address=$columnName[$i].$col;
                // p($address);
                $val = $currentSheet->getCell($address)->getValue();
                $val = str_split($val,5);
                $nowTime = array();
                $nowTime['date'] = $i+1;
                if(strlen($nowTime['date'])==1){
                    $nowTime['date'] = '0'.$nowTime['date'];
                }
                $str = '2015-04-'.$nowTime['date'].' 00:00:00';
                $nowTime['week'] = date('w',strtotime($str));
                foreach ($val as $v) {
                    if(empty($v)){
                        continue;
                    }
                    $lit = strtotime($v);
                    if($lit<=$nine){
                        if(empty($nowTime['time']['one']) && !isset($nowTime['time']['one'])){
                            $nowTime['time']['one'] = $v;
                        }
                    }
                    if($lit>=$twelve && $lit <= $t_1315){
                        if(empty($nowTime['time']['two']) && !isset($nowTime['time']['two'])){
                            $nowTime['time']['two'] = $v;
                        }
                    }
                    if(($t_1315<=$lit) && ($lit<=$t_1330)){
                        if(empty($nowTime['time']['three']) && !isset($nowTime['time']['three'])){
                            $nowTime['time']['three'] = $v;
                        }
                    }
                    if($lit>=$six){
                        if(empty($nowTime['time']['four']) && !isset($nowTime['time']['four'])){
                            $nowTime['time']['four'] = $v;
                        }
                    }
                }
                if(count($nowTime['time']) < 4 && $nowTime['week'] != 0){
                    array_push($broke, $nowTime);
                }else{
                    array_push($full, $nowTime);
                }
                array_push($time,$nowTime);
            }

            $member = array(
                'number' => $number,
                'name' => $name,
                'apartment' => $apartment,
                'broke' => $broke,
                'full' => $full,
                'time' => $time
            );

            array_push($total, $member);

            $currentRow += 2;
        }
        p($total);die;
        $this->list = $total;
        $this->display();
        //09:00  12:00 13:15-13:30 18:00
    }

    //=============================================================
    Public function save(){
        
        $pageno = I('pageno',0,'intval')-1;
        $file = I('file');
        $month = I('mid');
        if(!empty($file) && isset($file)){
            $total = $this->_getExcelData($file,$pageno,$month);
      
            if($total && !empty($total)){
                if(M('attence')->addAll($total)){
                    $msg = array(
                        'statusCode' => '200',
                        'message' => '保存成功'
                    );
                }else{
                    $msg = array(
                        'statusCode' => '300',
                        'message' => '载入数据库失败，请重试'
                    );
                }
                $this->ajaxReturn($msg);
            }
        }
        
        
    }

    Private function _getExcelData($filedir,$sheet,$month){
        $nine =strtotime('09:00');
        $twelve = strtotime('12:00');
        $t_1315 = strtotime('13:15');
        $t_1330 = strtotime('13:30');
        $six = strtotime('18:00');
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        //要导入的xls文件，位于根目录下的Public文件夹
        $filename=$filedir;
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new \PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类
        import("Org.Util.PHPExcel.Reader.Excel5");
        //如果excel文件后缀名为.xlsx，导入这下类
        //import("Org.Util.PHPExcel.Reader.Excel2007");
        //$PHPReader=new \PHPExcel_Reader_Excel2007();

        $PHPReader=new \PHPExcel_Reader_Excel5();
        //载入文件
        $PHPExcel=$PHPReader->load($filename);
        //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet=$PHPExcel->getSheet($sheet);
        //获取总列数
        $allColumn=$currentSheet->getHighestColumn();
        //获取总行数
        $allRow=$currentSheet->getHighestRow();

        $columnName = array('A','B','C','D','E','F','G','H','I','J','K',
            'L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
            'AA','AB','AC','AD');

        $count = ceil(($allRow-5)/2);
        // p($count);die;
        $currentRow = 5;
        $total = array();
        for($z=0;$z<$count;$z++){

            $number = $currentSheet->getCell('C'.$currentRow)->getValue();
            $name = $currentSheet->getCell('K'.$currentRow)->getValue();
            $apartment = $currentSheet->getCell('U'.$currentRow)->getValue();
            // p($number);p($name);p($apartment);die;
            $member = array();
            $time = array();
        
            for($i=0; $i<count($columnName); $i++){
                //数据坐标
                $col = $currentRow+1;
                $address=$columnName[$i].$col;
                // p($address);
                $val = $currentSheet->getCell($address)->getValue();
                $val = str_split($val,5);
                $nowTime = array();
                $nowTime['date'] = $i+1;
                if(strlen($nowTime['date'])==1){
                    $nowTime['date'] = '0'.$nowTime['date'];
                }
                $str = $month.'-'.$nowTime['date'].' 00:00:00';

                $nowTime['week'] = date('w',strtotime($str));
                $nowTime['time'] = $val;
                array_push($time,$nowTime);
            }

            $member = array(
                'noid' => $number,
                'mid' => $month,
                'content' => serialize($time)
            );

            array_push($total, $member);

            $currentRow += 2;
        }
        return $total;
    }

    Public function import(){

        $this->display();
    }

    /**
     * 上传文件
     * @return [type] [description]
     */
    Public function uploadFile(){
        // p($_FILES);die;
        if (!empty($_FILES)) {
          
            $config = array(   
                'maxSize'    =>    3145728, 
                'savePath'   =>    './xls/',  
                'saveName'   =>    array('uniqid',''), 
                'exts'       =>    array('xls'),  
                'autoSub'    =>    true,   
                'subName'    =>    array('date','Ymd'),
            );
            $upload = new \Think\Upload($config);// 实例化上传类
            $images = $upload->upload();
          
            if($images){
                $thinkUrl = $images['file']['savepath'].$images['file']['savename'];
                $info='./Uploads/'.ltrim($thinkUrl,'./');
                //返回文件地址和名给JS作回调用
                $data = array(
                    'statusCode' => '200',
                    'filename' => $images['file']['savename'],
                    'file' => $info,
                    'message' => '上传成功'
                );
                $this->ajaxReturn($data);
            }
            else{
                $data = array(
                    'statusCode' => '300',
                    'message' => $upload->getError()
                );
                $this->ajaxReturn($data);
            }
        }
    }
}


?>