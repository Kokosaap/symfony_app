<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController {

    /**
     * @Route("hello/{param}")
     */
    function helloDefault($param){
        // $title = "utilisateurs";
        // $users = ["Jordan", "Axel", "Do", "Marielle", "Aurel", "Nono"];
        // return $this->render("hello.html.twig", [
        //     'title' => $title, 'array' => $users]);
        return new Response('Hello' . $param);
            
    }

    /**
     * @Route("hello/{param}", requirements={"param"="\d+"}, methods={"GET"})
     */
    function helloNumber($param){
        return new Response('Hello : Number' . $param);
    }
}
