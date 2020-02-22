    <div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>服装信息修改</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>

        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
         
                <div class="mt15">
                <table>
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
                        <td><?php echo $form->labelEx($model, 'cloth_type'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'cloth_type', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'cloth_type', $htmlOptions = array()); ?>
                        </td>
               
                        <td><?php echo $form->labelEx($model, 'cloth_color'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'cloth_color', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'cloth_color', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                     </table>
                        <table>

                     <tr>
                        <td><?php echo $form->labelEx($model, 'num_of_siz1'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz1', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz1', $htmlOptions = array()); ?>
                        </td>
              
                        <td><?php echo $form->labelEx($model, 'num_of_siz2'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz2', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz2', $htmlOptions = array()); ?>
                        </td>
                
                        <td><?php echo $form->labelEx($model, 'num_of_siz3'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz3', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz3', $htmlOptions = array()); ?>
                        </td>
                    </tr>



                     <tr>
                        <td><?php echo $form->labelEx($model, 'num_of_siz4'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz4', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz4', $htmlOptions = array()); ?>
                        </td>
              
                        <td><?php echo $form->labelEx($model, 'num_of_siz5'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz5', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz5', $htmlOptions = array()); ?>
                        </td>
              
                        <td><?php echo $form->labelEx($model, 'num_of_siz6'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz6', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz6', $htmlOptions = array()); ?>
                        </td>
                    </tr>


                     <tr>
                        <td><?php echo $form->labelEx($model, 'num_of_siz7'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz7', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz7', $htmlOptions = array()); ?>
                        </td>
                 
                        <td><?php echo $form->labelEx($model, 'num_of_siz8'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz8', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz9', $htmlOptions = array()); ?>
                        </td>
            
                        <td><?php echo $form->labelEx($model, 'num_of_siz9'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'num_of_siz9', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'num_of_siz9', $htmlOptions = array()); ?>
                        </td>
                    </tr>


         
                     

                    <tr>
                    	<td><?php echo $form->labelEx($model, 'amount_of_cloth'); ?></td>
                    	<td colspan="3">
                            <?php echo $form->textField($model, 'amount_of_cloth', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'amount_of_cloth', $htmlOptions = array()); ?>
                        </td>
                 
                        <td><?php echo $form->labelEx($model, 'price'); ?></td>
                        <td colspan="3">
                            <?php echo $form->textField($model, 'price', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'price', $htmlOptions = array()); ?>
                        </td>
               
                        <td><?php echo $form->labelEx($model, 'amount_of_money'); ?></td>
                        <td colspan="3"><!--区域选择弹窗未显示-->
                            <?php echo $form->textField($model, 'amount_of_money', array('class' => 'input-text')); ?>
                          
                            <?php echo $form->error($model, 'amount_of_money', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    </table>
                    <table>

                            <tr>
                         <td><?php echo $form->labelEx($model, 'warehouse'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'warehouse', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'warehouse', $htmlOptions = array()); ?>
                        </td>
                
                        <td><?php echo $form->labelEx($model, 'place_of_origin'); ?></td>
                        <td colspan="2">
                            <?php echo $form->textField($model, 'place_of_origin', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'place_of_origin', $htmlOptions = array()); ?>
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
