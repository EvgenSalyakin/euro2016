<?php
// src/AppBundle/Controller/PlayersController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PlayersController extends Controller
{
    /**
     * @Route("/player/{id}")
     */
    public function pleyerShowAction($id)
    {

        return new Response(
            '<html><body><h1>Player: '.$id.'</h1></body></html>'
        );
    }
}