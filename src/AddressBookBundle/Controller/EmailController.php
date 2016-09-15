<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Email;
use AddressBookBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class EmailController extends Controller
{
    /**
     * @Route("/addEmail/{id}")
     * @Template()
     */

    public function addEmailAction(Request $request, $id)
    {

        $newEmail = new Email();
        $form = $this->createFormBuilder($newEmail)->add('email', 'email')
            ->add('type', 'choice', array('choices' => array('Domowy' => 'Domowy', 'Służbowy' => 'Służbowy')))
            ->add('Zapisz', 'submit')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
            $person = $repo->find($id);
            $newEmail = $form->getData();
            $newEmail->setPersonId($person);

            $em = $this->getDoctrine()->getManager();
            $em->persist($newEmail);
            $em->flush();
            return $this->redirectToRoute('showPerson', array('id' => $id));
        }
        return array('form' => $form->createView());
    }
    /**
     * @Route("/deleteEmail/{id}")
     * @Template()
     */

    public function deleteEmailAction($id){
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Email');
        $email = $repo->find($id);
        $personId = $email->getPersonId()->getId();


        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($email);
        $em->flush();

        
        return $this->redirectToRoute('showPerson', array('id' => $personId));
    }

}
