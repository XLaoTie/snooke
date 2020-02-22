    <div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>订单信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">基本信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
                <table>
                	<tr class="table-title">
                    	<td colspan="6">订单信息</td>
                    </tr>
                	<tr>
                    	<td ><?php echo $form->labelEx($model, 'order_code'); ?></td>
                       <td colspan="2">
                            <?php echo $form->textField($model, 'order_code', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'order_code', $htmlOptions = array()); ?>
                        </td>
              
                         <td><?php echo $form->labelEx($model, 'entry_code'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'entry_code', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'entry_code', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                    <tr>
                         <td><?php echo $form->labelEx($model, 'entry_date'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'entry_date', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'entry_date', $htmlOptions = array()); ?>
                        </td>
                   
                         <td><?php echo $form->labelEx($model, 'client_name'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'client_name', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'client_name', $htmlOptions = array()); ?>
                        </td>
                    </tr>
            
                     <tr>
                        <td><?php echo $form->labelEx($model, 'amount_of_money'); ?></td>
                        <td colspan="2"><!--区域选择弹窗未显示-->
                            <?php echo $form->textField($model, 'amount_of_money', array('class' => 'input-text')); ?>
                          
                            <?php echo $form->error($model, 'amount_of_money', $htmlOptions = array()); ?>
                        </td>
                
                         <td><?php echo $form->labelEx($model, 'warehouse'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'warehouse', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'warehouse', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>
                <div class="mt15">
                <table style='margin-top:5px;'>
                	<tr class="table-title">
                    	<td colspan="6">服装信息</td>
                   </tr>
                    <tr>
                    	<td><?php echo $form->labelEx($model, 'cloth_code'); ?></td>
                    	<td colspan="2">
                            <?php echo $form->textField($model, 'cloth_code', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'cloth_code', $htmlOptions = array()); ?>
                        </td>
                    
          
                        <td><?php echo $form->labelEx($model, 'cloth_name'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'cloth_name', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'cloth_name', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                   
                     
                     <tr>
                        <td><?php echo $form->labelEx($model, 'price'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'price', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'price', $htmlOptions = array()); ?>
                        </td>
                  
                    	<td><?php echo $form->labelEx($model, 'amount_of_cloth'); ?></td>
                    	<td colspan="2">
                            <?php echo $form->textField($model, 'amount_of_cloth', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'amount_of_cloth', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>
                </div>
              
            </div><!--box-detail-tab-item end   style="display:block;"-->
            
        </div><!--box-detail-bd end-->
        
        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>
       
    <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
