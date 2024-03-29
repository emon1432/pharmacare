
    <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="card">
    <div class="card-header py-2">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h6 class="fs-17 font-weight-600 mb-0"><?php echo lan('journal_voucher')?></h6>
            </div>
            <div class="text-right">
              
              
            </div>
        </div>
    </div>
             <div class="card-body">

<?php echo  form_open_multipart('account/save_journal_voucher','id="journal_voucher_form"') ?>
                 <div class="form-group row">
                    <label for="vo_no" class="col-sm-2 col-form-label"><?php echo lan('voucher_no')?><i class="text-danger">*</i></label>
                    <div class="col-sm-4">
                         <input type="text" name="txtVNo" id="txtVNo" value="<?php if(!empty($voucher_no[0]['voucher'])){
                           $vn = substr($voucher_no[0]['voucher'],8)+1;
                          echo $voucher_n = 'Journal-'.$vn;
                         }else{
                           echo $voucher_n = 'Journal-1';
                         } ?>" class="form-control" readonly required>
                    </div>
                </div> 
                
                 <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label"><?php echo lan('date')?><i class="text-danger">*</i></label>
                    <div class="col-sm-4">
                         <input type="text" name="dtpDate" id="dtpDate" class="form-control datepicker" value="<?php echo  date('Y-m-d')?>" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="txtRemarks" class="col-sm-2 col-form-label"><?php echo lan('remark')?></label>
                    <div class="col-sm-4">
                      <textarea  name="txtRemarks" id="txtRemarks" class="form-control"></textarea>
                    </div>
                </div> 
                   <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="debtAccVoucher"> 
                            <thead>
                                <tr>
                            <th class="text-center"> <?php echo lan('account_name')?><i class="text-danger">*</i></th>
                            <th class="text-center"> <?php echo lan('code')?></th>
                            <th class="text-center"> <?php echo lan('debit')?></th>
                            <th class="text-center"> <?php echo lan('credit')?></th>
                            <th class="text-center"> <?php echo lan('action')?></th> 
                                </tr>
                            </thead>
                            <tbody id="debitvoucher">
                               
                                <tr>
                                   <td class="" width="300px">  
                               <select name="cmbCode[]" id="cmbCode_1" class="form-control select2" onchange="load_dbtvouchercode(this.value,1)" required="">
                                <option value="">Select One</option>
                                 <?php foreach ($acc as $acc1) {?>
                           <option value="<?php echo $acc1->HeadCode;?>"><?php echo $acc1->HeadName;?></option>
                                 <?php }?>
                               </select>

                                     </td>
                                    <td><input type="text" name="txtCode[]"  class="form-control "  id="txtCode_1" ></td>
                                    <td><input type="text" name="txtAmount[]" value="0" class="form-control total_price text-right valid_number"  id="txtAmount_1" onkeyup="calculationContravoucher(1)" >
                                       </td>
                                        <td ><input type="text" name="txtAmountcr[]" value="0" class="form-control total_price1 text-right valid_number"  id="txtAmount1_1" onkeyup="calculationContravoucher(1)" >
                                       </td>
                                   <td>
                                            <button class="btn btn-danger-soft red" type="button" value="<?php echo lan('delete')?>" onclick="deleteRowContravoucher(this)"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                </tr>                              
                          
                            </tbody>                               
                         <tfoot>
                                <tr>
                                  <td >
                                       
                                    </td>
                                    <td colspan="1" class="text-right"><label  for="reason" class="  col-form-label"><?php echo lan('total') ?></label>
                                       </td>
                                    <td class="text-right">
                                        <input type="text" id="grandTotal" class="form-control text-right " name="grand_total" value="" readonly="readonly" value="0"/>
                                    </td>
                                     <td class="text-right">
                                        <input type="text" id="grandTotal1" class="form-control text-right " name="grand_total1" value="" readonly="readonly" value="0"/>
                                    </td>
                                    <td><a id="add_more" class="btn btn-info-soft" name="add_more"  onClick="addaccountContravoucher('debitvoucher')"><i class="fa fa-plus"></i></a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="form-group row">
                       
                        <div class="col-sm-12 text-right">

                            <input type="submit" id="add_receive" class="btn btn-success btn-large" name="save" value="<?php echo lan('save') ?>" tabindex="9"/>
                           
                        </div>
                    </div>
              <?php echo form_close() ?>
                
                </div>
               <input type="hidden" id="headoption" value="<option value=''>Select One</option><?php foreach ($acc as $acc2) {?><option value='<?php echo $acc2->HeadCode;?>'><?php echo $acc2->HeadName;?></option><?php }?>" name="">
                </div>
                </div>
       

                </div>
