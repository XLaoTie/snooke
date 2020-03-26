<?php

class GoodsMoment extends BaseModel {
	public $club_list_pic='';

    public function tableName() {
        return '{{goods_moment}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
        $s1='id,moment_headimg,moment_place,moment_lng,moment_lat,moment_picture1,moment_picture2,moment_picture3,moment_picture4,moment_picture5,moment_picture6,';
        $s1.='moment_like,moment_createtime,moment_content,moment_nickname';

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

