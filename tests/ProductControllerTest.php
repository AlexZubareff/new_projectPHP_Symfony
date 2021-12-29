<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client=static::createClient();
        $client->request('GET','/product');
        $this->assertResponseStatusCodeSame(200);
        $this->assertSelectorTextContains('div', 'Title : product 111');
    }
}