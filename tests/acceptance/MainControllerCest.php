<?php

use Codeception\Util\HttpCode;

class MainControllerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/page');
        $I->seeResponseCodeIs(HttpCode::NOT_FOUND);
    }
    public function tryToTestProductPage(AcceptanceTester $I)
    {
        $I->amOnPage('/product/2');
        $I->click('Apple');
        $I->dontSee('Pear');
    }

    public function tryToTestCatalogLoad(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->see('Apple');
        $I->see('45.00 uah');
        $I->see('Pear');
    }
}
