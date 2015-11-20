<?php
namespace Staff\Model;
use Think\Model\RelationModel;
class UserinfoRelationModel extends RelationModel{
	protected $tableName='userinfo';
	protected $_link = array(
		'User' => array(
				'mapping_type' => self::BELONGS_TO,
	         	'class_name' => 'User',
	          	'mapping_name' => 'auser',
	         	'foreign_key' => 'uid',
	         	/*'as_fields' => 'number,username,nickname,password,sex,email,mobile,qq,last_login_time,last_login_ip,status,uid:aaid'*/
	         	// 'as_fields' => 'birth,entry,quit,startcon,endcon,uid:aaid'
			) 
		 );
}
?>