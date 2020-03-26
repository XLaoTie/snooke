<?php

class GoodsOrder extends BaseModel {
	public $club_list_pic='';

    public function tableName() {
        return '{{goods_order}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
        $s1='id,order_img,order_good_id,order_goods_num,order_identify,order_mobile,';
        $s1.='order_remark,order_goods,order_price,order_location,order_status,order_time,order_number,order_buyer';

        return array(
         //array('goods_name', 'required', 'message' => '{attribute} 不能为空'),
         array($s1,'safe',),
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

             'swiper_name' => '轮播图名称',
             'swiper_picture' => '轮播图',


 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }




    }

