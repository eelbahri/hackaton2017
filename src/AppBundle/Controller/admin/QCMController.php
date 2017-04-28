<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\QCM;

use AppBundle\Form\QCMType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class QCMController extends Controller
{
    /**
     * @Route("/admin/qcm-settings/", name="qcm_settings")
     */
    public function adminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $list_qcm = $em->getRepository('AppBundle:QCM')->findAll();

        return $this->render('private/qcm-settings.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'list_qcm' => $list_qcm,
        ]);
    }

    /**
     * @Route("/admin/add-qcm/", name="qcm_add")
     */
    public function addQCMAction(Request $request)
    {
        $QCM = new QCM();
        $form   = $this->get('form.factory')->create(QCMType::class,$QCM);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($QCM);
            $em->flush();
            return $this->redirectToRoute('qcm_settings');
        }
        return $this->render('private/add-question.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/qcm-settings/delete/{id_qcm}/", name="qcm_delete")
     */
    public function deleteQCMAction(Request $request,$id_qcm)
    {
        $em = $this->getDoctrine()->getManager();
        $qcm = $em->getRepository('AppBundle:QCM')->find($id_qcm);

        if (!$id_qcm) {
            throw $this->createNotFoundException(
                'No question found for id '.$id_qcm
            );
        }
        $em->remove($qcm);
        $em->flush();

        return $this->redirectToRoute('qcm_settings');
    }

    /**
     * @Route("/admin/qcm-settings/edit/{id_qcm}/", name="qcm_update")
     */
    public function editQCMAction(Request $request,$id_qcm)
    {
        $em = $this->getDoctrine()->getManager();
        $QCM = $em->getRepository('AppBundle:QCM')->find($id_qcm);

        $form   = $this->get('form.factory')->create(QCMType::class,$QCM);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($QCM);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Le QCM est à bien été mis à jour.');
                return $this->redirectToRoute('qcm_settings');
            }
        }
        return $this->render('private/edit-qcm.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }
}
