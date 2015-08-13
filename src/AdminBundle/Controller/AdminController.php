<?php

namespace AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/login", name="login")
     * @Template
     *
     * @return array
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $session->get(Security::LAST_USERNAME),
            'error'         => $error,
        );
    }

    /**
     * @Route("/admin", name="admin")
     * @Template
     *
     * @return array
     */
    public function adminAction()
    {
        return array();
    }
}
