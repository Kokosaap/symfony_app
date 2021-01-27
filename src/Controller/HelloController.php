<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController {

    /**
     * @Route("hello")
     */
    function hello(){
        return $this->render('hello.html.twig');
    }

    /**
     * @Route("hello/{name}", name="helloName")
     */
    function helloWithName(string $name){
        return $this->render('Hello '. $name);
    }
}
