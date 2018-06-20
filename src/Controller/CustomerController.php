<?php

namespace App\Controller;

use App\Entity\CustomerPart;
use App\Entity\CustomerPro;
use App\Form\CustomerPartType;
use App\Form\CustomerProType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends Controller
{
  /**
   * @Route("/form/{isSociety}", name="form_page")
   */
  public function formAction($isSociety, Request $request)
  {
    if( $isSociety ) {
      $customer = new CustomerPro();
      $form = $this->createForm(CustomerProType::class, $customer);
    } else {
      $customer = new CustomerPart();
      $form = $this->createForm(CustomerPartType::class, $customer);
    }

    $form->handleRequest($request);
    if( $form->isSubmitted() && $form->isValid() ) {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($customer);
      $entityManager->flush();

      return $this->redirectToRoute('route');
    }

    return $this->render(
      'formulaire.html.twig',
      [ 'form' => $form->createView() ]
    );
  }
}
