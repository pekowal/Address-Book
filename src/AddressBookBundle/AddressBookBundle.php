<?php

namespace AddressBookBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AddressBookBundle extends Bundle
{
    public function getParent()
    {
        //parent::getParent();
        return "FOSUserBundle";
    }
}
