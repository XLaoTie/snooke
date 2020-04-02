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
      //查看购物车是否存在同件商品
      $criteria=new CDbCriteria;
      $criteria->condition='goods_id='.$json['goods_id'];
      $tmp=GoodsShopcar::model()->find($criteria);



      if(empty($tmp)){
          $model = new GoodsShopcar();
          $model->car_identify_new=$json['car_identify_new'];
          $model->good_price=$json['good_price'];
          $model->good_title=$json['good_title'];
          $model->good_img=$json['good_img'];
          $model->goods_id=$json['goods_id'];
          $model->user_identify=$json['user_identify'];
          $status=$model->save();
          $data['status']=$status;
      }
      else{
          $tmp->good_num = $tmp->good_num+1;
         $data['status']= $tmp->save();
      }
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
   //购物车一系列操作
   public function actionCartMinus($id){
        $model=GoodsShopcar::model();
        $criteria=new CDbCriteria;
        $criteria->condition='id='.$id;
        $tmp=$model->find($criteria);
        $tmp->good_num=$tmp->good_num-1;
        $s=$tmp->save();
        $rs= array('code'=>'0','msg'=>'正常','status'=>$s);
        echo CJSON::encode($rs);
   }
   public function actionCartPlus($id){
        $model=GoodsShopcar::model();
        $criteria=new CDbCriteria;
        $criteria->condition='id='.$id;
        $tmp=$model->find($criteria);
        $tmp->good_num=$tmp->good_num+1;
        $s=$tmp->save();
        $rs= array('code'=>'0','msg'=>'正常','status'=>$s);
        echo CJSON::encode($rs);
   }
   public function actionCartManual($id,$num){
        $model=GoodsShopcar::model();
        $criteria=new CDbCriteria;
        $criteria->condition='id='.$id;
        $tmp=$model->find($criteria);
        $tmp->good_num=$num;
        $s=$tmp->save();
        $rs= array('code'=>'0','msg'=>'正常','status'=>$s);
        echo CJSON::encode($rs);
   }
   public function actionCheckbox($id,$selected){
        $model=GoodsShopcar::model();
        $criteria=new CDbCriteria;
        $criteria->condition='id='.$id;
        $tmp=$model->find($criteria);
        $tmp->selected=$selected;
        $s=$tmp->save();
        $rs= array('code'=>'0','msg'=>'正常','status'=>$s);
        echo CJSON::encode($rs);
   }
   public function actionSelectAll($selected){
        $model=GoodsShopcar::model();
        $criteria=new CDbCriteria;
        $criteria->condition=1;
        $tmp=$model->findAll($criteria);

        foreach($tmp as $k=>$v){
        $v['selected']=$selected;
        $s=$v->save();
        }

        $rs= array('code'=>'0','msg'=>'正常','status'=>$s);
        echo CJSON::encode($rs);
   }
    public function actionDelete($id){
         $model=GoodsShopcar::model();
         $criteria=new CDbCriteria;
         $criteria->condition='id='.$id;
         $tmp=$model->deleteAll($criteria);

         $rs= array('code'=>'0','msg'=>'正常','status'=>$tmp);
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
       public function actionCreateNewOrders(){
          $post=file_get_contents("php://input");
          $json=json_decode($post,true);

         $tmp=$json['order_goodsinfo'];
         $order_number=time().rand(100, 999);
         $order_time=date('Y-m-d H:i:s');
         $cartDeleteId=array();
         foreach($tmp as $k=>$v){
           $model = new GoodsOrder;
           $model->isNewRecord = true;
           $model->order_buyer=$json['order_buyer'];
           $model->order_location=$json['order_location'];
           $model->order_remark=$json['order_remark'];
           $model->order_mobile=$json['order_mobile'];
           $model->order_identify=$json['order_identify'];
           $model->order_number= $order_number;
           $model->order_time=$order_time;
           $model->order_status=1;

           $model->order_price=$v['price'];
           $model->order_goods=$v['title'];
           $model->order_good_id=$v['goods_id'];
           $model->order_img=$v['img'];
           $model->order_goods_num=$v['quantity'];

           //保存要删除的购物车id
            $cartDeleteId[]=$v['id'];

           $status=$model->save();
           if(!$status) $data['status']=$status;
         }
         //删除购物车数据操作
        $cart=GoodsShopcar::model();
         $criteria = new CDbCriteria;
        $i=1;
        $s='';
        foreach($cartDeleteId as $id){

           if($i==1){
                $s='id='.$id;
                $i=$i+1;
           }
           else{
                $s.=' OR id='.$id;
           }

        }
        $criteria->condition=$s;
        $cart->deleteAll($criteria);

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
    //获取分类列表
    public function actionGetCategoryList(){
       $model=GoodsInfo::model();
    	$criteria = new CDbCriteria;
        $criteria->condition=1;
        $tmp=$model->findAll($criteria);
         $r1=array();$r0=array();$r2=array();
        foreach($tmp as $k => $v){
            $type=$v['type'];
            if(!isset($r0[$type])) {
                $r0[$type]=$type;
                $r2[]=$type;

                $r1[$type]=array();
             }
          //   put_msg($v);
            $r1[$type][]=
               array(
                'id'=>$v['id'],
               'name'=>$v['goods_name'],
                'img'=>$v['goods_titlepage'],
                'price'=>$v['goods_price'],

              );
            };
         $rs= array('code'=>'0','msg'=>'正常','data'=>array('goods'=>$r1,'type'=>$r2));
         echo CJSON::encode($rs);
    }

}
