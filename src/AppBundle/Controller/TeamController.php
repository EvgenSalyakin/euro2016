<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TeamController
 * @package AppBundle\Controller
 * @Route("/team", name="team")
 */
class TeamController extends Controller
{

    /**
     * @Route("/", name="team_index")
     * @Method("GET")
     * @Template
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/create", name="team_create")
     */
    public function createAction()
    {
        return [];
    }

    /**
     * @Route("/show/{id}",
     *     name="team_show",
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
     *     name="team_update",
     *     requirements={"id": "\d+"})
     * @Method("GET")
     */
    public function updateAction($id)
    {
        return [];
    }

    /**
     * @Route("/delete/{id}",
     *     name="team_delete",
     *     requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        return [];
    }
}
