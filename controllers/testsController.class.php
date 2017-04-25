
<?php

class testsController
{

    public function premierAction($args)
    {
        $view = new view();
        $view->setView("tests");
    }
}
