<?php

use PHPUnit\Framework\TestCase;
use Src\User;

class UserTest extends TestCase
{

    public function testConstructorException()
    {
        new User('', 'adminpass');
    }

    /**
     *
     */
    public function testGetRoles()
    {
        $user = new User('goran', 'adminpass');
        $this->assertEquals(array(), $user->getRoles());
        $user = new User('boske87', 'adminpass', array('ROLE_ADMIN'));
        $this->assertEquals(array('ROLE_ADMIN'), $user->getRoles());
    }

    public function testGetPassword()
    {
        $user = new User('fabien', 'superpass');
        $this->assertEquals('superpass', $user->getPassword());
    }


    public function testToString()
    {
        $user = new User('goran', 'adminpass');
        $this->assertEquals('goran', (string) $user);
    }


}

