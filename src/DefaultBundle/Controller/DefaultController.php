<?php

namespace DefaultBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template
     *
     * @return array
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @param Request $request
     * @param string  $locale
     *
     * @Route("/switch_locale/{locale}", name="switch_locale", requirements={ "locale" = "fr|en" })
     *
     * @return RedirectResponse
     */
    public function switchLocaleAction(Request $request, $locale)
    {
        $this->get('session')->set('_locale', $locale);

        $url = $request->headers->get('referer');
        if (empty($url)) {
            $url = $this->container->get('router')->generate('homepage');
        }

        return new RedirectResponse($url);
    }
}
