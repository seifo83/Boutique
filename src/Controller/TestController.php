<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index()
    {
      $users = $this -> getDoctrine() -> getRepository(User::class) -> findAll();

      return $this -> render('test/index.html.twig', [
        'users' => $users,
      ]);



    }
}
