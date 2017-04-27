<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\QCM;
use AppBundle\Entity\Techno;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class QCMController extends Controller
{
    /**
     * @Route("/admin/qcm-settings/", name="qcm_settings")
     */
    public function adminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $list_qcm = $em->getRepository('AppBundle:QCM')->findAll();
        $list_techno = $em->getRepository('AppBundle:Techno')->findAll();

        return $this->render('private/qcm-settings.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'list_qcm' => $list_qcm,
            'list_techno' => $list_techno,
        ]);
    }
}
