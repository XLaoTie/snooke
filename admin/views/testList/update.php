
<div class="box">
    <div class="box-title c">
    <h1><i class="fa fa-table"></i>合同详情</h1><span class="back">
    <a class="btn" href="javascript:;" onclick="we.back();">
    <i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
     <?php  $form = $this->beginWidget('CActiveForm', get_form_list()); ?>
        <div class="box-detail-bd">
                <table>
                    <tr class="table-title">
                        <td colspan="6" >合同信息</td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'c_code'); ?></td>
                        <td colspan="2"><?php echo $model->c_code; ?></td>
                        <td><?php echo $form->labelEx($model, 'c_title'); ?></td>
                        <td colspan="2"><?php echo $model->c_title; ?></td>
                    </tr>
                   
                      <tr>
                         <td><?php echo $form->labelEx($model, 'start_time'); ?></td>
                         <td colspan="2">
                            <?php echo $form->textField($model, 'start_time', array('class' => 'input-text','style'=>'width:120px;','readonly'=>'readonly')); ?>
                            <?php echo $form->error($model, 'start_time', $htmlOptions = array()); ?>
                         </td>
                         <td><?php echo $form->labelEx($model, 'end_time'); ?></td>
                         <td colspan="2">
                             <?php echo $form->textField($model, 'end_time', array('class' => 'input-text','style'=>'width:120px;','readonly'=>'readonly')); ?>
                             <?php echo $form->error($model, 'end_time', $htmlOptions = array()); ?>
                         </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'update_date'); ?></td>
                        <td colspan="5"><?php echo $model->update_date; ?></td>
                    </tr>                                     
                </table>
<table class="list" id="product">
    <tr class="table-title">
        <th width="10%" style="text-align:center;">商品编号</th>
        <th width="20%" style="text-align:center;">商品名称</th>
        <th width="10%" style="text-align:center;">型号/规格</th>
        <th width="10%" style="text-align:center;">采购单价</th>
        <th width="10%" style="text-align:center;">采购数量</th>
     </tr>
<?php if(isset($product_list)) if (is_array($product_list)) foreach ($product_list as $v) { ?>
 <tr>
   <td><?php echo $v->product_code; ?></td>
   <td><?php echo $v->product_name; ?></td>
   <td><?php echo $v->json_attr; ?></td>
   <td><?php echo $v->purchase_price; ?></td>
   <td><?php echo $v->purchase_quantity; ?></td>  
                     </tr> 
<?php } ?>                     
</table>
       
            
<?php $this->endWidget(); ?>
  </div><!--box-detail end-->
</div><!--box end-->

