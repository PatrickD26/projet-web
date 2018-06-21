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
   * @Route("/form", name="form_page")
   */
  public function formAction()
  {

    $name = "Patrick";
    $email = "adressemail";
    $isSociete = 0;

    return $this->render(
      'formulaire-particulier.html',
      [
        'name' => $name,
        'email' => $email,
        'isSociete' => $isSociete
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
