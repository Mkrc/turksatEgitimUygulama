<?php

namespace CustomerBundle\Controller;

use CustomerBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CustomerBundle\Form\Type\CustomerDocumentType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // yeni ekleme için
        $customer = new Customer();

        /**
            Düzenleme için
            $customerRepository = $this->getDoctrine()->getRepository("CustomerBundle:Customer");
            $customer = $customerRepository->find(1);
        **/
        
        $documentForm = $this->createForm(CustomerDocumentType::class, $customer);
        $documentForm->handleRequest($request);

        if ($documentForm->isSubmitted()) {
            dump($customer);

            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
        }

        return $this->render('CustomerBundle:Default:index.html.twig', array(
            'documentForm' => $documentForm->createView())
        );
    }
}
