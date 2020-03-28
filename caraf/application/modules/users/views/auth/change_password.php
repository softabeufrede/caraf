<!-- Main content start -->

<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
          <div class="col-lg-12">
              <!--progress bar start-->
              <section class="panel">
                  <header class="panel-heading">
                      <i class="fa fa-unlock"></i> Change Password
                  </header>
                  <div class="panel-body">
                      <div class="row">
                           <div class="col-md-5">
                              <?php echo form_open("users/auth/change_password",array("id"=>"change_pass"));?>
                                 
                                 <div class="form-group">
                                    <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                                       
                                          <?php echo form_input($old_password);?>
                                 </div>   

                                 <div class="form-group">
                                    <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />

                                          <?php echo form_input($new_password);?>
                                 </div>        

                                 <div class="form-group">
                                    <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                                    
                                       <?php echo form_input($new_password_confirm);?>
                                 </div>     

                                 <?php echo form_input($user_id);?>
                                 <?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-toolbar"');?>

                              <?php echo form_close();?>
                           </div>
                           <div class="col-md-5">
                              <font color="red"><span ></span> <?php echo $message ?></font> 
                           </div>
                        </div>
                  </div>
              </section>


          </div>


      </div>
      <!-- page end-->
  </section>
</section>

<!-- Main Content Ends -->