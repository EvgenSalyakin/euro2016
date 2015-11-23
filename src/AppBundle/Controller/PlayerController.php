<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PlayerController
 * @package AppBundle\Controller
 * @Route("/player", name="player")
 */
class PlayerController extends Controller
{

    /**
     * @Route("/", name="player_index")
     * @Method("GET")
     * @Template
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/create", name="player_create")
     */
    public function createAction()
    {
        return [];
    }

    /**
     * @Route("/show/{id}",
     *     name="player_show",
     *     requirements={"id": "\d+"})
     * @Method("GET")
     * @Template
     */
    public function showAction($id)
    {
        return [];
    }

    /**
     * @Route("/update/{id}",
     *     name="player_update",
     *     requirements={"id": "\d+"})
     * @Method("GET")
     */
    public function updateAction($id)
    {
        return [];
    }

    /**
     * @Route("/delete/{id}",
     *     name="player_delete",
     *     requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        return [];
    }
}
