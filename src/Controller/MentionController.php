<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MentionController extends AbstractController
{

    /**
     * @Route("/mentions_legales")
     */
    public function index(): Response
    {
        return $this->render('mentionLegales.html.twig');
    }
};
