<?php

namespace Xandrusoft\GoalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('XandrusoftGoalBundle:Default:index.html.twig');
    }
}
