<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wild", name="wild_")
 */
class WildController extends AbstractController
{
    /**
     * @Route("/index", name="wild_index")
     */
    public function index() :Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

    /**
     * @param string $slug The slugger
     * @Route("/show/{slug}",
     *     requirements={"slug"="[a-z0-9-]+"},
     *     name="show")
     * @return Response
     */
    public function show(string $slug = 'noslug'): Response
    {
        $titre = ucwords(str_replace("-", " ", $slug));

        return $this->render('wild/show.html.twig',
            [
                'titre' => $titre,
            ]);
    }
}