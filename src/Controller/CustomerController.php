<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends Controller
{
  /**
   * @Route("/form/{status}", name="form_page")
   */
  public function formAction($status)
  {
    return $this->render('formulaire.html.twig', array());
  }
}
