<?php

namespace Home\Model;
use Think\Model;

/**
 *  团队模型
 */

class TeamModel extends Model {

    Protected $_validate = array(
        array('teamName', '2,16', '团队名称长度为2-16个字符', self::EXISTS_VALIDATE, 'length'),
        // array('teamName', '', '团队名称已被注册',self::EXISTS_VALIDATE, 'unique'), //用户名被占用
        array('teamLogo','require','团队logo必须！'),
        // array('teamLogo','checkLogo','logo尺寸有误！',1,'callback',1),
    );

}
