<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("", name="homepage")
     * @Template
     *
     * @return array
     */
    public function home()
    {
        return [];
    }

    /**
     * @Route("/hotel", name="presentation")
     * @Template
     *
     * @return array
     */
    public function presentation()
    {
        return [];
    }

    /**
     * @Route("/schedule", name="schedule")
     * @Template
     *
     * @return array
     */
    public function scheduleAction()
    {
        return [];
    }

    /**
     * @Route("/prizes", name="prizes")
     * @Template
     *
     * @return array
     */
    public function prizes()
    {
        return [];
    }

    /**
     * @Route("/newsletter", name="newsletter")
     * @Template
     *
     * @return array
     */
    public function newsletter()
    {
        return [];
    }

    /**
     * @Route("/partners", name="partners")
     * @Template
     *
     * @return array
     */
    public function partners()
    {
        return [];
    }

    /**
     * @Route("/contact", name="contact")
     * @Template
     *
     * @return array
     */
    public function contact()
    {
        return [];
    }

    /**
     * @Route("/map", name="map")
     * @Template
     *
     * @return array
     */
    public function map()
    {
        return [];
    }

    /**
     * @param Request          $request
     * @param string           $locale
     * @param SessionInterface $session
     *
     * @Route("/switch_locale/{locale}", name="switch_locale", requirements={ "locale" = "fr|en" })
     *
     * @return RedirectResponse
     */
    public function switchLocale(Request $request, $locale, SessionInterface $session)
    {
        $session->set('_locale', $locale);

        $url = $request->headers->get('referer');
        if (empty($url)) {
            $url = $this->container->get('router')->generate('homepage');
        }

        return new RedirectResponse($url);
    }
}
