<div class="container-fluid">				
    <div class="row-fluid">
        <div class="span12">				
            <div class="box box-color box-bordered">

                <div class="box-title">
                    <h3>
                        Add Order
                    </h3>
                </div>


                <div class="box-content">
                    <form action="<?php echo Yii::app()->createUrl('admin/order/add') ?>" method="POST" class='form-horizontal form-validate' id="bb">
                        <div class="control-group">
                            <label for="service" class="control-label">Service</label>
                            <div class="controls">
                                <select name="service" id="select" class='xinput-large'>
                                    <option value="1">VIP</option>                                                
                                </select>
                            </div>                                        
                        </div>
                        <div class="control-group">
                            <label for="airport" class="control-label">Airport</label>
                            <div class="controls">
                                <select name="airport" id="select" class='xinput-large'>
                                    <option value="NB"  >Nội Bài</option>
                                    <option value="DN" >Đà Nẵng</option>
                                    <option value="TSN">Tân Sơn Nhât</option>                                            
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="textfield" class="control-label">Arrival/Departure:</label>
                            <div class="controls">
                                <label class='radio'>
                                    <input type="radio" name="type" value="arrival">Arrival
                                </label>
                                <label class='radio'>
                                    <input type="radio" name="type" value="departure">Departure
                                </label>                                            
                            </div>                                    
                        </div>
                        <div class="control-group">                                                    
                            <label for="date" class="control-label">Date</label>
                            <div class="controls">
                                <input type="text" name="date" id="date" class="input-medium datepick" data-rule-required="true" value="">
                                <span class="help-block">As dropdown</span>
                            </div>
                        </div>
                        <div class="control-group">                                                    
                            <label for="flight_time" class="control-label">Time</label>
                            <div class="controls">
                                <div class="bootstrap-timepicker">
                                    <input type="text" name="flight_time" id="time" class="input-small timepick" data-rule-required="true" value="">
                                    <span class="help-block">As dropdown</span>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="flight_number" class="control-label">Flight number</label>
                            <div class="controls">                                                        
                                <input type="text" name="flight_number" id="flightnumber" class="input-large" value="" data-rule-required="true" data-rule-minlength="2">                                                                                                     
                            </div>
                        </div> 
                        <div class="control-group">
                            <label for="size" class="control-label">Group size</label>
                            <div class="controls">
                                <input type="text" name="size" id="groupsize" class="input-large" value="" data-rule-required="true">                                                                                     
                            </div>
                        </div>
                        <div class="box-title">
                            <h3>Contact details</h3>
                        </div>
                        <br/>

                        <div class="control-group">
                            <label for="name" class="control-label">Leader</label>
                            <div class="controls">
                                <input type="text" name="name" id="leader" class="input-large" value="" data-rule-required="true" data-rule-minlength="4">                                                                                     
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="add1" class="control-label">Address</label>
                            <div class="controls">
                                <input type="text" name="add1" id="address" class="input-xlarge" value="" data-rule-required="true" data-rule-minlength="10">                                                                                     
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="postcode" class="control-label">Postcode</label>
                            <div class="controls">
                                <input type="text" name="postcode" id="postcode" class="input-large" value="" data-rule-required="true" data-rule-number="true" data-rule-minlength="2">                                                                                     
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="email" class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" name="email" id="email" class="input-large" value="" data-rule-required="true" data-rule-email="true">                                                                                     
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="contact_num" class="control-label">Primary Phone number</label>
                            <div class="controls">
                                <input type="text" name="contact_num" id="primaryphonenumber" class="input-large" value="" data-rule-required="true" data-rule-minlength="7">                                                                                     
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="contact_num_2" class="control-label">Alternative Phone number</label>
                            <div class="controls">
                                <input type="text" name="contact_num_2" id="alternativephonenumber" class="input-large" value="" data-rule-minlength="7">                                                                                     
                            </div>
                        </div>    

                        <div class="control-group">                                                
                            <div class="controls">
                                <button type="submit" class="btn btn-large btn-primary">Save</button>                                                
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>						
    </div>
</div>	