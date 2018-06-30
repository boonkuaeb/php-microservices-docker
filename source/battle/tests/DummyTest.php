<?php 

class DummyTest extends TestCase
{
    public function testFailAssertArrayHasKey() 
    { 
       $dummy = new App\Dummy(); 
 
       $this->assertArrayHasKey('foo', $dummy::getConfigArray()); 
    }

    public function testPassAssertArrayHasKey() 
    { 
       $dummy = new App\Dummy(); 
 
       $this->assertArrayHasKey('storage', $dummy::getConfigArray()); 
    }

    public function testAssertClassHasAttribute() 
    { 
      $this->assertClassHasAttribute('foo', App\Dummy::class); 
      $this->assertClassHasAttribute('bar', App\Dummy::class); 
    }

    public function testAssertArraySubset() 
    { 
       $dummy = new App\Dummy(); 
 
       $this->assertArraySubset(['storage' => [ 
        'host' => 'localhost',
        'port' => 5432, 
        'user' => 'my-user', 
        'pass' => 'my-secret-password' 
        ]], 
        $dummy::getConfigArray()); 
    }

    public function testAssertClassHasStaticAttribute() 
    { 
      $this->assertClassHasStaticAttribute('availableLocales', 
      App\Dummy::class); 
    }
    public function testAssertRegExp() 
    { 
       $this->assertRegExp('/^CODE\-\d{2,7}[A-Z]$/', 
       App\Dummy::getRandomCode()); 
    }



}