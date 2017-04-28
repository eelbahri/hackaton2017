<?php

namespace AppBundle\Controller\general;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestAlgoController extends Controller
{
    /**
     * @Route("/test-algo", name="test-algo")
     */
    public function TestAlgoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('public/tests/test-algo.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/test-algo/{level}", name="test-algo_level")
     */
    public function LevelAction(Request $request,$level)
    {
        if($level == 'easy'){
            return $this->render('public/tests/test-algo-easy.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            ]);
        }
        else if ($level == 'normal'){
            return $this->render('public/tests/test-algo-normal.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            ]);
        }
        else{
            throw $this->createNotFoundException('La page demandé n\'existe pas');
        }
    }
    /**
     * @Route("/post/ajax/correctAnswers", name="correct-tests")
     */
    public function correctTestsAction(Request $request)
    {
        $answers = $_POST['answers'];
        $correctAnswers = [3, 2, 2];
        $i = -1;
        $wrongAnswers = 0;

        if (!$answers) {
            $return = array('success'=>false);
            echo json_encode($return);

            exit;
        }

        foreach ($answers as $answer) {
            $i++;
            if ($answer == $correctAnswers[$i]) {
                continue;
            }
            $wrongAnswers++;
        }

        if($wrongAnswers > 0) {
            $return = array('success'=>false);

        } else {
            $return = array('success'=>true);
        }
        json_encode($return);

        return $this->json($return);
    }

    /**
     * @Route("/post/ajax/saveMeetAction", name="save-meet")
     */
    public function saveMeetAction(Request $request)
    {
        $answers = $_POST['meets'];

        $return = array('success'=>$answers);

        json_encode($return);

        return $this->json($return);
    }
}