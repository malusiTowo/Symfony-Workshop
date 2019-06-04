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
     * @Route("/", name="homepage")
     */
    public function indexAction(...)
    {
        $em = ...

        $tasks = ...

        /*
         * Create new task
         */
        $newTask = ...;

        /*
         * Create a form with taskType
         */
        $form = $this->...(..., $...);

        /*
         * handleRequest
         */
        $form->...($...);

        /*
         * Check if form is ok and done
         */
        if ($form->... && $form->...) {
            /*
             * set isDone to false by default
             */
            $...
            /*
             * Persist the entity
             */
            $...
            /*
             * Flush it !
             */
            $...

            /*
             * refresh
             */
            return ...
        }

        /*
         * Return render
         */
        return ...
    }

    /**
     * @Route("/done/{id}", name="task_done")
     */
    public function doneAction(...)
    {
        /*
         * set true to isDone
         */
    }

    /**
     * @Route ("/delete/{id}", name="task_delete")
     */
    public function delete(...)
    {
        /*
         * delete the task and refresh
         */
    }
}
