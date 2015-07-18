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
        <style type="text/css">

            #share-buttons img {
                width: 35px;
                padding: 5px;
                border: 0;
                box-shadow: 0;
                display: inline;
            }

        </style>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function(d, s) {
                var z = $zopim = function(c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function(o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?39BNo6VKLCusLFbr7rm0cvN8Wg5HR3UM";
                z.t = +new Date;
                $.
                        type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
        <!--End of Zopim Live Chat Script-->
    </head>

    <body> 

    <body>

        <!-- BEGIN -->


        <div class="container">


            <!-- The justified navigation menu is meant for single line per list item.
                 Multiple lines will require custom code not provided by Bootstrap. -->
            <div class="masthead">
                <a href="<?php echo Yii::app()->createAbsoluteUrl('bookService') ?>"> <h1 class="text-muted"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" alt="" class='retina-ready' width="100" height="100"><font color="396396"><strong>  Vip Service</strong></font></h1><a/>               

                    <div id="google_translate_element"></div><script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
                <div id="share-buttons">

                    <!-- Buffer -->
                    <a href="https://bufferapp.com/add?url=http://vipservice.vn&amp;text=Vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
                    </a>

                    <!-- Digg -->
                    <a href="http://www.digg.com/submit?url=https://vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
                    </a>

                    <!-- Email -->
                    <a href="mailto:?Subject=Vipservice.vn&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://vipservice.vn">
                        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                    </a>

                    <!-- Facebook -->
                    <a href="http://www.facebook.com/sharer.php?u=https://vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                    </a>

                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=https://vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                    </a>

                    <!-- LinkedIn -->
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                    </a>

                    <!-- Pinterest -->
                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
                    </a>

                    <!-- Print -->
                    <a href="javascript:;" onclick="window.print()">
                        <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
                    </a>

                    <!-- Reddit -->
                    <a href="http://reddit.com/submit?url=http://vipservice.vn&amp;title=Vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                    </a>

                    <!-- StumbleUpon-->
                    <a href="http://www.stumbleupon.com/submit?url=http://vipservice.vn&amp;title=Vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
                    </a>

                    <!-- Tumblr-->
                    <a href="http://www.tumblr.com/share/link?url=http://vipservice.vn&amp;title=Vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=http://vipservice.vn&amp;name=Vipservice.vn&amp;hashtags=simplesharebuttons" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                    </a>

                    <!-- VK -->
                    <a href="http://vkontakte.ru/share.php?url=https://vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
                    </a>

                    <!-- Yummly -->
                    <a href="http://www.yummly.com/urb/verify?url=http://vipservice.vn&amp;title=Vipservice.vn" target="_blank">
                        <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
                    </a>
                </div>
                <br/>

                <span class="font-grey-4">|</span> 
                <a href="#">Terms and Conditions</a> <span class="font-grey-4">|</span> 
                <a href="#">Privacy Policy</a> <span class="font-grey-4">|</span> 
                <a href="#">About us</a> <span class="font-grey-4">|</span> 
                <a href="#">About us</a> <span class="font-grey-4">|</span>                 
                <a href="#">Site Map</a> <span class="font-grey-4">|</span> 
                <a href="#">Third Party Login</a> <span class="font-grey-4">|</span>                 
                <br>
                Copyright © 2015 by VipService.<br>
                All Rights Reserved.<br>    	
            </div><!-- footer -->


        </div><!-- containder div -->

    </body>
</html>
