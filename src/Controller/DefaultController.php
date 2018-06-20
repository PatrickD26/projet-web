<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/{guid}", name="home_page")
   */
  public function indexAction($guid)
  {
    $customer = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository(Guid::class)
      ->findOneBy($guid);

    if( null === $guid ) {
      // --- Exception
    }

    $name = $customer->getName();
    $email = $customer->getEmail();
    $isSociety = $customer->getIsSociety();

    return $this->render('index.html.twig', array(
      'name' => $name,
      'email' => $email,
      'isSociety' => $isSociety,
    ));
  }
}
