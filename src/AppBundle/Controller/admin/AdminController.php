<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\QuestionsTechno;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="homepage_admin")
     */
    public function adminAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('private/indexAdmin.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/admin/bot/add-question", name="add-question_bot")
     */
    public function addQuestionAction(Request $request)
    {
        $question = new QuestionsTechno();

        $form = $this->createFormBuilder($question)
            ->add('IsActive',ChoiceType::class,array(
                'choices' => array(
                    'Recrutement' => 0,
                    'Technique' => 1,
                ),
                'label' => 'Type de question'
            ))
            ->add('name',TextType::class,array(
                'attr' => array(
                ),
                'label' => 'Question'
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Ajouter Événement',
                'attr' => array(
                    'class' => 'btn btn-success'
                )
            ))
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($question);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'La question à bien été enregisté.');
                return $this->redirectToRoute('homepage_admin');
            }
        }

        return $this->render('private/add-question.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'form' => $form->createView(),
        ]);
    }

}