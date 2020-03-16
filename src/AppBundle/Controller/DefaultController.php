<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Invoice;
use AppBundle\Entity\InvoiceRows;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/create", name="invoice_create")
     */
    public function create(Request $request)
    {
      // richiamare l’entity manager di Doctrine
      // $em = $this->getDoctrine()->getManager();
      // comunichiamo a Doctrine che l’oggetto appena creato necessita di essere gestito
      // $em->persist();
      // inserire l’oggetto nel database.
      // $em->flush();


      return view('base.html.twig');
    }
}
