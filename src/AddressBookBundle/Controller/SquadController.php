<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Squad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class SquadController extends Controller
{
    /**
     * @Route("/squad/add")
     * @Template()
     */
    public function addGroupAction(Request $request)
    {
        $squad = new Squad();
        
        $form = $this->createFormBuilder($squad)
            ->add('name','text',array('label' => 'Grupa'))
            ->add('Zapisz','submit')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $squad = $form->getData();

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($squad);
            $em->flush();

            return $this->redirectToRoute('addressbook_person_index');
        }

        return array('form' => $form->createView());
    }

}
