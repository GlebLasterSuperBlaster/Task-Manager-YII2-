<?php namespace frontend\tests;

use frontend\models\ContactForm;

class FirstTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $test_form = New ContactForm();
       $values = [ 'name' => 'Gleb',
           'email' => 'fokin3@mail.ru'];
       $test_form->attributes = $values;
       $test = True;
       $test_1 = 231;
        $this->assertTrue($test);
        $this->assertEquals(231,$test_1);
        $this->assertLessThan(250,$test_1);
        $this->assertAttributeEquals('Gleb','name',$test_form);
        $this->assertArrayHasKey('email',$values);
        expect($test_form->name)->equals('Gleb');
    }
}