
<?php

class chatbotController
{

    public function indexAction($args)
    {
        $view = new view();
        $view->setView("chatbot");
    }
}
