<?php

class WxShopController extends BaseController {

    protected $model = '';

	public function init() {
        $this->model = substr(__CLASS__, 0, -10);
		    parent::init();
    }
 //获取商品列表
    public function actionQueryList($page='',$perpage=''){
        $model=GoodsInfo::model();
        $r1 = array('total' => 0, 'items' => array());
        $criteria = new CDbCriteria;
        $criteria->order = 'id desc';
        $criteria->offset=($page -1) * $perpage;
        $criteria->limit = $perpage;
        $tmp=GoodsInfo::model()->getInfo($criteria);

        $r1['items']=$tmp;
        $r1['total']=$model->count();
        $rs= array('code'=>'0','msg'=>'正常','data'=>$r1);
        echo json_encode($rs);
    }
  //获取轮播图图片
    public function actionGetTopSwiper(){
        $model=GoodsSwiper::model();
        $r1 = array();
        $criteria = new CDbCriteria;
        $criteria->order = 'id desc';
        $tmp=$model->findAll($criteria);
        $r1['items']=$tmp;
        $rs= array('code'=>'0','msg'=>'正常','data'=>$r1);
        echo CJSON::encode($rs);
    }
  //获取商品详情
    public function actionGetGoodsDetail($id){
        $model=GoodsInfo::model();
        $r1 = array('detail' => null);
        $criteria = new CDbCriteria;

        $criteria->condition='id='.$id;
        $tmp=GoodsInfo::model()->find($criteria);

        $r1['detail']=$tmp;

        $rs= array('code'=>'0','msg'=>'正常','data'=>$r1);
        echo CJSON::encode($rs);
    }
   //购物车接口
   public function actionAddToShopcar(){
      $post=file_get_contents("php://input");
      $json=json_decode($post,true);
       put_msg($json);
      $model = new GoodsShopcar();
      $model->car_identify_new=$json['car_identify_new'];
      $model->good_price=$json['good_price'];
      $model->good_title=$json['good_title'];
      $model->good_img=$json['good_img'];
      $model->goods_id=$json['goods_id'];
      $model->user_identify=$json['user_identify'];
      $status=$model->save();
      $data['status']=$status;
      echo CJSON::encode($data);

   }
   public function actionQueryMyShopCar($user_identify){
         $model=GoodsShopcar::model();
         $r1 = array('items'=>null);
       $criteria = new CDbCriteria;
        $criteria->condition='user_identify='.$user_identify;
        $tmp=$model->findAll($criteria);

        $r1['items']=$tmp;

        $rs= array('code'=>'0','msg'=>'正常','data'=>$r1);
        echo CJSON::encode($rs);
   }
  //创建新订单
       public function actionCreateNewOrder(){
          $post=file_get_contents("php://input");
          $json=json_decode($post,true);
           put_msg($json);
          $model = new GoodsOrder();
          $model->order_buyer=$json['order_buyer'];
          $model->order_location=$json['order_location'];
          $model->order_price=$json['order_price'];
          $model->order_goods=$json['order_goods'];
          $model->order_good_id=$json['order_good_id'];
          $model->order_img=$json['order_img'];
          $model->order_remark=$json['order_remark'];
          $model->order_mobile=$json['order_mobile'];
          $model->order_identify=$json['order_identify'];
          $model->order_goods_num=$json['order_goods_num'];
          $model->order_number= time().rand(100, 999);
          $model->order_time=date('Y-m-d H:i:s');
          $model->order_status=1;
          $status=$model->save();
          $data['status']=$status;
          echo CJSON::encode($data);
       }
      public function actionQueryMyOrderList($order_identify="",$order_status=-1,$order_id=0){
         $model=GoodsOrder::model();
         $r1 = array('orders'=>null);
         $criteria = new CDbCriteria;

         $status=$order_status >= 0 ? "order_status = {$order_status}" : 'order_status >= 0';
         if($order_id!=0)
          $criteria->condition='id='.$order_id;
         else
          $criteria->condition='order_identify='.$order_identify.' AND '.$status;
         $tmp=$model->findAll($criteria);
         $r1['orders']=$tmp;
         $rs= array('code'=>'0','msg'=>'正常','data'=>$r1);
         echo CJSON::encode($rs);
      }
//用户看法评论
    public function actionQueryMomentList($page='',$perpage=''){
        $model=GoodsMoment::model();
        $r1 = array('items' => array());
        $criteria = new CDbCriteria;
        $criteria->order = 'id desc';
        $criteria->offset=($page -1) * $perpage;
        $criteria->limit = $perpage;
        $tmp=$model->findAll($criteria);

        $r1['items']=$tmp;

        $rs= array('code'=>'0','msg'=>'正常','data'=>$r1);
        echo CJSON::encode($rs);
    }
    public function actionPostMoment(){




    }

}
