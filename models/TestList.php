<?php

class TestList extends BaseModel {
	public $_list_pic='';
    public function tableName() {
        return '{{test_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            array('c_code', 'required', 'message' => '{attribute} 不能为空'),
            array('supplier_id', 'required', 'message' => '{attribute} 不能为空'),
			//array('apply_time', 'required', 'message' => '{attribute} 不能为空'),
            array('c_title', 'required', 'message' => '{attribute} 不能为空'),
			array('c_no', 'required', 'message' => '{attribute} 不能为空'),
          //  array('email', 'required', 'message' => '{attribute} 不能为空'),
		    //array('contact_id_card_back', 'required', 'message' => '{attribute} 不能为空'),
			//array('club_address', 'required', 'message' => '{attribute} 不能为空'),
			array('f_check,end_time,start_time,update_date','safe'),
			//array($s1,'safe'),
		);
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array(
		 
		);
    }

    /**
     * 属性标签
     */
    public function attributeLabels() {
        return array(
            'c_code' => '编码',
             'c_title' => '标题',
			 'c_no' => '编号',
			 'supplier_id' => '供应商id',
			 
			
			 'start_time'=> '开始时间',
			 'end_time' => '结束时间',
			 'state_name' => '状态名称',
			 'f_check' => '检查方',
			 'update_date' => '更新日期',
	
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

    public function getCode() {
        return $this->findAll('1=1');
    }
}
