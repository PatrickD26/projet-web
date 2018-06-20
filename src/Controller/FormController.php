<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 20/04/2018
 * Time: 14:59
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FormController extends Controller

{
    public function index(){
        return $this->render('formulaire.html.twig');
    }

    public function completed(){
        return $this->render('form-already-completed.html.twig');
    }
}