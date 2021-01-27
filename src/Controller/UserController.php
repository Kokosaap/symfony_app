<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController {

    /**
     * @Route("/user")
     */
    function createUserForm(Request $request) {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('date', DateType::class)
            ->add('save', SubmitType::class)
            ->getform();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            return new Response("Formulaire valide.");
        }
        
        return $this->render('form.html.twig', ['form' => $form->createView()]);
    }

}