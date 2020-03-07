<?php

class Playervs extends BaseModel {
    public function tableName() {
        return '{{t_playervs}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
 $w1='f_VSid,F_GGAMEID,F_GROUP,F_GMAINXH,F_GAMENAME,f_roundcode,F_GAME,F_XH,F_GAMEUP,F_GAMEUPOLD,';
 $w1.='F_GROUPNAME,F_ORDER,f_gamecode,f_date,f_time,F_TABLENO,';
 $w1.='f_playcodeA,F_PLAYNAMEA1,f_pLaynameA2,f_termA,F_FRAMEA,F_SCOREA, F_BREAKA,F_CHOSE,f_playcodeB,f_pLaynameB1,';
 $w1.='f_pLaynameB2,f_termB,f_playnoB,F_FRAMEB,F_SCOREB,F_BREAKB,F_WINS,F_XHA,F_XHB,';
 $w1.='f_win1,f_win2,f_LOST1,f_LOST2,F_GAMEING,f_treecode,F_WINNUM,F_GTYPE,F_POINTS,';
 $w1.='F_innings,F_CLEARANCE,F_GTIME,F_CHECK,F_CHECK2, F_WINTYPE';
        return array(

         	array($w1,'safe',), 
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
        	'F_ID' => 'ID',
            'F_GAMEID' => '比赛ID',
            'F_GAMECODE' => '编码',
			 'F_GAMENAME' => '名称',
			 'F_GAMEMODE' => '赛制',
		     'F_GAMEDATE' => '状态',		
			 'F_WINNUM' => '状态',
			 'F_ADDRESS' => '状态名称',
			 'F_GAMEDEPARTMENT' => '删除',
			 'f_groups' => '组数',
			 'f_groupnum' => '每组人数',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
/*

 type: '64进32',
match_detail: [{
            desktop: 1,
            f_flag: '国旗',
            first_player: "丁俊晖",
            f_first_score: 0,
            f_second_score: 0,
            f_third_score: 1,
            all_score: 7,
            s_first_score: 0,
            s_second_score: 0,
            s_third_score: 1,
            second_player: "梁文博",
            s_flag: '国旗2',
            state: "比赛结束"
          }
        ]
 */

    public function getPlayers($id) {
    	$criteria = new CDbCriteria;
        $criteria->order = 'F_GAME desc,F_XH ';
        $criteria->limit = 25;   
     //   'id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'开始')
        $criteria->condition="F_GGAMEID='".$id."' and F_TABLENO<>' ' AND F_GAME>0";
        $tmp=$this->findAll($criteria);
 $r1=array();$r0=array();
    foreach($tmp as $k => $v){
        $type=$v['F_GAME'];
        if(!isset($r0[$type])) {
            $r0[$type]=$type; 
            $r1[$type]['type']="1/".$type.'比赛';
            $r1[$type]['match_detail']=array();
         } 
      //   put_msg($v);
        $r1[$type]['match_detail'][]=
           array(
            'vs_id'=>$v['f_VSid'],
            'desktop'=>$v['F_TABLENO'],
            'f_flag'=>$v['f_termA'],
            'first_player'=>$v['F_PLAYNAMEA1'],
            'f_photo'=>$v['F_PhotoA'],
            'f_first_score'=>$v['F_FRAMEA'],
            'f_second_score'=>$v['F_SCOREA'],
            'f_third_score'=>$v['F_BREAKA'],
             'all_score'=>$v['F_WINNUM'],
            's_flag'=>$v['f_termB'],
            'second_player'=>$v['f_pLaynameB1'],
            's_photo'=>$v['F_PhotoB'],
            's_first_score'=>$v['F_FRAMEB'],
            's_second_score'=>$v['F_SCOREB'],
            's_third_score'=>$v['F_BREAKB'],  
            'state'=>($v['F_GAMEUP']==0) ? "结束" : "进行中..",

          );
        };
        return array('code'=>'0','msg'=>'正常','data'=>$r1);
    }
      public function getPlayer() {
        	$criteria = new CDbCriteria;
         //   'id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'开始')
            $criteria->condition="F_TABLENO<>' ' AND F_GAME>0 AND F_GAMEUP<>0" ;
            $tmp=$this->find($criteria);
            $r1=array();
            $v=$tmp;
                $type=$v['F_GAME'];


                $r1['game_name']=$v['F_GAMENAME'];
                $r1['desktop']=$v['F_TABLENO'];
                $r1['f_flag']=$v['f_termA'];
                $r1['first_player']=$v['F_PLAYNAMEA1'];
                $r1['f_photo']=$v['F_PhotoA'];
                $r1['f_first_score']=$v['F_FRAMEA'];
                $r1['f_second_score']=$v['F_SCOREA'];
                $r1['f_third_score']=$v['F_BREAKA'];
                 $r1['all_score']=$v['F_WINNUM'];
                $r1['s_flag']=$v['f_termB'];
                $r1['second_player']=$v['f_pLaynameB1'];
                $r1['s_photo']=$v['F_PhotoB'];
                $r1['s_first_score']=$v['F_FRAMEB'];
                $r1['s_second_score']=$v['F_SCOREB'];
                $r1['s_third_score']=$v['F_BREAKB'];
            return array('code'=>'0','msg'=>'正常','data'=>$r1);
        }
      public function getPlayerByid($vs_id) {
        	$criteria = new CDbCriteria;
         //   'id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'开始')
            $criteria->condition="F_TABLENO<>' ' AND F_GAME>0 AND f_VSid=".$vs_id ;
            $tmp=$this->find($criteria);
            $r1=array();
            $v=$tmp;
                $type=$v['F_GAME'];
                $r1['game_name']=$v['F_GAMENAME'];
                $r1['desktop']=$v['F_TABLENO'];
                $r1['f_flag']=$v['f_termA'];
                $r1['first_player']=$v['F_PLAYNAMEA1'];
                 $r1['f_photo']=$v['F_PhotoA'];
                $r1['f_first_score']=$v['F_FRAMEA'];
                $r1['f_second_score']=$v['F_SCOREA'];
                $r1['f_third_score']=$v['F_BREAKA'];
                 $r1['all_score']=$v['F_WINNUM'];
                $r1['s_flag']=$v['f_termB'];
                $r1['second_player']=$v['f_pLaynameB1'];
                $r1['s_photo']=$v['F_PhotoB'];
                $r1['s_first_score']=$v['F_FRAMEB'];
                $r1['s_second_score']=$v['F_SCOREB'];
                $r1['s_third_score']=$v['F_BREAKB'];
            return array('code'=>'0','msg'=>'正常','data'=>$r1);
        }
}


