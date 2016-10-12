<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\Entity\Squad;
use AddressBookBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class SquadController extends Controller
{
    /**
     * @Route("/squad/addToPerson/{id}")
     * @Template("@AddressBook/Squad/addGroup.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function addGroupToUserAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();


        $form = $this->createFormBuilder()
            ->add('squads', 'entity', array('class' => 'AddressBookBundle:Squad', 'choice_label' => 'name', 'label' => 'Grupa'))
            ->add('Dodaj', 'submit')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $array = $form->getData();
            $squad = $array['squads'];


            $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
            $person = $repo->find($id);
            $loggedUser = $this->container->get('security.context')->getToken()->getUser();
            $person->setUser($loggedUser);


            $personSquads = $person->getSquads();
            $personSquads = $personSquads->toArray();


            foreach ($personSquads as $personSquad){
                if ($personSquad->getName() == $squad->getName()){
                    return array('form' => $form->createView(),'error' => 'Osoba już nalezy do tej grupy!');
                }
            }

            $squad->addPerson($person);
            $person->addSquads($squad);

            $em->persist($squad);
            $em->persist($person);
            $em->flush();
            return $this->redirectToRoute('showPerson', array('id' => $id));

        }


        return array('form' => $form->createView());
    }

    /**
     * @Route("/squad/add")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function addGroupAction(Request $request)
    {

        $em = $this->getDoctrine()->getEntityManager();

        $squad = new Squad();

        $form = $this->createFormBuilder($squad)
            ->add('name', 'text', array('label' => 'Grupa'))
            ->add('Zapisz', 'submit')->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $squad = $form->getData();


            $em->persist($squad);
            $em->flush();


            return $this->redirectToRoute('addressbook_person_index');
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/squad/remove")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteGroupAction(Request $request)
    {
        //$repo = $this->getDoctrine()->getRepository("AddressBookBundle:Suqad");

        //$squad = new Squad();

        $form = $this->createFormBuilder()
            ->add('squads', 'entity', array('class' => 'AddressBookBundle:Squad', 'choice_label' => 'name', 'label' => 'Grupa'))
            ->add('Usuń', 'submit')->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $array = $form->getData();
            $squad = $array['squads'];

            $em = $this->getDoctrine()->getEntityManager();
            $em->remove($squad);
            $em->flush();

            return $this->redirectToRoute('addressbook_person_index');
        }

        return array('form' => $form->createView());
    }


    /**
     * @Route("/squad/{idPerson}/{idSquad}/delete")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function deleteSquadFromPersonAction($idPerson, $idSquad)
    {
        $repoSquad = $this->getDoctrine()->getRepository('AddressBookBundle:Squad');
        $repoPerson = $this->getDoctrine()->getRepository('AddressBookBundle:Person');

        $squad = $repoSquad->find($idSquad);
        $person = $repoPerson->find($idPerson);
        $loggedUser = $this->container->get('security.context')->getToken()->getUser();
        $person->setUser($loggedUser);


        $person->removeSquads($squad);
        $squad->removePerson($person);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($person);
        $em->flush();

        return $this->redirectToRoute('showPerson', array('id' => $person->getId()));
    }

}
