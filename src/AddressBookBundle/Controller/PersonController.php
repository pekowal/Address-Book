<?php

namespace AddressBookBundle\Controller;

use AddressBookBundle\AddressBookBundle;
use AddressBookBundle\Entity\Address;
use AddressBookBundle\Entity\Email;
use AddressBookBundle\Entity\Person;
use AddressBookBundle\Entity\Phone;
use AddressBookBundle\Entity\Squad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Choice;
use Doctrine\Common\Collections\ArrayCollection;

class PersonController extends Controller
{
    /**
     * @Route("/new")
     * @Template()
     */
    public function newPersonAction(Request $request)
    {
        $person = new Person();
        //$squad = new Squad();

        $form = $this->createFormBuilder($person)
            ->add('name', 'text', array('label' => 'Imię:'))
            ->add('surname', 'text', array('label' => 'Nazwisko:'))
            ->add('description', 'text', array('label' => 'Opis:'))
            //->add('squads','entity', array('class' => 'AddressBookBundle:Squad','choice_label'=>'name','label' => 'Grupa'))
            ->add('photo', 'file', array('label' => 'Zdjęcie:'))
            ->add('save', 'submit', array('label' => 'Stwórz Osobę'))
            ->getForm();

        $form->handleRequest($request);

        if ($request->getMethod() === "POST") {


            if ($form->isSubmitted() && $form->isValid()) {
                $newPerson = $form->getData();

                if ($newPerson->getPhoto() != null) {

                    $file = $newPerson->getPhoto();
                    $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move('Uploads', $fileName);

                    $newPerson->setPhoto($fileName);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();

                return $this->redirectToRoute('addressbook_person_index', array('id' => $person->getId()));
            }
        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/{id}/modify")
     * @Template()
     */
    public
    function editPersonAction($id, Request $request)
    {
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $repo->find($id);

        $address = new Address();
        $email = new Email();
        $phone = new Phone();
        $squad = new Squad();


        $form = $this->createFormBuilder()
            ->add('name', 'text', array('data' => $person->getName()))
            ->add('surname', 'text', array('data' => $person->getSurname()))
            ->add('description', 'text', array('data' => $person->getDescription()))
            ->add('photo', 'file')
            //->add('email','email')
            //->add('type','choice',array('choices' => array('Domowy' => 'Domowy', 'Służbowy1' => 'Służbowy')))
            ->add('save', 'submit', array('label' => 'Zapisz zmiany'))
            ->getForm();

        $form->handleRequest($request);
        if ($request->getMethod() === 'POST') {
            if ($form->isSubmitted() && $form->isValid()) {

                $array = $form->getData();
                $person->setName($array['name']);
                $person->setSurname($array['surname']);
                $person->setDescription($array['description']);


                var_dump($array);
                if ($array['photo']) {
                    $file = $array['photo'];
                    $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move('Uploads', $fileName);

                    $person->setPhoto($fileName);


                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();
                return $this->redirectToRoute('showPerson', array('id' => $person->getId()));
            }
        }
        return array('form' => $form->createView(), 'photo' => $person->getPhoto());
    }

    /**
     * @Route("/showPerson/{id}", name="showPerson")
     * @Template()
     */

    public function showPersonAction($id)
    {
        $personRepo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $person = $personRepo->find($id);
        $emailRepo = $this->getDoctrine()->getRepository('AddressBookBundle:Email');
        $email = $emailRepo->findByPersonId($id);
        $phoneRepo = $this->getDoctrine()->getRepository('AddressBookBundle:Phone');
        $phone = $phoneRepo->findByPersonId($id);
        $addressRepo = $this->getDoctrine()->getRepository('AddressBookBundle:Address');
        $address = $addressRepo->findByPersonId($id);
        //$squadRepo = $this->getDoctrine()->getRepository('AddressBookBundle:Squad');

        $groups = $person->getSquads();
        return array('person' => $person, 'email' => $email, 'phone' => $phone, 'address' => $address);
    }

    /**
     * @Route("/{id}/delete")
     * @Template()
     */
    public
    function deletePersonAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');

        $person = $repo->find($id);
        $em = $this->getDoctrine()->getManager();

        $em->remove($person);
        $em->flush();

        return $this->redirect('/');
    }

    /**
     * @Route("/{id}")
     * @Template()
     */
    public
    function indexAction($id = -1)
    {
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        if (($id > 0)) {
            $person = $repo->find($id);
            return array('person' => $person);
        } else {
            $persons = $repo->findAll();
            return array('persons' => $persons);
        }


    }
    /*
        /**
         * @Route("/")
         * @Method("POST")
         * @Template("AddressBookBundle:Person:index.html.twig")
         */

    /*
    public function searchAction(Request $request){

        array('post' => $request);
    }
*/
}
