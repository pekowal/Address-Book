<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'addressbook_address_addaddress' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\AddressController::addAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addAddress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_address_deleteaddress' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\AddressController::deleteAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteAddress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_email_addemail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\EmailController::addEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addEmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_email_deleteemail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\EmailController::deleteEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteEmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_newperson' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::newPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/person/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_editperson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::editPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modify',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showPerson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::showPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/person/showPerson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_deleteperson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::deletePersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_index' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => -1,    '_controller' => 'AddressBookBundle\\Controller\\PersonController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_phone_addphone' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PhoneController::addPhoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addPhone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_phone_deletephone' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PhoneController::deletePhoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletePhone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_squad_addgroup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\SquadController::addGroupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/squad/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_squad_deletegroup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\SquadController::deleteGroupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/squad/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
