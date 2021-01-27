<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController {

    /**
     * @Route("/user")
     */
    function createUserForm() {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('name')
            ->add('email')
            ->getform();
        return $this->render('form.html.twig', ['form' => $form->createView()]);
    }

}