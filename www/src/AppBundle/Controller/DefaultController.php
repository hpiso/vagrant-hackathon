<?php

namespace AppBundle\Controller;

use AppBundle\Form\PlaceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(PlaceType::class, null);
        $form->handleRequest($request);
        $place = null;

        if ($form->isSubmitted()) {
            $place = $form->getData()['place'];

            dump($place);die;
        }

        return $this->render('AppBundle:Default:index.html.twig', [
            'form' => $form->createView(),
            'place' => $place
        ]);
    }
}
