<?php

namespace DefaultBundle\Controller;

use DefaultBundle\Entity\Registration;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("", name="homepage")
     * @Template
     *
     * @return array
     */
    public function homeAction()
    {
        return array();
    }

    /**
     * @Route("/hotel", name="presentation")
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
     * @Template
     *
     * @return array
     */
    public function scheduleAction()
    {
        return array();
    }

    /**
     * @param Request $request
     *
     * @Route("/registration", name="registration")
     * @Template
     *
     * @return array
     */
    public function registrationAction(Request $request)
    {
        $registration = new Registration();
        $form = $this->createForm('registration', $registration);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $mail = \Swift_Message::newInstance()
                    ->setSubject('Inscription')
                    ->setFrom('noreply@parisbridgefestival.com')
                    ->setTo('ph.soulet@hotmail.fr')
                    ->setBody(
                        $this->renderView(
                            'DefaultBundle:Default/Mail:registration.html.twig',
                            array('registration' => $registration)
                        ),
                        'text/html'
                    );

                $this->get('mailer')->send($mail);
                $this->addFlash('success', $this->get('translator')->trans('form.success', array(), 'registration'));

                $this->redirectToRoute('registration');
            }
        }

        return array(
            'form' => $form->createView(),
            'registration' => $registration,
        );
    }

    /**
     * @Route("/prizes", name="prizes")
     * @Template
     *
     * @return array
     */
    public function prizesAction()
    {
        return array();
    }

    /**
     * @Route("/newsletter", name="newsletter")
     * @Template
     *
     * @return array
     */
    public function newsletterAction()
    {
        return array();
    }

    /**
     * @Route("/partners", name="partners")
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
     * @Template
     *
     * @return array
     */
    public function contactAction()
    {
        return array();
    }

    /**
     * @Route("/map", name="map")
     * @Template
     *
     * @return array
     */
    public function mapAction()
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
