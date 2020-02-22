
<div class="box">
    <div class="box-title c">
      <h1><i class="fa fa-table"></i>入库服装明细</h1></div><!--box-title end-->
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <a style="display:none;" id="j-delete" class="btn" href="javascript:;" onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i class="fa fa-trash-o"></i>删除</a>
        </div><!--box-header end-->
        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                <input type="hidden" name="pricing" value="<?php echo Yii::app()->request->getParam('pricing');?>">
                <label style="margin-right:10px;">
                        <span>有效时间：</span>
                    <input style="width:120px;" class="input-text" type="text" id="star_time" name="star_time" value="<?php echo Yii::app()->request->getParam('star_time');?>">
                    <span>-</span>
                    <input style="width:120px;" class="input-text" type="text" id="end_time" name="end_time" value="<?php echo Yii::app()->request->getParam('end_time');?>">
                </label>
      
                <label style="margin-right:10px;">
                        <span>关键字：</span>
                        <input style="width:200px;" class="input-text"  placeholder="请输入编码/合同编号/合同标题" type="text" name="keywords" value="<?php echo Yii::app()->request->getParam('keywords');?>">
                </label>
                <button class="btn btn-blue" type="submit">查询</button>
            </form>



        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                    <tr class="table-title">
                        <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('date');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('cloth_name');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('cloth_type');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('cloth_color');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz1');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz2');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz3');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz4');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz5');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz6');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz7');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz8');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('num_of_siz9');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('amount_of_cloth');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('price');?></th>
                        <th style="text-align:center"><?php echo $model->getAttributeLabel('amount_of_money');?></th>
                        <th style="text-align:center">操作</th>
                    </tr>
                    <?php 
                     if(is_array($arclist)) foreach($arclist as $v){ ?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo $v->date; ?></td>
                        <td><?php echo $v->cloth_name; ?></td>
                        <td><?php echo $v->cloth_type; ?></td>
                        <td><?php echo $v->cloth_color; ?></td>
                        <td><?php echo $v->num_of_siz1; ?></td>
                        <td><?php echo $v->num_of_siz2; ?></td>
                        <td><?php echo $v->num_of_siz3; ?></td>
                        <td><?php echo $v->num_of_siz4; ?></td>
                        <td><?php echo $v->num_of_siz5; ?></td>
                        <td><?php echo $v->num_of_siz6; ?></td>
                        <td><?php echo $v->num_of_siz7; ?></td>
                        <td><?php echo $v->num_of_siz8; ?></td>
                        <td><?php echo $v->num_of_siz9; ?></td>

                        <td><?php echo $v->amount_of_cloth; ?></td>
                        <td><?php echo $v->price; ?></td>
                        <td><?php echo $v->amount_of_money; ?></td>

                        <td>
                            <a class="btn" href="<?php echo $this->createUrl('update', array('id'=>$v->id));?>" title="编辑"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id;?>', deleteUrl);" title="删除"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                   <?php } ?>
                </table>
                 
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
<script>
    var deleteUrl = '<?php echo $this->createUrl('delete', array('id'=>'ID'));?>';
    $(function(){
        var $star_time=$('#star_time');
        var $end_time=$('#end_time');
        $star_time.on('click', function(){
            WdatePicker({startDate:'%y-%M-%D 00:00:00',dateFmt:'yyyy-MM-dd HH:mm:ss'});
        });
        $end_time.on('click', function(){
            WdatePicker({startDate:'%y-%M-%D 00:00:00',dateFmt:'yyyy-MM-dd HH:mm:ss'});
        });
    });

    function refresh(id){
        we.loading('show');
        $.ajax({
            type:'post',
            url:'<?php echo $this->createUrl('refresh'); ?>&id='+id,
            dataType:'json',
            success: function(data){
                we.loading('hide');
                if(data.status==1){
                    we.success(data.msg, data.redirect);
                }else{
                    we.msg('minus', data.msg);
                }
            }
        });
        return false;
    }
</script>
