<div class="box">
      <div class="box-content">
    	<div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加订单</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <a style="display:none;" id="j-delete" class="btn" href="javascript:;" onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i class="fa fa-trash-o"></i>删除</a>
        </div><!--box-header end-->
        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                <label style="margin-right:10px;">
                    <span>关键字：</span>
                    <input style="width:200px;" class="input-text"   placeholder="请输入衣服编码/衣服名称" type="text" name="keywords" value="<?php echo Yii::app()->request->getParam('keywords');?>">
                </label>
                <button class="btn btn-blue" type="submit">查询</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                <thead>
                    <tr>
                        <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                    
                        
                        <th><?php echo $model->getAttributeLabel('cloth_code');?></th>
                        <th><?php echo $model->getAttributeLabel('cloth_name');?></th>
                        <th><?php echo $model->getAttributeLabel('cloth_type');?></th>
                        <th><?php echo $model->getAttributeLabel('cloth_color');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz1');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz2');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz3');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz4');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz5');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz6');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz7');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz8');?></th>
                        <th><?php echo $model->getAttributeLabel('num_of_siz9');?></th>
          
                    
                          <th><?php echo $model->getAttributeLabel('price');?></th>
                         <th><?php echo $model->getAttributeLabel('amount_of_cloth');?></th>
                         <th><?php echo $model->getAttributeLabel('amount_of_money');?></th>
                         
                         <th><?php echo $model->getAttributeLabel('place_of_origin');?></th>
                         <th><?php echo $model->getAttributeLabel('warehouse');?></th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                  	<?php foreach($arclist as $v){ ?>
                    <tr> 	
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>           
                      <td><?php echo CHtml::link($v->cloth_code, array('update', 'id'=>$v->id)); ?></td>                                        
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
           
                        <td><?php echo $v->price; ?></td>                                           
                        <td><?php echo $v->amount_of_cloth; ?></td>
                        <td><?php echo $v->amount_of_money; ?></td>
                        <td><?php echo $v->place_of_origin; ?></td>
                        <td><?php echo $v->warehouse; ?></td>
                        <td>
                            <a class="btn" href="<?php echo $this->createUrl('update', array('id'=>$v->id));?>" title="编辑"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id;?>', deleteUrl);" title="删除"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
					<?php } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
<script>
var deleteUrl = '<?php echo $this->createUrl('delete', array('id'=>'ID')); ?>';
</script>
