<?php

class OrderList extends BaseModel {
	public $order_list_pic='';
    public function tableName() {
        return '{{order_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            array('entry_date', 'required', 'message' => '{attribute} 不能为空'),
            array('client_name', 'required', 'message' => '{attribute} 不能为空'),
			array('amount_of_money', 'required', 'message' => '{attribute} 不能为空'),
            array('order_code', 'required', 'message' => '{attribute} 不能为空'),
			array('entry_code', 'required', 'message' => '{attribute} 不能为空'),
			array('cloth_code', 'required', 'message' => '{attribute} 不能为空'),
			array('cloth_name', 'required', 'message' => '{attribute} 不能为空'),
            array('amount_of_cloth', 'required', 'message' => '{attribute} 不能为空'),
            array('price', 'required', 'message' => '{attribute} 不能为空'),
			array('warehouse', 'required', 'message' => '{attribute} 不能为空'),
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
            'id' => 'ID',
             'entry_date' => '进仓日期',
			 'client_name' => '客户名字',
			 'order_code' => '订单编号',
			 'entry_code' => '进仓编号',
			 'cloth_code' => '衣服编号',
			 'cloth_name' => '衣服名字',
			 'amount_of_money' => '衣服总金额(元）',
             'amount_of_cloth' => '衣服总数(件）',
             'price' => '单价(元）',
			 'warehouse' => '所在仓库',
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
