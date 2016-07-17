<?php

namespace TechCorp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    public function homepageAction()
    {

        return $this->render('TechCorpFrontBundle:Statique:homepage.html.twig');
    }

    public function aboutAction()
    {

        return $this->render('TechCorpFrontBundle:Statique:about.html.twig');
    }

    public function testAction()
    {

        return $this->render('TechCorpFrontBundle:Statique:test.html.twig');
    }
}
