<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditorController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Editor:index.html.twig', array(
            // ...
        ));
    }

}
