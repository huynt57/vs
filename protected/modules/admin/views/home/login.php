<body class='login'>
    <div class="wrapper">
        <h1><a href="<?php echo Yii::app()->createUrl('bookService') ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Vip Service</a></h1>
        <div class="login-body">
            <h2>LOGIN IN</h2>
            <form action="<?php echo Yii::app()->createUrl('admin/home/login') ?>" method='post' class='form-validate' id="test">
                <div class="control-group">
                    <div class="email controls">
                        <input type="text" name='admin_name' placeholder="Username" class='input-block-level' data-rule-required="true" data-rule-email="true">
                    </div>
                </div>
                <div class="control-group">
                    <div class="pw controls">
                        <input type="password" name="admin_password" placeholder="Password" class='input-block-level' data-rule-required="true">
                    </div>
                </div>
                
                <div class="submit">
                    <div class="remember">
                        <input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember"> <label for="remember">Remember me</label>
                    </div>
                    <input type="submit" value="Sign me in" class='btn btn-primary'>
                </div>
            </form>

            <div class="forget">
                <a href="#"><span></span></a>
            </div>
        </div>
    </div>
</body>
