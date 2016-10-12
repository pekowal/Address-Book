<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // addressbook_address_addaddress
        if (0 === strpos($pathinfo, '/addAddress') && preg_match('#^/addAddress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_address_addaddress')), array (  '_controller' => 'AddressBookBundle\\Controller\\AddressController::addAddressAction',));
        }

        // addressbook_address_deleteaddress
        if (0 === strpos($pathinfo, '/deleteAddress') && preg_match('#^/deleteAddress/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_address_deleteaddress')), array (  '_controller' => 'AddressBookBundle\\Controller\\AddressController::deleteAddressAction',));
        }

        // addressbook_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_default_index')), array (  '_controller' => 'AddressBookBundle\\Controller\\DefaultController::indexAction',));
        }

        // addressbook_email_addemail
        if (0 === strpos($pathinfo, '/addEmail') && preg_match('#^/addEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_email_addemail')), array (  '_controller' => 'AddressBookBundle\\Controller\\EmailController::addEmailAction',));
        }

        // addressbook_email_deleteemail
        if (0 === strpos($pathinfo, '/deleteEmail') && preg_match('#^/deleteEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_email_deleteemail')), array (  '_controller' => 'AddressBookBundle\\Controller\\EmailController::deleteEmailAction',));
        }

        if (0 === strpos($pathinfo, '/person')) {
            // addressbook_person_newperson
            if ($pathinfo === '/person/new') {
                return array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::newPersonAction',  '_route' => 'addressbook_person_newperson',);
            }

            // addressbook_person_editperson
            if (preg_match('#^/person/(?P<id>[^/]++)/modify$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_editperson')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::editPersonAction',));
            }

            // showPerson
            if (0 === strpos($pathinfo, '/person/showPerson') && preg_match('#^/person/showPerson/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showPerson')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::showPersonAction',));
            }

            // addressbook_person_deleteperson
            if (preg_match('#^/person/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_deleteperson')), array (  '_controller' => 'AddressBookBundle\\Controller\\PersonController::deletePersonAction',));
            }

            // addressbook_person_index
            if (preg_match('#^/person(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_person_index')), array (  'id' => -1,  '_controller' => 'AddressBookBundle\\Controller\\PersonController::indexAction',));
            }

        }

        // addressbook_phone_addphone
        if (0 === strpos($pathinfo, '/addPhone') && preg_match('#^/addPhone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_phone_addphone')), array (  '_controller' => 'AddressBookBundle\\Controller\\PhoneController::addPhoneAction',));
        }

        // addressbook_phone_deletephone
        if (0 === strpos($pathinfo, '/deletePhone') && preg_match('#^/deletePhone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addressbook_phone_deletephone')), array (  '_controller' => 'AddressBookBundle\\Controller\\PhoneController::deletePhoneAction',));
        }

        if (0 === strpos($pathinfo, '/squad')) {
            // addressbook_squad_addgroup
            if ($pathinfo === '/squad/add') {
                return array (  '_controller' => 'AddressBookBundle\\Controller\\SquadController::addGroupAction',  '_route' => 'addressbook_squad_addgroup',);
            }

            // addressbook_squad_deletegroup
            if ($pathinfo === '/squad/remove') {
                return array (  '_controller' => 'AddressBookBundle\\Controller\\SquadController::deleteGroupAction',  '_route' => 'addressbook_squad_deletegroup',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
