<?php

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    private $user = null;
    private $loggedin = false;

    public function __construct()
    {
        if (isset($_SESSION['admin'])){
            $this->user = $_SESSION['admin'];
            $this->loggedin = true;
        }
    }


//    /**
//     * @Route("/Register", name="register")
//     */
    /*public function Register(Request $request){
        $error = '';
        $success = '';
        if ($request->getMethod() == "POST"){
            $finduseremail = $this->getDoctrine()->getRepository(User::class)->findOneBy(
                ['email' => $request->get('email')]
            );
            $findusername = $this->getDoctrine()->getRepository(User::class)->findOneBy(
                ['name' => $request->get('name')]
            );
            if (!empty($findusername)){
                $error = 'Username Already Exist!';
                return $this->render('adminlogin/register.html.twig',
                    ['Error' => $error, 'Success' => $success]
                );
            }
            if (empty($finduseremail)){
                $em = $this->getDoctrine()->getManager();
                $user = new User();
                $user->setName($request->get('name'));
                $user->setEmail($request->get('email'));
                $user->setPhone($request->get('phone'));
                $user->setAddress($request->get('address'));
                $user->setCountry($request->get('country'));
                $user->setCity($request->get('city'));
                $user->setGender($request->get('gender'));
                $encryptpass = $request->get('password');
                $pswUser = md5($encryptpass);
//                $hash = password_hash($encryptpass, PASSWORD_DEFAULT);
                $user->setPassword($pswUser);
                $user->setIsactive(1);
                $user->setRole(1);
                $em->persist($user);
                $em->flush();
                $success = 'Registered Successfully!';
                return $this->render('adminlogin/register.html.twig',
                    ['Success' => $success, 'Error' => $error]
                );
            }
            $error = 'Email Already Exist!';
            return $this->render('adminlogin/register.html.twig',
                ['Error' => $error, 'Success' => $success]
            );
        }
        return $this->render('adminlogin/register.html.twig',
            ['Error' => $error, 'Success' => $success]
        );
    }*/



    /**
     * @Route("/Login", name="admin_login_action")
     */
    public function Login(Request $request)
    {
        $error = '';
        if ($request->getMethod() == "POST")
        {
            $username = $request->get('username');
            $password = $request->get('password');
//            $password = md5($pass);

            $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(
                ['username' => $username, 'password' => $password]
            );
            if (!empty($user))
            {
                if (session_status() === PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['admin'] = $user;
                return $this->redirectToRoute('admin_homepage_action');
            }
            $error = 'Le nom ou le mot de passe est incorrect!';
            return $this->render('admin/login.html.twig',
                ['NotMatch' => $error]);
        }
        return $this->render('admin/login.html.twig',
            ['NotMatch' => $error]);
    }


    /**
     * @Route("/Admin_Dashboard", name="admin_homepage_action")
     */
    public function Admin_Index()
    {
        if ($this->loggedin == true){
            return $this->render('admin/index.html.twig');
        }
        session_unset();
        return $this->redirectToRoute('admin_login_action');
    }

    /**
     * @Route("/Admin_Logout", name="admin_logout")
     */
    public function Admin_Logout()
    {
        session_unset();
        session_destroy();
        return $this->redirectToRoute('admin_login_action');
    }

}
