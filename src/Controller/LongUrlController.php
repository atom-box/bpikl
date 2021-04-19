<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\LongUrl;
use App\Form\Type\OrderType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Event\ConsoleEvent;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

/*
it’s better to move complex forms to dedicated
classes instead of defining them in controller actions.
*/

/*
This controller follows a common pattern for handling forms and has three possible paths:

    When initially loading the page in a browser, the form hasn’t been submitted yet and $form->isSubmitted() returns false. So, the form is created and rendered;
    When the user submits the form, handleRequest() recognizes this and immediately writes the submitted data back into the task and dueDate properties of the $task object. Then this object is validated (validation is explained in the next section). If it is invalid, isValid() returns false and the form is rendered again, but now with validation errors;
    When the user submits the form with valid data, the submitted data is again written into the form, but this time isValid() returns true. Now you have the opportunity to perform some actions using the $task object (e.g. persisting it to the database) before redirecting the user to some other page (e.g. a “thank you” or “success” page);

*/

class LongUrlController extends AbstractController
{

    /**
     * @Route("/formone", name="app_form_one")
     */
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $foo    = new LongUrl(); // todo foo

        $foo->setRawUrl('Enter link here');  // todo UNUSED?

        $form = $this->createFormBuilder($foo) // todo
            ->add('rawUrl', UrlType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Shorten URL',
            ])
            ->getForm();

        // HANDLE REQUEST //////////////////////////////
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $submittedData = $form->getData(); // holds the submitted values
            // but, the original `$task` variable has also been updated
            // $longUrl = $form->getData();
            // var_dump($longUrl);
            // die;

            // $longUrl CONTAINS
            // //================
            // object(App\Entity\LongUrl){ ["rawUrl":protected]=> string(0) "" 
            // ["longUrl":protected]=> string "http://as" ["shortUrl":protected]=> string "waterloo" 
            // }
            //================

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            return $this->redirectToRoute('task_success');
        }

        // RENDER  //////////////////////////////////////
        return $this->render('formOne.html.twig', [
            'form' => $form->createView(),
            // dont pass the form, do this method from it instead
        ]);
    }

    /**
     * @Route("/success", name="task_success")
     */
    public function shoe()
    {
        return $this->render('success.html.twig', [
            'peach' => 'uuuuuu',
            'plum' => $submittedData['rawUrl'],
        ]);
    }
}
