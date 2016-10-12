<?php

namespace AddressBookBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SquadControllerTest extends WebTestCase
{
    public function testAddgroup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addGroup');
    }

}
