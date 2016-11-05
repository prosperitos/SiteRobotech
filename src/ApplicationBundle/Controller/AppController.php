<?php

namespace ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AppController extends Controller
{
	public function indexAction(){
		return $this->render("ApplicationBundle:default:index.html.twig");
	}

	public function aboutAction(){
		return $this->render("ApplicationBundle::about.html.twig");
	}

	public function teamAction(){
		return $this->render("ApplicationBundle::team.html.twig");
	}

	public function contactAction(){
		return $this->render("ApplicationBundle::contact.html.twig");
	}
}
