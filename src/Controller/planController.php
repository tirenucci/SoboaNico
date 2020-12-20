<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class planController extends AbstractController
{

    /**
     * @Route("/plan_site")
     */
    public function index(): Response
    {
        return $this->render('planSite.html.twig');
    }
};
