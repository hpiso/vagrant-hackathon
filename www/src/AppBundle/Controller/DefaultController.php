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
        }

        return $this->render('AppBundle:Default:index.html.twig', [
            'form' => $form->createView(),
            'place' => $place
        ]);
    }

    /**
     * @Route("/gallery", name="gallery")
     * @Method({"GET", "POST"})
     */
    public function galleryAction(Request $request)
    {
        $station = $request->request->get('station');

        $images = $this->getDoctrine()->getManager()->getRepository('AppBundle\Entity\Image')->findBy([
            'station' => $station,
        ]);


        return $this->render('AppBundle:Default:gallery.html.twig', [
            'images'  => $images,
            'station' => $station
        ]);
    }
}
