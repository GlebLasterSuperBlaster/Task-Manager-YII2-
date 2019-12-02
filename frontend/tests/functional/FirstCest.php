<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class FirstCest
{
    public function _before(FunctionalTester $I)
    {
    }

    /**
     * @dataProvider pageProvider
     * @param FunctionalTester $I
     * @param \Codeception\Example $data
     */
    public function tryToTest(FunctionalTester $I, \Codeception\Example $data)
    {
        $I->amOnPage($data['url']);
        $I->see($data['title'], 'h1');
    }

    /**
     * @return array
     */
    protected function pageProvider() // alternatively, if you want the function to be public, be sure to prefix it with `_`
    {
        return [
            ['url'=>"/", 'title'=>"Congratulations!"],
            ['url'=>"site/signup", 'title'=>"Signup"],
            ['url'=>"site/about", 'title'=>"About"],
            ['url'=>"site/contact", 'title'=>"Contact"],
            ['url'=>"site/login", 'title'=>"Login"],
            ['url'=>"site/index", 'title'=>"Congratulations!"]
        ];
    }
}
