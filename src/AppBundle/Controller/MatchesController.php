<?php
// src/AppBundle/Controller/MatchesController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MatchesController extends Controller
{
    /**
     * @Route("/match/{id}")
     */
    public function matchShowAction($id)
    {

        return new Response(
            '<html><body><h1>Match: '.$id.'</h1></body></html>'
        );
    }
}