<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Address;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AddressController extends Controller
{
    /**
     * @Route("addAddress/{id}")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function addAddressAction(Request $request, $id){
        $newAddress = new Address();
        $form = $this->createFormBuilder($newAddress)
            ->add('city','text', array('label' =>'Miasto:'))
        ->add('street','text', array('label' => 'Ulica:'))
        ->add('house_number','text', array('label' => 'Numer domu:'))
        ->add('local_number', 'text', array('label' => 'Numer lokalu:'))
            ->add('Zapisz','submit')
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
            $person = $repo->find($id);

            $newAddress = $form->getData();
            $newAddress->setPersonId($person);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($newAddress);
            $em->flush();

            return $this->redirectToRoute('showPerson', array('id' => $id));
        }



        return array('form' => $form->createView());

    }

    /**
     * @Route("deleteAddress/{id}")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function deleteAddressAction($id){
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Address');
        $address = $repo->find($id);
        $personId = $address->getPersonId()->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($address);
        $em->flush();

        return $this->redirectToRoute('showPerson', array('id' => $personId));
    }
}
