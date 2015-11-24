<?php
// src/AppBundle/Controller/CoachesController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CoachesController extends Controller
{
    /**
     * @Route("/coach/{id}")
     */
    public function coachShowAction($id)
    {

        return new Response(
            '<html><body><h1>Coach: '.$id.'</h1></body></html>'
        );
    }
}