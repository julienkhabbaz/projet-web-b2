<?php

namespace App\Controller;


use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{

    private $users = null;
    private $usersloggedin = false;

    public function __construct()
    {
        if (isset($_SESSION['users'])){
            $this->users = $_SESSION['users'];
            $this->usersloggedin = true;
        }
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $check = 1;
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/FrontMenu", name="front_menu")
     */
    public function FrontMenu()
    {
        if ($this->usersloggedin){
            $check = 1;
            return $this->render('front/menu.html.twig',[
                'Check' => $check
            ]);
        }else{
            $check = 0;
            return $this->render('front/menu.html.twig',[
                'Check' => $check
            ]);
        }
    }



    /**
     * @Route("/user/login", name="user_login_action")
     */
    public function UserLogin(Request $request)
    {
        $error = '';
        if ($request->getMethod() == "POST") {
            $email = $request->get('email');
            $password = $request->get('password');
//            $password = md5($pass);
            $users = $this->getDoctrine()->getRepository(Restaurant::class)->findOneBy(
                ['email' => $email, 'password' => $password]
            );
            if (!empty($users))
            {
                if (session_status() === PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['users'] = $users;
                return $this->redirectToRoute('homepage');
            }
            $error = 'E-mail ou mot de passe incorrect!';
            return $this->render('front/login.html.twig',
                ['NotMatch' => $error]);
        }
        return $this->render('front/login.html.twig',
            ['NotMatch' => $error]);
    }


    /**
     * @Route("/Register", name="users_register")
     */
    public function UsersRegister(Request $request){
        $error = '';
        $success = '';
        if ($request->getMethod() == "POST"){
            $finduseremail = $this->getDoctrine()->getRepository(Restaurant::class)->findOneBy(
                ['email' => $request->get('email')]
            );
            $findusername = $this->getDoctrine()->getRepository(Restaurant::class)->findOneBy(
                ['name' => $request->get('name')]
            );
            if (!empty($findusername)){
                $error = 'Le nom existe déjà!';
                return $this->render('front/register.html.twig',
                    ['Error' => $error, 'Success' => $success]
                );
            }
            if (empty($finduseremail)){
                $em = $this->getDoctrine()->getManager();
                $rest = new Restaurant();
                $info = pathinfo($_FILES['pic']['name']);
                $ext = $info['extension'];
                $date = date('mdYhisms', time());
                $newname = $date . '.' . $ext;
                $target = 'content/assets/restaurant/'.$newname;
                move_uploaded_file( $_FILES['pic']['tmp_name'], "./".$target);
                $rest->setLogo($target);

                $rest->setName($request->get('name'));
                $rest->setEmail($request->get('email'));
                $rest->setAddress($request->get('address'));
                $rest->setStatus(1);
                $rest->setPassword($request->get('password'));
                $em->persist($rest);
                $em->flush();
                $success = 'Enregistré avec succès!';
                return $this->render('front/register.html.twig',
                    ['Success' => $success, 'Error' => $error]
                );
            }
            $error = "L'email existe déjà!";
            return $this->render('front/register.html.twig',
                ['Error' => $error, 'Success' => $success]
            );
        }
        return $this->render('front/register.html.twig',
            ['Error' => $error, 'Success' => $success]
        );
    }

    /**
     * @Route("/Users_Logout", name="users_logout")
     */
    public function Users_Logout()
    {
        session_unset();
        session_destroy();
        return $this->redirectToRoute('homepage');
    }


    /**
     * @Route("/Restaurants", name="front_restaurants_list")
     */
    public function Front_Restaurants_LISt()
    {
        $rest = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();
        return $this->render('front/restaurants.html.twig', [
            'Restaurants' => $rest
        ]);
    }



}
