<?php

class ClothList extends BaseModel {
	public $cloth_list_pic='';
    public function tableName() {
        return '{{cloth_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
			array('amount_of_money', 'required', 'message' => '{attribute} 不能为空'),
            array('cloth_type', 'required', 'message' => '{attribute} 不能为空'),
			array('cloth_code', 'required', 'message' => '{attribute} 不能为空'),
			array('cloth_name', 'required', 'message' => '{attribute} 不能为空'),
            array('amount_of_cloth', 'required', 'message' => '{attribute} 不能为空'),
            array('price', 'required', 'message' => '{attribute} 不能为空'),
            array('place_of_origin', 'required', 'message' => '{attribute} 不能为空'),
			array('cloth_color,num_of_siz1,num_of_siz2,num_of_siz3,num_of_siz4,num_of_siz5,num_of_siz6,num_of_siz7,num_of_siz8,num_of_siz9','safe',), 
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
           
			 'cloth_type' => '衣服类型',
			 'cloth_color' => '衣服颜色',
			 'cloth_code' => '衣服编号',
			 'cloth_name' => '衣服名称',
			 'num_of_siz1' => '140码(件)',
			 'num_of_siz2' => '150码(件)',
			 'num_of_siz3' => '160码(件)',
			 'num_of_siz4' => 'S码(件)',
			 'num_of_siz5' => 'M码(件)',
			 'num_of_siz6' => 'L码(件)',
			 'num_of_siz7' => 'O码(件)',
			 'num_of_siz8' => 'XO码(件)',
			 'num_of_siz9' => '其他码(件)',
    
			 'amount_of_money' => '衣服总金额(元）',
             'amount_of_cloth' => '衣服总数(件）',
             'price' => '单价(元）',
             'place_of_origin' => '产地',
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
