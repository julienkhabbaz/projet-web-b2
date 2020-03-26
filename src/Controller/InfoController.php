<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('info/index.html.twig');
    }
    /**
     * @Route("/login", name="login_action")
     */
    public function Login()
    {
        return $this->render('info/login.html.twig');
    }



}
