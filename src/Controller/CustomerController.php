<?php

namespace App\Controller;

use App\Entity\CustomerPart;
use App\Entity\CustomerPro;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends Controller
{
  /**
   * @Route("/form/{guid}}", name="form_page")
   */
  public function formAction($guid)
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

    return $this->render(
      'formulaire.html.twig',
      [
        'name' => $name,
        'email' => $email,
        'isSociety' => $isSociety
      ]
    );
  }

  /**
   * @Rest\View()
   * @Rest\Post("/customers")
   */
  public function postCustomerAction(Request $request)
  {
    return [
      'payload' => [
        $request->get('name'),
        $request->get('address')
      ]
    ];
  }
}
