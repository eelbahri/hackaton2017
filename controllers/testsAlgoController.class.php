
<?php

class testsAlgoController
{
    public function indexAction($args)
    {
        $view = new view();
        $view->setView("tests_algo/index");
    }

    public function facilePremierAction($args)
    {
        $view = new view();
        $view->setView("tests_algo/easy/questions");
    }

    public function normalPremierAction($args)
    {
        $view = new view();
        $view->setView("tests_algo/normal/questions");
    }

}
