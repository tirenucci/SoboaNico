<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
};
