<?php

class GoodsInfo extends BaseModel {
	public $club_list_pic='';

    public function tableName() {
        return '{{goods_info}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
        $s1='id,goods_name,goods_desc,goods_price,goods_titlepage,';
        $s1.='goods_picture,goods_tag,goods_specification,';
        $s1.='goods_presentation_img';
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

             'goods_name' => '商品名',
             'goods_desc' => '商品描述',
			 'goods_price' => '商品价格',
			 'goods_titlepage' => '商品封面',
		     'goods_picture' => '商品轮播照片',

			 'goods_tag' => '商品标签',
			 'goods_specification' => '商品规格',
			 'goods_presentation_img' => '商品描述图片',


 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

/*	$rs=array('code'=>'0','msg'=>'正常','data'=>array(
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'开始'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'结束'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛A','status'=>'结束'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛B','status'=>'结束'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛C','status'=>'结束'),

  ),
*/
    public function getInfo($criteria) {
    $s1='id,goods_name,goods_desc,goods_price,goods_titlepage,';
            $s1.='goods_picture,goods_tag,goods_specification,';
            $s1.='goods_presentation_img';
        $tmp=$this->findAll($criteria);
        $rs1=toIoArray($tmp,$s1);
        return $rs1;
    	//echo json_encode($rs1);

    }

    }

