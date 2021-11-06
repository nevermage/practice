<?php

class MainControllerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->see('Apple');
        $I->see('45.00 uah');
        $I->see('Pear');
        $I->dontSee('order');

        $I->amOnPage('/product/3');
        $I->see('Pear');
        $I->see('34.00');
        $I->dontSee('apple');
    }
}
