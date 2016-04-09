<?php

namespace AppBundle\Controller;

use AppBundle\Form\PlaceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction($id)
    {
        $place = $this->getDoctrine()->getManager()->getRepository('AppBundle\Entity\Place')->find($id);

        $form = $this->createForm(PlaceType::class, null);

        return $this->render('AppBundle:Default:index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
