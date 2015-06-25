<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta name="language" content="en">

        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css">
        <!-- Bootstrap responsive -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap-responsive.min.css">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
        <!-- PageGuide -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/pageguide/pageguide.css">
        <!-- Fullcalendar -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/fullcalendar/fullcalendar.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
        <!-- Tagsinput -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/tagsinput/jquery.tagsinput.css">
        <!-- chosen -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/chosen/chosen.css">
        <!-- multi select -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/multiselect/multi-select.css">
        <!-- timepicker -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- colorpicker -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/colorpicker/colorpicker.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/datepicker/datepicker.css">
        <!-- Daterangepicker -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/daterangepicker/daterangepicker.css">
        <!-- Plupload -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/plupload/jquery.plupload.queue.css">
        <!-- select2 -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/select2/select2.css">
        <!-- icheck -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/plugins/icheck/all.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css">
        <!-- Color CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/themes.css">


        <!-- jQuery -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.min.js"></script>

        <!-- Nice Scroll -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- imagesLoaded -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/jquery-ui/jquery.ui.slider.js"></script>
        <!-- slimScroll -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.min.js"></script>
        <!-- Bootbox -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/bootbox/jquery.bootbox.js"></script>
        <!-- Bootbox -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/form/jquery.form.min.js"></script>
        <!-- Validation -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/validation/jquery.validate.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/validation/additional-methods.min.js"></script>
        <!-- Masked inputs -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
        <!-- TagsInput -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- Datepicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Daterangepicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/daterangepicker/moment.min.js"></script>
        <!-- Timepicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- Colorpicker -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
        <!-- Chosen -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/chosen/chosen.jquery.min.js"></script>
        <!-- MultiSelect -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/multiselect/jquery.multi-select.js"></script>
        <!-- CKEditor -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/ckeditor/ckeditor.js"></script>
        <!-- PLUpload -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/plupload/plupload.full.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/plupload/jquery.plupload.queue.js"></script>
        <!-- Custom file upload -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/mockjax/jquery.mockjax.js"></script>
        <!-- select2 -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/select2/select2.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/icheck/jquery.icheck.min.js"></script>
        <!-- complexify -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/complexify/jquery.complexify-banlist.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/complexify/jquery.complexify.min.js"></script>
        <!-- Mockjax -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/mockjax/jquery.mockjax.js"></script>
        <!-- Theme framework -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/eakroko.min.js"></script>    
        <!-- Just for demonstration -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/demonstration.min.js"></script>  

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body> 

    <body>

        <!-- BEGIN -->


        <div class="container">



            <!-- The justified navigation menu is meant for single line per list item.
                 Multiple lines will require custom code not provided by Bootstrap. -->
            <div class="masthead">
                <h1 class="text-muted">Vip Service</h1>
            </div>

            <div id="navigation">
                <div class="container-fluid">
                    <!--<a href="#" id="brand">FLAT</a>
                    <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
                    -->
                    <ul class='main-nav'>
                        <li class='active'>
                            <a href="<?php echo Yii::app()->createAbsoluteUrl("bookService") ?>">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createAbsoluteUrl("price") ?>">
                                <span>Pricing</span>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li>                        
                            <a href="<?php echo Yii::app()->createAbsoluteUrl("aboutus") ?>">
                                <span>About us</span>                            
                            </a>                       
                        </li>                    
                    </ul>
                </div>
            </div>

            <div class="container-fluid" id="content">            
                <div class="container-fluid">   
                    <div class="row-fluid">                        
                        <div class="box box-bordered box-color">
                            <div class="box-title">
                                <h3><i class="icon-th-list"></i>Quick book</h3>
                            </div>

                            <div class="box-content">
                                <form action="<?php echo Yii::app()->createUrl('bookService/prepareStep') ?>" method="post" class='form-vertical'>
                                    <div class="row-fluid">
                                        <div class="span2">
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Service:</label>
                                                <div class="controls">
                                                    <select name="service" id="select" class="input-block-level">
                                                        <option value="VIP">VIP</option>
                                                    </select>
                                                </div>                                        
                                            </div>
                                        </div>
                                        <div class="span3">
                                            <div class="control-group">
                                                <label for="textfield" class="control-label">Airport:</label>
                                                <div class="controls">
                                                    <select name="airport" id="select" class="input-block-level">
                                                        <option value="NB">Nội Bài</option>
                                                        <option value="DN">Đà Nẵng</option>
                                                        <option value="TSN">Tân Sơn Nhât</option>
                                                    </select>
                                                </div>                                        
                                            </div>
                                        </div>
                                        <div class="span3">
                                            <div class="control-group">                                                    
                                                <label for="date" class="control-label">Date</label>
                                                <div class="controls">
                                                    <input type="text" name="date" id="date" class="input-medium datepick" data-rule-required="true">
                                                    <span class="help-block">As dropdown</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span2">
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
                                        </div>
                                        <div class="span2" style="float: right;">
                                            <div class="control-group">            
                                                <label for="textfield" class="control-label">Just one click more</label>                                    
                                                <div class="controls controls-row">
                                                    <button class="btn btn-success btn-large" type="submit">Book</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>                                                       
                            </div>
                        </div>                
                    </div>
                </div>
            </div>


            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by VipService.<br/>
                All Rights Reserved.<br/>    	
            </div><!-- footer -->

        </div><!-- containder div -->

    </body>
</html>
