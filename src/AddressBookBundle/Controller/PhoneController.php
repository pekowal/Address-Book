<?php

namespace AddressBookBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AddressBookBundle\Entity\Phone;
use AddressBookBundle\Entity\Person;
use AddressBookBundle\Form\PhoneType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class PhoneController extends Controller
{

    /**
     * @Route("/addPhone/{id}")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function addPhoneAction(Request $request, $id){
        $newPhone = new Phone();
        $form = $this->createFormBuilder($newPhone)->add('number', 'text')
            ->add('type', 'choice', array('choices' => array('Domowy' => 'Domowy', 'Służbowy' => 'Służbowy')))
            ->add('Zapisz', 'submit')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
            $person = $repo->find($id);

            $newPhone = $form->getData();
            $newPhone->setPersonId($person);
            
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($newPhone);
            $em->flush();

            return $this->redirectToRoute('showPerson', array('id' => $id));
        }
        
        return array('form' => $form->createView());
    }

    /**
     * @Route("deletePhone/{id}")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function deletePhoneAction($id){
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Phone');

        $phone = $repo->find($id);
        $personId = $phone->getPersonId()->getId();
        $em = $this->getDoctrine()->getEntityManager();


        $em->remove($phone);
        $em->flush();

        return $this->redirectToRoute('showPerson', array('id' => $personId));

    }
}
