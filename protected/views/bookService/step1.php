<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="box">              
                <div class="box-title">
                    <h3>> STEP 1</h3>
                </div>  
                <div class="box-content">
                    <div class="row-fluid">                        
                        <div class="box">
                            <div class="box-content">
                                <form action="<?php echo Yii::app()->createUrl('bookService/step1') ?>" method="POST" class='form-horizontal form-validate' id="bb">

                                    <div class="control-group">
                                        <label for="service" class="control-label">Service</label>
                                        <div class="controls">
                                            <select name="service" id="select" class='xinput-large'>
                                                <option value="VIP">VIP</option>                                                
                                            </select>
                                        </div>                                        
                                    </div>
                                    <div class="control-group">
                                        <label for="airport" class="control-label">Airport</label>
                                        <div class="controls">
                                            <select name="airport" id="select" class='xinput-large'>
                                                <option value="NB" <?php if (Yii::app()->session['airport'] == "NB"): ?>selected="selected"<?php endif; ?> >Nội Bài</option>
                                                <option value="DN" <?php if (Yii::app()->session['airport'] == "DN"): ?>selected="selected"<?php endif; ?>>Đà Nẵng</option>
                                                <option value="TSN" <?php if (Yii::app()->session['airport'] == "TSN"): ?>selected="selected"<?php endif; ?>>Tân Sơn Nhât</option>                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label for="type" class="control-label">Arrival/Departure:</label>
                                        <div class="controls">
                                            <label class='radio'>
                                                <input type="radio" name="type" value="arrival" <?php if (Yii::app()->session['type'] == "arrival"): ?>checked="checked"<?php endif; ?>>Arrival
                                            </label>
                                            <label class='radio'>
                                                <input type="radio" name="type" value="departure" <?php if (Yii::app()->session['type'] == "departure"): ?>checked="checked"<?php endif; ?>>Departure
                                            </label>                                            
                                        </div>                                    
                                    </div>
                                    <div class="control-group">                                                    
                                        <label for="date" class="control-label">Date</label>
                                        <div class="controls">
                                            <input type="text" name="date" id="date" class="input-medium datepick" data-rule-required="true" value="<?php echo Yii::app()->session['date'] ?>">
                                            <span class="help-block">As dropdown</span>
                                        </div>
                                    </div>

                                    <div class="control-group">                                                    
                                        <label for="flight_time" class="control-label">Time</label>
                                        <div class="controls">
                                            <div class="bootstrap-timepicker">
                                                <input type="text" name="flight_time" id="flight_time" class="input-small timepick" data-rule-required="true" placeholder="">
                                                <span class="help-block">As dropdown</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label for="flight_number" class="control-label">Flight number</label>
                                        <div class="controls">                                                        
                                            <input type="text" name="flight_number" id="flight_number" class="input-large" placeholder="MB223" data-rule-required="true" data-rule-minlength="2">                                                                                                     
                                        </div>
                                    </div> 
                                    <div class="control-group">
                                        <label for="size" class="control-label">Group size</label>
                                        <div class="controls">
                                            <input type="text" name="size" id="size" class="input-large" placeholder="12" data-rule-required="true">                                                                                     
                                        </div>
                                    </div>

                                    <div class="box-title">
                                        <h3>Contact details</h3>
                                    </div>
                                    <br/>

                                    <div class="control-group">
                                        <label for="name" class="control-label">Leader</label>
                                        <div class="controls">
                                            <input type="text" name="name" id="name" class="input-large" placeholder="Adam Smith" data-rule-required="true" data-rule-minlength="4">                                                                                     
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label for="add1" class="control-label">Address</label>
                                        <div class="controls">
                                            <input type="text" name="add1" id="add1" class="input-large" placeholder="No.34, 3rd floor, CT4 Building, The Manor, Nam Tu Liem, Hanoi" data-rule-required="true" data-rule-minlength="10">                                                                                     
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label for="postcode" class="control-label">Postcode</label>
                                        <div class="controls">
                                            <input type="text" name="postcode" id="postcode" class="input-large" placeholder="100000" data-rule-required="true" data-rule-number="true" data-rule-minlength="2">                                                                                     
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label for="email" class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" class="input-large" placeholder="adamsmith@example.com" data-rule-required="true" data-rule-email="true">                                                                                     
                                        </div>
                                    </div>            

                                    <div class="control-group">
                                        <label for="contact_num" class="control-label">Primary Phone number</label>
                                        <div class="controls">
                                            <input type="text" name="contact_num" id="contact_num" class="input-large" placeholder="(+84)123456789" data-rule-required="true" data-rule-minlength="7">                                                                                     
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label for="contact_num_2" class="control-label">Alternative Phone number</label>
                                        <div class="controls">
                                            <input type="text" name="contact_num_2" id="contact_num_2" class="input-large" placeholder="(+84)987654321" data-rule-minlength="7">                                                                                     
                                        </div>
                                    </div>        


                                    <div class="control-group">                                                
                                        <div class="controls">
                                            <button type="submit" class="btn btn-large btn-primary">Next</button>                                                
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
