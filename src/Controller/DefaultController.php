<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/", name="home_page")
   */
  public function indexAction()
  {
    return $this->render('index.html.twig', array());
  }
}
