<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OtherController extends Controller
{
    /**
     * @Route("/other-path", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->get(DefaultController::class)->indexAction($request);
    }
}
