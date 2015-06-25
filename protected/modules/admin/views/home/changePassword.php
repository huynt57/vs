<div class="container-fluid">				
    <div class="row-fluid">
        <div class="span12">				
            <div class="box box-color box-bordered">

                <div class="box-title">
                    <h3>
                        Change the password
                    </h3>
                </div>
                <div class="box-content">					            
                    <form action="<?php echo Yii::app()->createUrl('admin/home/changePassWord') ?>" method="POST" class='form-horizontal form-validate' id="test">
                        <div class="control-group">							                                   			
                            <input type="password" name="old_password" id="password" placeholder="Password" data-rule-required="true" data-rule-minlength="8">											
                        </div>
                        <div class="control-group">							                                   			
                            <input type="password" name="password" id="password" placeholder="Password" data-rule-required="true" data-rule-minlength="8">											
                        </div>
                        <div class="control-group">																						
                            <input type="password" name="password2" id="password2" placeholder="Retype the password" data-rule-required="true" data-rule-minlength="8" data-rule-equalto="#password">											
                        </div>						
                        <div class="control-group">				
                            <div class="submit">
                                <input type="submit" value="Change the password" class='btn btn-primary'>
                            </div>
                        </div>
                    </form>                                 
                </div>
            </div>
        </div>						
    </div>
</div>	
