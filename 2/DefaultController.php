<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="task_homepage")
     */
    public function indexAction()
    {
        /*
         * Get entity manager
         */
        $em = ...;

        /*
         * Get all Tasks (Repository)
         */
        $tasks = $em->...('...')->...();

        /*
         * Return view with parameters
         */
        return $this->render('default/index.html.twig', array(
            'tasks' => ...,
        ));
    }
}
