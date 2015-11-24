<?php
// src/AppBundle/Controller/CountriesController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CountriesController extends Controller
{
    /**
     * @Route("/country/{id}")
     */
    public function countryShowAction($id)
    {

        return new Response(
            '<html><body><h1>Country: '.$id.'</h1></body></html>'
        );
    }
}