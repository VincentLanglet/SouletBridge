<?php

namespace DefaultBundle\Entity;

/**
 * Registration
 */
class Registration
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $competitions;

    /**
     * @var string
     */
    private $information;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Registration
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Registration
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set competitions
     *
     * @param string $competitions
     *
     * @return Registration
     */
    public function setCompetitions($competitions)
    {
        $this->competitions = $competitions;

        return $this;
    }

    /**
     * Get competitions
     *
     * @return string
     */
    public function getCompetitions()
    {
        return $this->competitions;
    }

    /**
     * Set information
     *
     * @param string $information
     *
     * @return Registration
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }
}
