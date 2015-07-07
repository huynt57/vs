<?php

class DefaultController extends Controller {

    /**
     * Displays sitemap in XML or HTML format,
     * depending on the value of $format parameter
     * @param string $format
     */
    public $layoutPath;
    public $layout;
    
    public function actionIndex($format = 'html') {
        $this->layoutPath = Yii::getPathOfAlias('webroot') . "/themes/classic/views/layouts";
        $this->layout = 'nonPrepare';
        if ($this->getModule()->actions)
            $urls = $this->getModule()->getSpecifiedUrls();
        else
            $urls = $this->getModule()->getAllUrls();

        if ($format == 'xml') {
            if (!headers_sent())
                header('Content-Type: text/xml');
            $this->renderPartial('xml', array('urls' => $urls));
        } else
            $this->render('html', array('urls' => $urls));
    }

}
