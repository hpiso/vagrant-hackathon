<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Place;
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

            return $this->redirectToRoute('resultat', ['placeId' => $place->getId() ]);

        }

        return $this->render('AppBundle:Default:index.html.twig', [
            'form' => $form->createView(),
            'place' => $place
        ]);
    }

    /**
     * @Route("/resultat/{placeId}", name="resultat")
     * @Method({"GET", "POST"})
     */
    public function resultatAction(Request $request, $placeId)
    {
        $place = $this->getDoctrine()->getManager()->getRepository('AppBundle\Entity\Place')->find($placeId);

        $form = $this->createForm(PlaceType::class, null, [
            'place' => $place
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $place = $form->getData()['place'];
            return $this->redirectToRoute('resultat', ['placeId' => $place->getId() ]);
        }

        return $this->render('AppBundle:Default:resultat.html.twig', [
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


        return $this->render('AppBundle:Default:gallery.html.twig', ['images' => $images]);
    }
}
