<?php

class GoodsShopcar extends BaseModel {
	public $club_list_pic='';

    public function tableName() {
        return '{{goods_shopcar}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
        $s1='id,car_identify_new,good_price,good_title,good_img,goods_id,user_identify';

        return array(
         //array('goods_name', 'required', 'message' => '{attribute} 不能为空'),
         array($s1,'safe',),

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
             'car_identify_new' => '唯一标识头像加id',
             'good_price' => '总价',
             'good_title' => '物品标题',
             'good_img' => '商品图片',
             'goods_id' => '商品id',
             'user_identify' => '用户唯一标识',

 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }




    }

