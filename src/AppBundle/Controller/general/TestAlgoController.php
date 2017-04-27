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
}