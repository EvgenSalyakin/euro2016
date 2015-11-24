<?php
// src/AppBundle/Controller/TeamsController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TeamsController extends Controller
{
    /**
     * @Route("/team/{id}")
     */
    public function teamShowAction($id)
    {

        return new Response(
            '<html><body><h1>Team: '.$id.'</h1></body></html>'
        );
    }
}