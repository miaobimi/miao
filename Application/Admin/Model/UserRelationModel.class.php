<?php 
namespace Admin\Model;
use Think\Model\RelationModel;


class UserRelationModel extends RelationModel{

	protected $tableName='user';
    protected $_link = array(

         'AuthGroup' => array(
		    'mapping_type'      =>  self::MANY_TO_MANY,
		    'class_name'        =>  'AuthGroup',
		    'mapping_name'      =>  'gro',
		    'foreign_key'       =>  'uid',
		    'relation_foreign_key'  =>  'group_id',
		    'mapping_fields'=>'id,title',
		    'relation_table'    =>  'm_auth_group_access' //此处应显式定义中间表名称，且不能使用C函数读取表前缀
		  )

    );
}


 ?>