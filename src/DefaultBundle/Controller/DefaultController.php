<?php

namespace DefaultBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method({"GET"})
     * @Template
     *
     * @return array
     */
    public function homeAction()
    {
        return array();
    }

    /**
     * @Route("/presentation", name="presentation")
     * @Method({"GET"})
     * @Template
     *
     * @return array
     */
    public function presentationAction()
    {
        return array();
    }

    /**
     * @Route("/schedule", name="schedule")
     * @Method({"GET"})
     * @Template
     *
     * @return array
     */
    public function scheduleAction()
    {
        return array();
    }

    /**
     * @Route("/prizes", name="prizes")
     * @Method({"GET"})
     * @Template
     *
     * @return array
     */
    public function prizesAction()
    {
        return array();
    }

    /**
     * @Route("/partners", name="partners")
     * @Method({"GET"})
     * @Template
     *
     * @return array
     */
    public function partnersAction()
    {
        return array();
    }

    /**
     * @Route("/contact", name="contact")
     * @Method({"GET"})
     * @Template
     *
     * @return array
     */
    public function contactAction()
    {
        return array();
    }

    /**
     * @param Request $request
     * @param string  $locale
     *
     * @Route("/switch_locale/{locale}", name="switch_locale", requirements={ "locale" = "fr|en" })
     * @Method({"GET"})
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
