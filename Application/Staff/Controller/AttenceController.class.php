<?php
namespace Staff\Controller;
use Think\Controller;
class AttenceController extends Controller {

    Public function index(){
        $username = '陈添林';

        $where = array('username'=>$username);
        $list = M('Attence')->where($where)->find();
        $list['content'] = unserialize($list['content']);
        //p($list);die;
        $this->list = $list;
        $this->display();
    }

    Public function countAttence(){

        $list = M('Attence')->select();
        p($list);die;
    }

    Public function import(){

        if(IS_POST){
            $date = I('date');
            $file = I('file');
            if(!empty($date) && !empty($file)){
                $data = $this->_getXlsData($file,$date);
                if(is_array($data)){
                    if(M('attence')->addAll($data)){
                        $this->success('导入数据库成功');
                    }else{
                        $this->error('导入数据库有误，请检查');
                    }
                }else{
                    $this->error('xls表格式有误，请检查');
                }
            }else{
                $this->error('参数为空，请检查');
            }
            
        }else{
            $this->display();
        }
    }

    Public function uploadXls(){
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
                    'status' => 1,
                    'filename' => $images['file']['savename'],
                    'file' => $info,
                    'message' => '上传成功'
                );
                $this->ajaxReturn($data);
            }
            else{
                $data = array(
                    'status' => 0,
                    'message' => $upload->getError()
                );
                $this->ajaxReturn($data);
            }
        }
    }

    Private function _getXlsData($filename,$date,$sheetNum=2){

        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        //要导入的xls文件，位于根目录下的Public文件夹
        
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
        $currentSheet=$PHPExcel->getSheet($sheetNum);
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
            // $apartment = $currentSheet->getCell('U'.$currentRow)->getValue();
            // p($number);p($name);p($apartment);die;
            $member = array();
            $time = array();
        
            for($i=0; $i<count($columnName); $i++){
                //数据坐标
                $col = $currentRow+1;
                $address=$columnName[$i].$col;
                // p($address);
                $val = $currentSheet->getCell($address)->getValue();
                if(strlen($val)>5){
                    $val = str_split($val,5);
                }
                
                $nowTime = array();
                $nowTime['date'] = $i+1;
                if(strlen($nowTime['date'])==1){
                    $nowTime['date'] = '0'.$nowTime['date'];
                }
                $str = $date.'-'.$nowTime['date'].' 00:00:00';
                $nowTime['week'] = date('w',strtotime($str));
                $nowTime['time'] = $val;
                array_push($time,$nowTime);
            }

            $member = array(
                'date' => $date,
                // 'number' => $number,
                'username' => $name,
                // 'apartment' => $apartment,
                'content' => serialize($time)
            );

            array_push($total, $member);

            $currentRow += 2;
        }
        return $total;
    }
    
    Public function indexs(){
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
        //09:00  12:00 13:15-13:30 18:00
    }

    Public function test(){
        $nine =strtotime('09:00');
        $twelve = strtotime('12:00');
        $t_1315 = strtotime('13:15');
        $t_1330 = strtotime('13:30');
        $six = strtotime('18:00');

        $test = strtotime('10:00');

        p($nine);p($twelve);p($t_1315);p($t_1330);p($six);
        p($test);
    }
}


?>