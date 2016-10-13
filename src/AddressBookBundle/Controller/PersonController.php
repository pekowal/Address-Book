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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Choice;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;


/**
 * Class PersonController
 * @package AddressBookBundle\Controller
 * @Route("/person")
 */
class PersonController extends Controller
{
    /**
     * @Route("/new")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function newPersonAction(Request $request)
    {
        $loggedUser = $this->container->get('security.context')->getToken()->getUser();

        $person = new Person();
        $person->setUser($loggedUser);
        $squad = new Squad();

        $form = $this->createFormBuilder()
            ->add('name', 'text', array('label' => 'Imię:'))
            ->add('surname', 'text', array('label' => 'Nazwisko:'))
            ->add('description', 'text', array('label' => 'Opis:'))
            ->add('squads', 'entity', array('class' => 'AddressBookBundle:Squad', 'choice_label' => 'name', 'label' => 'Grupa'))
            ->add('photo', 'file', array('label' => 'Zdjęcie:', 'required' => false))
            ->add('save', 'submit', array('label' => 'Stwórz Osobę'))
            ->getForm();


        $form->handleRequest($request);

        if ($request->getMethod() === "POST") {


            if ($form->isSubmitted() && $form->isValid()) {
                $array = $form->getData();


                if ($array['photo'] != null) {

                    $file = $array['photo'];
                    $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move('Uploads', $fileName);

                    $person->setPhoto($fileName);
                }


                $person->setDescription($array['description']);
                $person->setName($array['name']);
                $person->setSurname($array['surname']);
                //$person->addSquads($array['squads']);

                if (!empty($array['squads'])) {
                    $squad = $array['squads'];
                    $squad->addPerson($person);
                    $person->addSquads($squad);
                }

                $validator = $this->get('validator');
                $errors = $validator->validate($person);


                if (count($errors) > 0) {
                    return array(
                        'form' => $form->createView(),
                        'validError' => "Wypełnij imię i nazwisko!",
                        'errorEntity' => $errors
                    );

                }


                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->persist($squad);

                $em->flush();

                return $this->redirectToRoute('showPerson', array('id' => $person->getId(), 'formData' => $squad));
            }
        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/{id}/modify")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public
    function editPersonAction($id, Request $request)
    {
        $repoPerson = $this->getDoctrine()->getRepository('AddressBookBundle:Person');
        $repoSquad = $this->getDoctrine()->getRepository('AddressBookBundle:Squad');

        $person = $repoPerson->find($id);
        $loggedUser = $this->container->get('security.context')->getToken()->getUser();
        $person->setUser($loggedUser);


        //$squad = new Squad();


        $form = $this->createFormBuilder()
            ->add('name', 'text', array('data' => $person->getName(), 'label' => 'Imię:'))
            ->add('surname', 'text', array('data' => $person->getSurname(), 'label' => 'Nazwisko:'))
            ->add('description', 'text', array('data' => $person->getDescription(), 'label' => 'Opis:'))
            //->add('squads', 'entity', array('class' => 'AddressBookBundle:Squad', 'choice_label' => 'name', 'label' => 'Grupa'))
            ->add('photo', 'file', array('label' => 'Zdjęcie:'))
            ->add('save', 'submit', array('label' => 'Zapisz zmiany'))
            ->getForm();

        $form->handleRequest($request);
        if ($request->getMethod() === 'POST') {
            if ($form->isSubmitted() && $form->isValid()) {

                $array = $form->getData();

                // $squad = $array['squads'];

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

                /*
                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($person);
                    $em->persist($squad);

                    $em->flush();
                } catch (\Doctrine\DBAL\DBALException $e) {
                    //return $this->redirectToRoute('showPerson', array('id' => $person->getId(), 'error' => 'Użytkownik juz należy do tej grupy'));
                    return $this->render('AddressBookBundle:Person:editPerson.html.twig', array(
                        'id' => $person->getId(),
                        'error' => 'Użytkownik juz należy do tej grupy',
                        'form' => $form->createView(),
                        'photo' => $person->getPhoto()));

                }
                */

                return $this->redirectToRoute('showPerson', array('id' => $person->getId()));
            }
        }
        return array('form' => $form->createView(), 'photo' => $person->getPhoto(), 'id' => $person->getId() );
    }

    /**
     * @Route("/show/{id}", name="showPerson")
     * @Template()
     * @Security("has_role('ROLE_USER')")
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

        $squadRepo = $this->getDoctrine()->getRepository('AddressBookBundle:Squad');

        $squads = $person->getSquads();
        return array('person' => $person, 'email' => $email, 'phone' => $phone, 'address' => $address, 'squads' => $squads);
    }

    /**
     * @Route("/{id}/delete")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public
    function deletePersonAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');

        $person = $repo->find($id);
        $em = $this->getDoctrine()->getManager();

        $em->remove($person);
        $em->flush();

        return $this->redirect('/person');
    }


    /**
     * @Route("/")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function indexAction(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository('AddressBookBundle:Person');

        $loggedUser = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM AddressBookBundle:Person p
            WHERE p.user = :loggedUser ORDER BY p.surname'
        )->setParameter('loggedUser', $loggedUser);

        $persons = $query->getResult();

        $form = $this->createFormBuilder()
            ->add('search', 'search', array('label' => false))
            ->add('Szukaj', 'submit', array('attr' => array('class' => 'btn btn-primary')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $toSearch = $form->getData();
            $persons = $this->getDoctrine()->getEntityManager()->createQuery(
                'SELECT p FROM AddressBookBundle:Person p 
                 WHERE (p.name LIKE :toSearch OR p.surname LIKE :toSearch)
                 AND p.user = :loggedUser'
            )->setParameter('toSearch', $toSearch['search'] . '%')
                ->setParameter('loggedUser', $loggedUser)->getResult();
            return array('persons' => $persons, 'form' => $form->createView());
        }


        return array('persons' => $persons, 'form' => $form->createView());


    }

    /**
     * @Route("/photo/remove/{id}")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */

    public function deletePhotoAction($id){

        $repo = $this->getDoctrine()->getRepository("AddressBookBundle:Person");

        $person = $repo->find($id);


        $fs = new Filesystem();


        //$fs->chown('Uploads','www-data',true);

        $fs->remove(array('Uploads'));

        $person->setPhoto("");

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($person);
        $em->flush();

        return $this->redirect('/person/show/'.$person->getId());

    }
}
