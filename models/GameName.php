<?php

class GameName extends BaseModel {
	public $club_list_pic='';
    public function tableName() {
        return '{{t_gamename}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
        $s1='F_ID,F_GAMEID,F_GAMECODE,F_GAMENAME,F_Description,F_GAMEMODE,F_WINNUM,F_ADDRESS,F_GAMEDEPARTMENT,';
        $s1.='f_groups,f_groupnum,F_GAMEDATE';
        return array(
         array('F_GAMENAME', 'required', 'message' => '{attribute} 不能为空'),
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
	
/*	$rs=array('code'=>'0','msg'=>'正常','data'=>array(
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'开始'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛','status'=>'结束'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛A','status'=>'结束'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛B','status'=>'结束'),
    array('id'=>1,'match_time'=>'09-12','match_name'=>'广州巡逻赛C','status'=>'结束'),
 
  ),
*/
    public function getGameName() {
    	$criteria = new CDbCriteria;
        $criteria->order = 'F_GAMEDATE desc';
        $criteria->limit = 20;   
        $tmp=$this->findAll($criteria);
        $rs1=toIoArray($tmp,'F_ID:id,F_GAMEID,F_GAMECODE:status,F_GAMENAME:match_name,F_GAMEDATE:match_time,F_GAMEMODE,F_ADDRESS,F_GAMEDEPARTMENT');
        return array('code'=>'0','msg'=>'正常','data'=>$rs1);
    }
}
