<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\QuestionsRecruit;
use AppBundle\Entity\Users;

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
     * @Route("/admin/", name="homepage_admin")
     *
     * Permet l'affichage des tableaux
     */
    public function adminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $q_recruit = $em->getRepository('AppBundle:QuestionsRecruit')->findBy(
            array('type' => 0)
        );
        $t_recruit = $em->getRepository('AppBundle:QuestionsRecruit')->findBy(
            array('type' => 1)
        );

        $users = $em->getRepository('AppBundle:Users')->findAll();

        return $this->render('private/indexAdmin.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'q_recruit' => $q_recruit,
            't_recruit' => $t_recruit,
            'users' => $users,
        ]);
    }
    /**
     * @Route("/admin/bot/add-question/", name="add-question_bot")
     *
     *
     * Ajout d'une question
     */
    public function addQuestionAction(Request $request)
    {
        $question = new QuestionsRecruit();

        $form = $this->createFormBuilder($question)
            ->add('type',ChoiceType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'choices' => array(
                    'Recrutement' => 0,
                    'Technique' => 1,
                ),
                'label' => 'Type de question'
            ))
            ->add('question',TextType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Question'
            ))
            ->add('response',TextType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Réponse à la question',
                'required' => false
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Ajouter Question',
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
    /**
     * @Route("/admin/bot/delete/{id_question}/", name="delete-question_bot")
     *
     * Suppresssion d'une Question
     */
    public function deleteQuestionAction(Request $request,$id_question)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('AppBundle:QuestionsRecruit')->find($id_question);

        if (!$id_question) {
            throw $this->createNotFoundException(
                'No question found for id '.$id_question
            );
        }

        $em->remove($question);
        $em->flush();
        return $this->redirectToRoute('homepage_admin');
    }

    /**
     * @Route("/admin/bot/update/{id_question}/", name="update-question_bot")
     *
     * Mise à jour des questions
     */
    public function updateQuestionAction(Request $request,$id_question)
    {
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('AppBundle:QuestionsRecruit')->find($id_question);

        $form = $this->createFormBuilder($question)
            ->add('type',ChoiceType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'choices' => array(
                    'Recrutement' => 0,
                    'Technique' => 1,
                ),
                'label' => 'Type de question'
            ))
            ->add('question',TextType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Question'
            ))
            ->add('response',TextType::class,array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'label' => 'Réponse à la question',
                'required' => false
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Modifier',
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

    /**
     * @Route("/admin/profile/{id_users}/", name="profile-recruitement")
     *
     * Suppression d'un utilisateur
     */
    public function deleteUsersAction(Request $request,$id_users)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Users')->find($id_users);

        if (!$id_users) {
            throw $this->createNotFoundException(
                'No profile found for id '.$id_users
            );
        }
        return $this->render('private/profile.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            "user" => $user,
        ]);
    }
}