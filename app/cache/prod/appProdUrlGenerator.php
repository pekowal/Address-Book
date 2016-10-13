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
        'addressbook_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_email_addemail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\EmailController::addEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addEmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_email_deleteemail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\EmailController::deleteEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteEmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_newperson' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::newPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/person/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_editperson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::editPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modify',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showPerson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::showPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/person/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_deleteperson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::deletePersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/person',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/person/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_person_deletephoto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PersonController::deletePhotoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/person/photo/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_phone_addphone' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PhoneController::addPhoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addPhone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_phone_deletephone' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\PhoneController::deletePhoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletePhone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_squad_addgrouptouser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\SquadController::addGroupToUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/squad/addToPerson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_squad_addgroup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\SquadController::addGroupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/squad/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_squad_deletegroup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\SquadController::deleteGroupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/squad/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addressbook_squad_deletesquadfromperson' => array (  0 =>   array (    0 => 'idPerson',    1 => 'idSquad',  ),  1 =>   array (    '_controller' => 'AddressBookBundle\\Controller\\SquadController::deleteSquadFromPersonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSquad',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idPerson',    ),    3 =>     array (      0 => 'text',      1 => '/squad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
