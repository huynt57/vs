<body class='error'>
    <div class="wrapper">
        <div class="code"><span>404</span><i class="icon-warning-sign"></i></div>
        <div class="desc">Oops! Sorry, that page could'nt be found.</div>
        <form action="more-searchresults.html" class='form-horizontal'>
            <div class="input-append">
                <input type="text" name="search" placeholder="Search a site..">
                <button type='submit' class='btn'><i class="icon-search"></i></button>
            </div>
        </form>
        <div class="buttons">
            <div class="pull-left"><a href="<?php echo Yii::app()->createUrl('bookService') ?>" class="btn"><i class="icon-arrow-left"></i> Back</a></div>
        </div>
    </div>

</body>
