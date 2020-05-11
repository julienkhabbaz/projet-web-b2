<?php

namespace App\Controller;

use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
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



    /**
     * @Route("/Admin_Restaurant", name="admin_restaurant")
     */
    public function Restaurant()
    {
        if ($this->loggedin ==  true){
            $getrest = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();
            return $this->render('restaurant/index.html.twig',
                ['Restaurants'=> $getrest]);
        }
        return $this->redirectToRoute('admin_login_action');
    }


    /**
     * @Route("/Admin_Restaurant_Insert", name="admin_restaurant_insert")
     */
    public function Restaurant_Insert(Request $request)
    {
        if ($this->loggedin ==  true){
            $error = '';
            $success = '';
            if ($request->getMethod() == "POST"){
                if ($_FILES['logo']['name'] != ''){
                    $getrest = $this->getDoctrine()->getRepository(Restaurant::class)->findOneBy(
                        ['name' => $request->get('name')]
                    );
                    if (empty($getrest)){
                        $em = $this->getDoctrine()->getManager();
                        $rest = new Restaurant();

                        $info = pathinfo($_FILES['logo']['name']);
                        $ext = $info['extension'];
                        $date = date('mdYhisms', time());
                        $newname = $date . '.' . $ext;
                        $target = 'content/assets/restaurant/'.$newname;
                        move_uploaded_file( $_FILES['logo']['tmp_name'], "./".$target);
                        $rest->setLogo($target);

                        $rest->setName($request->get('name'));
                        $rest->setEmail($request->get('email'));
                        $rest->setAddress($request->get('address'));
                        $em->persist($rest);
                        $em->flush();
                        $success = 'Restaurant ajouté avec succès!';
                        return $this->render('restaurant/insert.html.twig',
                            ['Error' => $error, 'Success' => $success]
                        );
                    }
                    $error = 'Le restaurant existe déjà!';
                    return $this->render('restaurant/insert.html.twig',
                        ['Error' => $error, 'Success' => $success]
                    );
                }else{
                    $error = 'Le logo est requis!';
                    return $this->render('restaurant/insert.html.twig',
                        ['Error' => $error, 'Success' => $success]
                    );
                }
            }
            return $this->render('restaurant/insert.html.twig',
                ['Error' => $error, 'Success' => $success]);
        }
        return $this->redirectToRoute('admin_login_action');
    }


    /**
     * @Route("/Admin_Restaurant_Update/{id}", name="admin_restaurant_update")
     */
    public function Restaurant_Update(Request $request, $id)
    {
        if ($this->loggedin ==  true){
            $error = '';
            $success = '';
            $restaurant = $this->getDoctrine()->getRepository(Restaurant::class)->find($id);
            if ($request->getMethod() == "POST"){
                $em = $this->getDoctrine()->getManager();
                $rest = $em->getRepository(Restaurant::class)->find($id);

                if ($_FILES['logo']['name'] == ''){}else{
                    $info = pathinfo($_FILES['logo']['name']);
                    $ext = $info['extension'];
                    $date = date('mdYhisms', time());
                    $newname = $date . '.' . $ext;
                    $target = 'content/assets/restaurant/'.$newname;
                    unlink("./". $restaurant->getLogo());
                    move_uploaded_file( $_FILES['logo']['tmp_name'], "./".$target);
                    $rest->setLogo($target);
                }

                $rest->setEmail($request->get('email'));
                $rest->setAddress($request->get('address'));
                $em->flush();
                $success = 'Restaurant mis à jour avec succès!';
                return $this->render('restaurant/update.html.twig',
                    ['Restaurant' => $restaurant, 'Error' => $error, 'Success' => $success]
                );
            }
            return $this->render('restaurant/update.html.twig',
                ['Restaurant' => $restaurant, 'Error' => $error, 'Success' => $success]);
        }
        return $this->redirectToRoute('admin_login_action');
    }

    /**
     * @Route("/Restaurant_Delete/{id}", name="admin_restaurant_delete")
     */
    public function Restaurant_Delete($id)
    {
        if ($this->loggedin ==  true){
            $em = $this->getDoctrine()->getManager();
            $getrest = $em->getRepository(Restaurant::class)->find($id);
            $getrest->setStatus(1);
            $em->flush();
            return $this->redirectToRoute('admin_restaurant');
        }
        return $this->redirectToRoute('admin_login_action');
    }



}
