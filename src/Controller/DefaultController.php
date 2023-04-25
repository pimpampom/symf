<?php
// src/AppBundle/Controller/DefaultController.php
// ...
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
    * @Route("/admin")
    */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
        /**
    * @Route("/profile")
    */
    public function userAction()
    {
        return new Response('<html><body>User page!</body></html>');
    }
}