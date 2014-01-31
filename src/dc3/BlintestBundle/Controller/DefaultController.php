<?php

namespace dc3\BlintestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home-page")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
	/**
     * @Route("/a-propos", name="about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
	/**
     * @Route("/sign-in", name="signin")
     * @Template()
     */
    public function signinAction()
    {
        return array();
    }
}
